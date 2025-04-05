<?php

// Database connection
$servername = "127.0.0.1";
$username = "root";
$password_db = "";  
$database = "int219";

// Create connection
$conn = new mysqli($servername, $username, $password_db, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

// Initialize variables
$total = 0;
$subtotal = 0;
$items = [];
$item_count = 0;
$error_message = "";
$success_message = "";

// Fetch cart items from session or database
// For this example, we'll use dummy data
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    // Sample cart data for demonstration
    $_SESSION['cart'] = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 29.99, 'quantity' => 1],
        ['id' => 2, 'name' => 'Product 2', 'price' => 49.99, 'quantity' => 2]
    ];
}

// Calculate total, subtotal and item count
foreach ($_SESSION['cart'] as $item) {
    $subtotal += $item['price'] * $item['quantity'];
    $item_count += $item['quantity'];
    $items[] = $item;
}

// Calculate shipping (example: flat rate of $5.99)
$shipping = 5.99;

// Calculate tax (example: 8.5%)
$tax_rate = 0.085;
$tax = $subtotal * $tax_rate;

// Calculate total
$total = $subtotal + $shipping + $tax;

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);
    $card_number = filter_input(INPUT_POST, 'card_number', FILTER_SANITIZE_STRING);
    $card_expiry = filter_input(INPUT_POST, 'card_expiry', FILTER_SANITIZE_STRING);
    $card_cvv = filter_input(INPUT_POST, 'card_cvv', FILTER_SANITIZE_STRING);
    
    // Validate fields
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format";
    } else {
        // Create order in database
        $order_date = date("Y-m-d H:i:s");
        
        // Insert order into database
        $sql = "INSERT INTO order_details (first_name, last_name, email, address, city, zip, order_date, subtotal, tax, shipping, total_amount) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssdddd", $first_name, $last_name, $email, $address, $city, $zip, $order_date, $subtotal, $tax, $shipping, $total);
        
        if ($stmt->execute()) {
            $order_id = $conn->insert_id;
            
            // Insert order items
            $item_sql = "INSERT INTO order_items (order_id, product_id, quantity, price) 
                        VALUES (?, ?, ?, ?, ?)";
            
            $item_stmt = $conn->prepare($item_sql);
            
            foreach ($items as $item) {
                $item_stmt->bind_param("iisid", $order_id, $item['id'], $item['name'], $item['quantity'], $item['price']);
                $item_stmt->execute();
            }
            
            // Clear cart
            $_SESSION['cart'] = [];
            
            $success_message = "Order placed successfully! Your order ID is #" . $order_id;
        } else {
            $error_message = "Error placing order: " . $conn->error;
        }
    }
}
?>
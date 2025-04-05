<?php
// Include your database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "int219";

// Create connection without specifying database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if product ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: index.php');
    exit;
}

// Get product ID and sanitize it
$product_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Make sure we have a valid connection
if (!isset($conn) || $conn->connect_error) {
    // Attempt to reconnect if connection is closed
    include 'sql.php';
    
    // Check if reconnection worked
    if (!isset($conn) || $conn->connect_error) {
        die("Database connection failed: " . ($conn->connect_error ?? "Connection object is not available"));
    }
}

// Prepare and execute query
$stmt = $conn->prepare("SELECT * FROM product WHERE id = ?");
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if product exists
if ($result->num_rows === 0) {
    header('Location: index.php');
    exit;
}

// Fetch product details
$product = $result->fetch_assoc();

// Calculate discount percentage
$original_price = floatval($product['original_price'] ?? 0);
$current_price = floatval($product['current_price'] ?? 0);
$discount_percentage = 0;
if ($original_price > 0 && $current_price < $original_price) {
    $discount_percentage = round(100 - ($current_price / $original_price * 100));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?> - Your Store</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Add any additional CSS files you need -->
</head>
<body>
    <!-- Include your header -->
    <?php include 'header.php'; ?>
    
    <div class="container">
        <div class="single-product">
            <div class="product-gallery">
                <div class="main-image">
                    <img src="<?php echo !empty($product['image']) ? htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') : 'images/default.jpg'; ?>" 
                         alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <?php if ($discount_percentage > 0): ?>
                        <span class="discount"><?php echo htmlspecialchars($discount_percentage); ?>% OFF</span>
                    <?php endif; ?>
                </div>
                <!-- If you have multiple images, you can add thumbnail gallery here -->
            </div>
            
            <div class="product-details">
                <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                
                <div class="category">
                    <?php echo htmlspecialchars($product['category'] ?? 'Uncategorized'); ?>
                </div>
                
                <div class="price-container">
                    <?php if ($original_price > $current_price): ?>
                        <span class="original-price">₹<?php echo htmlspecialchars(number_format($original_price, 2)); ?></span>
                    <?php endif; ?>
                    <span class="current-price">₹<?php echo htmlspecialchars(number_format($current_price, 2)); ?></span>
                </div>
                
                <div class="product-description">
                    <h3>Description</h3>
                    <p><?php echo htmlspecialchars($product['description'] ?? ''); ?></p>
                </div>
                
                <?php if (!empty($product['specifications'])): ?>
                <div class="product-specifications">
                    <h3>Specifications</h3>
                    <p><?php echo htmlspecialchars($product['specifications']); ?></p>
                </div>
                <?php endif; ?>
                
                <div class="purchase-options">
                    <div class="quantity">
                        <span>Quantity:</span>
                        <button class="qty-btn">-</button>
                        <input type="number" id="quantity" value="1" min="1">
                        <button class="qty-btn">+</button>
                    </div>
                    
                    <button class="buy-btn" onclick="addToCart(<?php echo $product['id']; ?>);">Add to Cart</button>
                    <button class="buy-now-btn">Buy Now</button>
                </div>
            </div>
        </div>
        
        <!-- You can add related products, reviews, etc. here -->
    </div>
    
    <!-- Include your footer -->
    <?php include 'footer.php'; ?>
    
    <script>
        // Script to handle quantity buttons
        document.addEventListener('DOMContentLoaded', function() {
            const qtyButtons = document.querySelectorAll('.qty-btn');
            const qtyInput = document.getElementById('quantity');
            
            qtyButtons.forEach(button => {
                button.addEventListener('click', function() {
                    let currentValue = parseInt(qtyInput.value);
                    
                    if (this.textContent === '+') {
                        qtyInput.value = currentValue + 1;
                    } else if (this.textContent === '-' && currentValue > 1) {
                        qtyInput.value = currentValue - 1;
                    }
                });
            });
        });
        
        // Function to add product to cart
        function addToCart(productId) {
            const quantity = document.getElementById('quantity').value;
            // Add your cart logic here - could be AJAX call to add to cart or redirect
            console.log(`Adding product ${productId} with quantity ${quantity} to cart`);
            // Example AJAX call:
            // fetch('add_to_cart.php', {
            //     method: 'POST',
            //     headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            //     body: `product_id=${productId}&quantity=${quantity}`
            // })
            // .then(response => response.json())
            // .then(data => {
            //     // Update cart UI or show notification
            // });
        }
    </script>
</body>
</html>
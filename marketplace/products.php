<?php 
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$database = "int219";  

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $database); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}  

// Fetch Products based on the table structure
$sql = "SELECT id, name, COALESCE(image_url, 'https://example.com/default.jpg') AS image,
               category, `desc` AS description, cost_price AS original_price, 
               selling_price AS current_price, created_at
        FROM product 
        WHERE deleted_at IS NULL"; 
$result = $conn->query($sql);

// Check if query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Marketplace</title>
    <link rel="stylesheet" href="../market.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
       .productH {
            text-align: center;  
            margin: 20px 0;  
            margin-left: 470px;
        }
        /* Navigation Bar */
        .navbar1 {
            padding: 16px 0; /* py-4 */
            border-bottom: 2px solid #1B4332; /* border-[#1B4332] */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* shadow-md */
            margin-top: 70px; /* mt-[70px] */
        }


        /* Centered Flexbox Container */
        .nav-container1 {
            max-width: 1280px; /* container */
            margin: 0 auto;
            display: flex;
            justify-content: center;
            gap: 16px; /* space-x-4 */
        }

        /* Navigation Links */
        .nav-link1 {
            padding: 12px 24px; /* px-6 py-3 */
            font-weight: 600; /* font-semibold */
            color: white;
            background-color: #52B788; /* bg-[#52B788] */
            border-radius: 6px; /* rounded-md */
            text-decoration: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* transition duration-300 */
        }

        /* Hover Effect */
        .nav-link1:hover {
            background-color: #1B4332; /* hover:bg-[#1B4332] */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* hover:shadow-md */
        }

    </style>
</head>
<body>
    <!-- Header -->
    <?php 
    session_start();
    $loggedin = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
    $fullname = $_SESSION['fullname'] ?? "";
    $email = $_SESSION['email'] ?? "";
    $initial = $loggedin ? strtoupper($fullname[0]) : ""; // First letter of full name
    ?>

<?php include '../header.php'; ?>


<section class="products" id="products">
    <h3 class="productH">Featured Products</h3>
    <div class="product-grid">
        <?php while ($product = $result->fetch_assoc()) { 
            // Calculate discount percentage
            $original_price = floatval($product['original_price'] ?? 0);
            $current_price = floatval($product['current_price'] ?? 0);
            $discount_percentage = 0;
            
            if ($original_price > 0 && $current_price < $original_price) {
                $discount_percentage = round(100 - ($current_price / $original_price * 100));
            }
        ?>
            <div class="product-card" onclick="window.location.href='single_product.php?id=<?php echo $product['id']; ?>';" style="cursor: pointer;">
                <div class="product-image">
                    <img src="<?php echo !empty($product['image']) ? htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') : 'images/default.jpg'; ?>"
                          class="card-img-top"
                          alt="<?php echo htmlspecialchars($product['name'] ?? 'Product Image', ENT_QUOTES, 'UTF-8'); ?>">
                    
                    <?php if ($discount_percentage > 0): ?>
                        <span class="discount"><?php echo htmlspecialchars($discount_percentage); ?>% OFF</span>
                    <?php endif; ?>
                </div>
                
                <h4><?php echo htmlspecialchars($product['name']); ?></h4>
                
                <div class="category"><?php echo htmlspecialchars($product['category'] ?? 'Uncategorized'); ?></div>
                
                <p class="description"><?php echo htmlspecialchars($product['description'] ?? ''); ?></p>
                
                <div class="price-container">
                    <span class="original-price">₹<?php echo htmlspecialchars(number_format($original_price, 2)); ?></span>
                    <span class="current-price">₹<?php echo htmlspecialchars(number_format($current_price, 2)); ?></span>
                </div>
                
                <!-- <div class="quantity">
                <button class="qty-btn" onclick="event.stopPropagation();">-</button>
                    <input type="number" value="1" min="1" onclick="event.stopPropagation();">
                    <button class="qty-btn" onclick="event.stopPropagation();">+</button>
                </div> -->
                

                <button class="buy-btn" onclick="event.stopPropagation(); addToCart(
                    <?php echo $product['id']; ?>, 
                    '<?php echo htmlspecialchars(addslashes($product['name'])); ?>', 
                    <?php echo $product['current_price']; ?>, 
                    '<?php echo htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>', 
                    document.getElementById('quantity').value
                );">Add to Cart</button>

            </div>
        <?php } ?>
    </div>
</section>

<?php include '../footer.php'; ?>

    <script src="script.js"></script>
    <script src="market.js"></script>
</body>
</html>
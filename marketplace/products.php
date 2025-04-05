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
    <link rel="stylesheet" href="../style.css">
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

<header>
    <nav class="navbar">
        <div class="logo">
            <img src="./images/—Pngtree—100 organic label_4130500.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="marketplace.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="contact1.php">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <?php if (!$loggedin): ?>
                <button class="btn login">
                    <a href="marketlogin.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
                </button>
            <?php else: ?>
                <div class="profile-section">
                    <button class="btn logout">
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                    </button>
                </div>
            <?php endif; ?>
    </nav>
               <!-- Category Navigation (Positioned Below the Main Navbar) -->
        <nav class="navbar1">
            <div class="nav-container1">
                <a href="#products" class="nav-link1">All</a>
                <a href="tractors.php" class="nav-link1">Tractors</a>
                <a href="seeds.html" class="nav-link1">Seeds</a>
                <a href="fertilizers.html" class="nav-link1">Fertilizers</a>
                <a href="tools.html" class="nav-link1">Tools</a>
            </div>
        </nav>

    
</header>


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
                    <button class="buy-btn" onclick="event.stopPropagation(); addToCart(<?php echo $product['id']; ?>);">Add to Cart</button>
                </div>
        <?php } ?>
    </div>
</section>

    <!-- Footer -->
     <!-- Add this cart HTML just before the footer -->
     <div class="cart">
    <div class="cart-header">
        <i class="fa-solid fa-cart-shopping"></i>
        <h3>Your Cart (<span id="cart-count">0</span>)</h3>
        <button class="close-cart">&times;</button>
    </div>
    <div class="cart-items"></div>
    <form class="cart-total"  method="POST"  action="checkout.php">
        <h4>Total: ₹<span id="cart-total">0</span></h4>
        <button class="checkout-btn">Proceed to Checkout</button>
            </form>
</div>

<!-- Add this popup div at the end of body -->

<!-- Add cart icon in navbar -->
<div class="cart-icon">
    <i style="color: purple" class="fa-solid fa-cart-shopping"></i><span class="cart-counter">0</span>
</div>
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h4>About Us</h4>
                <p>Connecting farmers directly with consumers</p>
            </div>
            <div class="footer-section links">
                <h4>Quick Links</h4>
                <ul style="list-style-type: none; margin-left: 12px;">
                    <li><a href="marketplace.html">Home</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="sell.html">Sell</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h4>Contact Us</h4>
                <p>Email: rajsudhanshu106@gamil.com</p>
                <p>Phone: +91 91550 33078</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="market.js"></script>
</body>
</html>
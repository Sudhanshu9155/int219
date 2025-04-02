<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Marketplace</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="market.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .productH {
        text-align: center;
        margin-left: 470px;
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
</header>


    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h2 >Buy & Sell Fresh Agricultural Products</h2>
            <p>Connect directly with farmers and buyers nationwide</p>
            <a href="#products"><button class="cta-btn">Start Shopping</button></a>
        </div>
        <div class="custom-shape-divider-bottom-1736187245">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Featured Products -->
    <!-- In the products section -->
<section class="products" id="products">
    <h3 class="productH">Featured Products</h3>
    <div class="product-grid">
        <!-- Product Cards -->
        <div class="product-card">
            <div class="product-image">
                <img src="https://assets.tractorjunction.com/tractor-junction/assets/images/upload/farmtrac-atom-26-1690535758.webp" alt="Mini Tractor">
                <span class="discount">10% OFF</span>
            </div>
            <h4>Mini Tractor</h4>
            <div class="rating">
                ★★★★☆ (24 reviews)
            </div>
            <p class="description">15HP Diesel Engine with 2 Years Warranty</p>
            <div class="price-container">
                <span class="original-price">₹360,000</span>
                <span class="current-price">₹324,000</span>
            </div>
            <div class="quantity">
                <button class="qty-btn">-</button>
                <input type="number" value="1" min="1">
                <button class="qty-btn">+</button>
            </div>
            <button class="buy-btn">Add to Cart</button>
        </div>
         <!-- Product 2 -->
    <div class="product-card">
        <div class="product-image">
            <img src="https://assets.tractorjunction.com/tractor-junction/assets/images/upload/3036e-1632220005.webp" alt="John Deere Mini">
            <span class="discount">5% OFF</span>
        </div>
        <h4>John Deere Mini</h4>
        <div class="rating">★★★★★ (32 reviews)</div>
        <p class="description">20HP Diesel Engine, High Performance</p>
        <div class="price-container">
            <span class="original-price">₹400,000</span>
            <span class="current-price">₹380,000</span>
        </div>
        <div class="quantity">
            <button class="qty-btn">-</button>
            <input type="number" value="1" min="1">
            <button class="qty-btn">+</button>
        </div>
        <button class="buy-btn">Add to Cart</button>
    </div>

    <!-- Product 3 -->
    <div class="product-card">
        <div class="product-image">
            <img src="https://tractor.cmv360.com/_next/image?url=https%3A%2F%2Fd1odgbsvvxl2qd.cloudfront.net%2Fsmall_Target_630_429afda627.jpg&w=1080&q=75" alt="Swaraj Mini">
            <span class="discount">8% OFF</span>
        </div>
        <h4>Swaraj Mini</h4>
        <div class="rating">★★★★☆ (18 reviews)</div>
        <p class="description">18HP, Diesel Engine, Low Maintenance</p>
        <div class="price-container">
            <span class="original-price">₹350,000</span>
            <span class="current-price">₹322,000</span>
        </div>
        <div class="quantity">
            <button class="qty-btn">-</button>
            <input type="number" value="1" min="1">
            <button class="qty-btn">+</button>
        </div>
        <button class="buy-btn">Add to Cart</button>
    </div>

    <!-- Product 4 -->
    <div class="product-card">
        <div class="product-image">
            <img src="https://5.imimg.com/data5/SELLER/Default/2020/10/HT/IL/IH/83761988/new-product-500x500.jpeg" alt="Eicher Mini">
            <span class="discount">7% OFF</span>
        </div>
        <h4>Eicher Mini</h4>
        <div class="rating">★★★☆☆ (12 reviews)</div>
        <p class="description">22HP, Fuel Efficient, Low Cost</p>
        <div class="price-container">
            <span class="original-price">₹330,000</span>
            <span class="current-price">₹306,000</span>
        </div>
        <div class="quantity">
            <button class="qty-btn">-</button>
            <input type="number" value="1" min="1">
            <button class="qty-btn">+</button>
        </div>
        <button class="buy-btn">Add to Cart</button>
    </div>
    <!--product 4-->
    <div class="product-card">
        <div class="product-image">
            <img src="https://m.media-amazon.com/images/I/61PK43QvaqL.jpg" alt="Organic Wheat">
            <span class="discount">20% OFF</span>
        </div>
        <h4>Organic Wheat</h4>
        <div class="rating">★★★★☆ (150 reviews)</div>
        <p class="description">22HP, Fuel Efficient, Low Cost</p>
        <div class="price-container">
            <span class="original-price">₹200/kg</span>
            <span class="current-price">₹160/kg</span>
        </div>
        <div class="quantity">
            <button class="qty-btn">-</button>
            <input type="number" value="1" min="1">
            <button class="qty-btn">+</button>
        </div>
        <button class="buy-btn">Add to Cart</button>
    </div>

    
</section>
     <!-- Add this cart HTML just before the footer -->
<div class="cart-overlay"></div>
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
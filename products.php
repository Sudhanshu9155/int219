<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Marketplace</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="market.css">
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
            <li><a href="contact1.html">Contact</a></li>
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
            <div class="quantity">
                <button class="qty-btn">-</button>
                <input type="number" value="1" min="1">
                <button class="qty-btn">+</button>
            </div>
            <button class="buy-btn">Add to Cart</button>
        </div>
        <!-- Tractors -->

        <div class="product-card">
            <div class="product-image">
                <img src="https://5.imimg.com/data5/SELLER/Default/2024/2/392815151/UX/YG/YV/86314498/7.jpg" alt="Hybrid Wheat">
                <span class="discount">12% OFF</span>
            </div>
            <h4>Hybrid Wheat Seeds</h4>
            <div class="rating">★★★★★ (200 reviews)</div>
            <p class="description">Disease-resistant and high-yield variety.</p>
            <div class="price-container">
                <span class="original-price">₹250/kg</span>
                <span class="current-price">₹220/kg</span>
            </div>
            <div class="quantity">
                <button class="qty-btn">-</button>
                <input type="number" value="1" min="1">
                <button class="qty-btn">+</button>
            </div>
            <button class="buy-btn">Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="https://organicindia.com/cdn/shop/files/organic-red-rice-in-india.jpg?v=1734506572" alt="Organic Rice">
                <span class="discount">15% OFF</span>
            </div>
            <h4>Organic Rice Seeds</h4>
            <div class="rating">★★★★☆ (98 reviews)</div>
            <p class="description">Best for organic farming.</p>
            <div class="price-container">
                <span class="original-price">₹220/kg</span>
                <span class="current-price">₹187/kg</span>
            </div>
            <div class="quantity">
                <button class="qty-btn">-</button>
                <input type="number" value="1" min="1">
                <button class="qty-btn">+</button>
            </div>
            <button class="buy-btn">Add to Cart</button>
        </div>

        <!-- Fertilizers -->
        <div class="product-card">
            <div class="product-image">
                <img src="https://organicbazar.net/cdn/shop/products/vermicompost-10kg-compressed.jpg?v=1694168932" alt="Organic Fertilizer">
                <span class="discount">10% OFF</span>
            </div>
            <h4>Organic Fertilizer</h4>
            <div class="rating">★★★★☆ (70 reviews)</div>
            <p class="description">100% natural manure for healthy crops.</p>
            <div class="price-container">
                <span class="original-price">₹500/bag</span>
                <span class="current-price">₹450/bag</span>
            </div>
            <div class="quantity">
                <button class="qty-btn">-</button>
                <input type="number" value="1" min="1">
                <button class="qty-btn">+</button>
            </div>
            <button class="buy-btn">Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="https://plantogallery.com/cdn/shop/products/urea.jpg?v=1623692992" alt="Urea Fertilizer">
                <span class="discount">5% OFF</span>
            </div>
            <h4>Urea Fertilizer</h4>
            <div class="rating">★★★★☆ (85 reviews)</div>
            <p class="description">High nitrogen content for crop growth.</p>
            <div class="price-container">
                <span class="original-price">₹700/bag</span>
                <span class="current-price">₹665/bag</span>
            </div>
            <div class="quantity">
                <button class="qty-btn">-</button>
                <input type="number" value="1" min="1">
                <button class="qty-btn">+</button>
            </div>
            <button class="buy-btn">Add to Cart</button>
        </div>

        <!-- Farming Tools -->
        <div class="product-card">
            <div class="product-image">
                <img src="https://utkarshagro.com/cdn/shop/files/1_89c5c0e3-4d5c-4ec9-a3a8-8aa5d209bfce.png?v=1730103398&width=1946" alt="Hand Hoe">
                <span class="discount">8% OFF</span>
            </div>
            <h4>Hand Hoe</h4>
            <div class="rating">★★★★☆ (45 reviews)</div>
            <p class="description">Durable steel blade for soil preparation.</p>
            <div class="price-container">
                <span class="original-price">₹800</span>
                <span class="current-price">₹736</span>
            </div>
            <div class="quantity">
                <button class="qty-btn">-</button>
                <input type="number" value="1" min="1">
                <button class="qty-btn">+</button>
            </div>
            <button class="buy-btn">Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="https://m.media-amazon.com/images/I/71UDOJL+JCL._AC_UF1000,1000_QL80_.jpg" alt="Agricultural Sprayer">
                <span class="discount">10% OFF</span>
            </div>
            <h4>Agricultural Sprayer</h4>
            <div class="rating">★★★★☆ (120 reviews)</div>
            <p class="description">Battery-powered sprayer for pesticides.</p>
            <div class="price-container">
                <span class="original-price">₹3,500</span>
                <span class="current-price">₹3,150</span>
            </div>
            <div class="quantity">
                <button class="qty-btn">-</button>
                <input type="number" value="1" min="1">
                <button class="qty-btn">+</button>
            </div>
            <button class="buy-btn">Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="https://agribegri.com/productthumbimage/thumb222255_4da61c2e1472ec1dc080060b91f050dc-04-26-22-23-03-42.webp" alt="Irrigation Pipe">
                <span class="discount">12% OFF</span>
            </div>
            <h4>Irrigation Pipe</h4>
            <div class="rating">★★★★★ (200 reviews)</div>
            <p class="description">Heavy-duty pipe for drip irrigation.</p>
            <div class="price-container">
                <span class="original-price">₹1,20000</span>
                <span class="current-price">₹1,00056</span>
            </div>
            <div class="quantity">
                <button class="qty-btn">-</button>
                <input type="number" value="1" min="1">
                <button class="qty-btn">+</button>
            </div>
            <button class="buy-btn">Add to Cart</button>
        </div>
    </div>
</section>
    <!-- Footer -->
     <!-- Add this cart HTML just before the footer -->
<div class="cart-overlay"></div>
<div class="cart">
    <div class="cart-header">
        <i class="fa-solid fa-cart-shopping"></i>
        <h3>Your Cart (<span id="cart-count">0</span>)</h3>
        <button class="close-cart">&times;</button>
    </div>
    <div class="cart-items"></div>
    <div class="cart-total">
        <h4>Total: ₹<span id="cart-total">0</span></h4>
        <button class="checkout-btn">Proceed to Checkout</button>
    </div>
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
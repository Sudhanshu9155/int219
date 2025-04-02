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
            margin: 20px 0;
            margin-left: 510px;
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



    <!-- Featured Products -->
    <!-- In the products section -->
    <section class="products" id="products">
        <h3 class="productH">Mini Tractors</h3>
        <div class="product-grid">
            <!-- Product Cards -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://assets.tractorjunction.com/tractor-junction/assets/images/upload/farmtrac-atom-26-1690535758.webp"
                        alt="Mini Tractor">
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
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>
            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://assets.tractorjunction.com/tractor-junction/assets/images/upload/3036e-1632220005.webp"
                        alt="John Deere Mini">
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
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://tractor.cmv360.com/_next/image?url=https%3A%2F%2Fd1odgbsvvxl2qd.cloudfront.net%2Fsmall_Target_630_429afda627.jpg&w=1080&q=75"
                        alt="Swaraj Mini">
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
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://5.imimg.com/data5/SELLER/Default/2020/10/HT/IL/IH/83761988/new-product-500x500.jpeg"
                        alt="Eicher Mini">
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
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.ytimg.com/vi/U6i1w9IiBS0/maxresdefault.jpg"
                        alt="Farmtrac Atom 26">
                    <span class="discount">10% OFF</span>
                </div>
                <h4>Farmtrac Atom 26</h4>
                <div class="rating">★★★★☆ (24 reviews)</div>
                <p class="description">26HP, Diesel Engine</p>
                <div class="price-container">
                    <span class="original-price">₹360,000</span>
                    <span class="current-price">₹324,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://vvcjohndeere.com/img/sliders/new-John-Deere-3036EN-Tractor1.png"
                        alt="John Deere 3028 EN">
                    <span class="discount">5% OFF</span>
                </div>
                <h4>John Deere 3028 EN</h4>
                <div class="rating">★★★★★ (32 reviews)</div>
                <p class="description">28HP, Powerful Diesel Engine</p>
                <div class="price-container">
                    <span class="original-price">₹400,000</span>
                    <span class="current-price">₹380,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.ytimg.com/vi/uFRbWdZny48/sddefault.jpg"
                        alt="Mahindra Jivo 245 DI">
                    <span class="discount">8% OFF</span>
                </div>
                <h4>Mahindra Jivo 245 DI</h4>
                <div class="rating">★★★★☆ (28 reviews)</div>
                <p class="description">24HP, 2WD, Compact Tractor</p>
                <div class="price-container">
                    <span class="original-price">₹350,000</span>
                    <span class="current-price">₹322,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://ik.imagekit.io/tractorkarvan/tr:w-548,f-webp,di-placeholder.png/images/Top-100-tractor-models/Red-bg/SWARAJ-724-XM-ORCHARD-r.jpg"
                        alt="Swaraj 724 XM Orchid">
                    <span class="discount">12% OFF</span>
                </div>
                <h4>Swaraj 724 XM Orchid</h4>
                <div class="rating">★★★★★ (45 reviews)</div>
                <p class="description">24HP, 4WD, Advanced Model</p>
                <div class="price-container">
                    <span class="original-price">₹420,000</span>
                    <span class="current-price">₹369,600</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://tractorbird.com/assets/posts/01a52933bf6465e9d5658af94e854e23.jpg"
                        alt="Massey Ferguson 1030 DI">
                    <span class="discount">7% OFF</span>
                </div>
                <h4>Massey Ferguson 1030 DI</h4>
                <div class="rating">★★★★☆ (36 reviews)</div>
                <p class="description">30HP, 2WD, Durable Design</p>
                <div class="price-container">
                    <span class="original-price">₹450,000</span>
                    <span class="current-price">₹418,500</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://ik.imagekit.io/tractorkarvan/tr:w-548,f-webp,di-placeholder.png/images/Farmtrac/Farmtrac-45-Powermaxx-01.jpg"
                        alt="Escort Farmtrac 25 XT">
                    <span class="discount">15% OFF</span>
                </div>
                <h4>Escort Farmtrac 25 XT</h4>
                <div class="rating">★★★★☆ (22 reviews)</div>
                <p class="description">25HP, 4WD, Heavy Duty</p>
                <div class="price-container">
                    <span class="original-price">₹380,000</span>
                    <span class="current-price">₹323,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 7 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://cnhi-p-001-delivery.sitecorecontenthub.cloud/api/public/content/7274fb2f4a2c4f798d38f7b48db7e72f?v=91166a6c"
                        alt="New Holland 3032 SX">
                    <span class="discount">5% OFF</span>
                </div>
                <h4>New Holland 3032 SX</h4>
                <div class="rating">★★★★★ (40 reviews)</div>
                <p class="description">32HP, 4WD, Premium Model</p>
                <div class="price-container">
                    <span class="original-price">₹520,000</span>
                    <span class="current-price">₹494,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 8 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://www.ggmgroup.com/wp-content/uploads/2023/10/20230724_092224_resized.jpg"
                        alt="Kubota Nexa E 261">
                    <span class="discount">10% OFF</span>
                </div>
                <h4>Kubota Nexa E 261</h4>
                <div class="rating">★★★★☆ (30 reviews)</div>
                <p class="description">26HP, 4WD, Compact Design</p>
                <div class="price-container">
                    <span class="original-price">₹480,000</span>
                    <span class="current-price">₹432,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 9 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.pinimg.com/736x/d8/36/41/d836412e82ee3572adabd179b5418ed6.jpg"
                        alt="TAFE 25 DI Orchid">
                    <span class="discount">8% OFF</span>
                </div>
                <h4>TAFE 25 DI Orchid</h4>
                <div class="rating">★★★★☆ (25 reviews)</div>
                <p class="description">25HP, 2WD, Efficient Model</p>
                <div class="price-container">
                    <span class="original-price">₹340,000</span>
                    <span class="current-price">₹312,800</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 10 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://farm-junction-assets.s3.ap-south-1.amazonaws.com/tractor-junction/assets/images/upload/2549-1631531259.webp"
                        alt="Preet 2049">
                    <span class="discount">12% OFF</span>
                </div>
                <h4>Preet 2049</h4>
                <div class="rating">★★★★☆ (20 reviews)</div>
                <p class="description">20HP, 2WD, Budget Friendly</p>
                <div class="price-container">
                    <span class="original-price">₹280,000</span>
                    <span class="current-price">₹246,400</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 11 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://5.imimg.com/data5/SELLER/Default/2022/7/KL/JT/VE/132569684/force-ox25-orchard-dlx-lt-tractor.jpg"
                        alt="Force Cruiser">
                    <span class="discount">15% OFF</span>
                </div>
                <h4>Force Cruiser</h4>
                <div class="rating">★★★☆☆ (18 reviews)</div>
                <p class="description">22HP, 4WD, Multi-Purpose</p>
                <div class="price-container">
                    <span class="original-price">₹320,000</span>
                    <span class="current-price">₹272,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 12 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.pinimg.com/736x/60/da/0a/60da0a4ed9ff86b0a90a95cb03edc582.jpg"
                        alt="ACE Crop Ace">
                    <span class="discount">5% OFF</span>
                </div>
                <h4>ACE Crop Ace</h4>
                <div class="rating">★★★★☆ (26 reviews)</div>
                <p class="description">18HP, 2WD, Compact Size</p>
                <div class="price-container">
                    <span class="original-price">₹250,000</span>
                    <span class="current-price">₹237,500</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 13 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://www.sonalika.com/media/product-banner/gt-20-english-1616394911-1-1711690465.jpg"
                        alt="Sonalika DI 20 SRX">
                    <span class="discount">10% OFF</span>
                </div>
                <h4>Sonalika DI 20 SRX</h4>
                <div class="rating">★★★★☆ (22 reviews)</div>
                <p class="description">20HP, 4WD, Powerful</p>
                <div class="price-container">
                    <span class="original-price">₹290,000</span>
                    <span class="current-price">₹261,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 14 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.ytimg.com/vi/wjLgNL3UAws/sddefault.jpg"
                        alt="Eicher 242">
                    <span class="discount">8% OFF</span>
                </div>
                <h4>Eicher 242</h4>
                <div class="rating">★★★★☆ (28 reviews)</div>
                <p class="description">24HP, 2WD, Reliable</p>
                <div class="price-container">
                    <span class="original-price">₹330,000</span>
                    <span class="current-price">₹303,600</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 15 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://farm-junction-assets.s3.ap-south-1.amazonaws.com/tractor-junction/assets/images/images/news/tractor-1737091717.webp"
                        alt="Powertrac Euro 25">
                    <span class="discount">12% OFF</span>
                </div>
                <h4>Powertrac Euro 25</h4>
                <div class="rating">★★★★☆ (24 reviews)</div>
                <p class="description">25HP, 4WD, European Design</p>
                <div class="price-container">
                    <span class="original-price">₹370,000</span>
                    <span class="current-price">₹325,600</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 16 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://5.imimg.com/data5/PB/MG/MJ/GLADMIN-6996/indo-farm-2042-di-45-hp-tractor-1400-kg-500x500.png"
                        alt="IndoFarm 2042">
                    <span class="discount">7% OFF</span>
                </div>
                <h4>IndoFarm 2042</h4>
                <div class="rating">★★★☆☆ (15 reviews)</div>
                <p class="description">20HP, 2WD, Basic Model</p>
                <div class="price-container">
                    <span class="original-price">₹260,000</span>
                    <span class="current-price">₹241,800</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 17 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.tractorgyan.com/uploads/3055/614ade37a93f9_HMT-2522-DX-tractorgyan.jpg"
                        alt="HMT ST 25">
                    <span class="discount">10% OFF</span>
                </div>
                <h4>HMT ST 25</h4>
                <div class="rating">★★★★☆ (20 reviews)</div>
                <p class="description">25HP, 2WD, Government Approved</p>
                <div class="price-container">
                    <span class="original-price">₹310,000</span>
                    <span class="current-price">₹279,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 18 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.ytimg.com/vi/mRpaRBGTOWE/maxresdefault.jpg"
                        alt="Valtra T25">
                    <span class="discount">5% OFF</span>
                </div>
                <h4>Valtra T25</h4>
                <div class="rating">★★★★★ (35 reviews)</div>
                <p class="description">25HP, 4WD, Premium Brand</p>
                <div class="price-container">
                    <span class="original-price">₹490,000</span>
                    <span class="current-price">₹465,500</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 19 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://img3.exportersindia.com/product_images/bc-full/2021/12/9692948/captain-250-di-25-hp-4wd-tractor-1640001210-6124232.jpeg"
                        alt="Captain 250">
                    <span class="discount">15% OFF</span>
                </div>
                <h4>Captain 250</h4>
                <div class="rating">★★★★☆ (19 reviews)</div>
                <p class="description">25HP, 2WD, Affordable</p>
                <div class="price-container">
                    <span class="original-price">₹270,000</span>
                    <span class="current-price">₹229,500</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>

            <!-- Tractor 20 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.ytimg.com/vi/gvED9VZ5scg/maxresdefault.jpg"
                        alt="LandForce 254">
                    <span class="discount">8% OFF</span>
                </div>
                <h4>LandForce 254</h4>
                <div class="rating">★★★★☆ (23 reviews)</div>
                <p class="description">25HP, 4WD, Rugged Design</p>
                <div class="price-container">
                    <span class="original-price">₹350,000</span>
                    <span class="current-price">₹322,000</span>
                </div>
                <div class="quantity">
                    <button class="qty-btn minus">-</button>
                    <input type="number" class="qty-input" value="1" min="1">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="buy-btn">Add to Cart</button>
            </div>
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
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="market.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<head>
</head>

<body>
    <!-- Navbar remains same -->
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
        <!-- <div class="signup-btn">Sign Up</div> -->
    </div>
    <div class="section-contact">
        <div class="container">
            <h2 class="section-common-heading " data-lang="contactHeading">🌱 Contact us</h2>
            <p class="section-common-subheading" data-lang="contactSubheading" >If you have any questions, feel free to reach out to us.</p>
        </div>
    </div>

    <div class="container grid-two--cols">
        <div class="contact-content">
            <form action="contact.php" method="post">
                <div class="grid grid-two--cols">
                    <div>
                        <label for="name" data-lang="fullName"><i class="fas fa-user" ></i> Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Full Name" autocomplete="off"
                            required />
                    </div>
                    <div>
                        <label for="email" data-lang="email"><i class="fas fa-envelope" ></i> Email Address</label>
                        <input type="email" id="email" name="email" placeholder="rajsudhanshu106@gmail.com"
                            autocomplete="off" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="subject" data-lang="subject"><i class="fas fa-tag" ></i> Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Enter message topic" />
                </div>
                <div class="mb-3">
                    <label for="message" data-lang="message"><i class="fas fa-comment" ></i> Message</label>
                    <textarea id="message" name="message" placeholder="Type your message here" cols="30"
                        rows="6"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-sumbit" data-lang="sendMessage">
                        <i class="fas fa-seedling"></i> Send Message
                    </button>
                </div>
            </form>
        </div>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6821.537659689631!2d75.69942934411215!3d31.254822197346293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f5e9c489cf3%3A0x4049a5409d53c300!2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1740152462191!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
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
     <div class="cart-icon">
        <i style="color: purple" class="fa-solid fa-cart-shopping"></i><span class="cart-counter">0</span>
    </div>
         <!--footer Start-->
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
    
    <!--end footer-->
    <script src="script.js"></script>
    <script src="market.js"></script>
</body>

</html>
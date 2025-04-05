<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        nav {
    display: flex;
    justify-content: center;
    background-color: #fff;
    padding: 20px;
}

.navbar {
    list-style: none;
    display: flex;
    gap: 30px;
    width: 100%;
    
}
/* .navbar{
    position: fixed;
    z-index: 10000;

} */

.navbar li {
    position: relative;
}

.navbar a {
    text-decoration: none;
    font-size: 18px;
    color: rgb(255, 255, 255);
    font-weight: bold;
    position: relative;
    padding-bottom: 5px;
}

.navbar a::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: rgb(255, 217, 0);
    left: 0;
    bottom: 0;
    transform: scaleX(0);
    transition: transform 0.3s ease-in-out;
}

.navbar a:hover::after,
.navbar .active::after {
    transform: scaleX(1);
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(135deg, #007f5f, #2a9d8f);
    padding: 15px 50px;
    color: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.navbar .logo {
    font-size: 1.8rem;
    font-weight: bold;
}

.navbar ul {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 0;
}


.language select {
    padding: 8px;
    border-radius: 5px;
    border: none;
    font-size: 1rem;
    background: #ffdd57;
    color: #222;
    font-weight: bold;
    cursor: pointer;
}

.nav-image {
    width: 100px;
    height: 50px;
    margin-right: 15px;
    color: white;
}




/* Header Styles */
.site-header {
  background-color: #ffffff;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  padding: 15px 0;
  position: sticky;
  top: 0;
  z-index: 100;
}

.header-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo img {
  height: 50px;
}

.main-nav ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.main-nav ul li {
  margin: 0 15px;
}

.main-nav ul li a {
  color: #3a5a40;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s;
}

.main-nav ul li a:hover {
  color: #588157;
}

.header-actions {
  display: flex;
  align-items: center;
}

.search-bar {
  display: flex;
  margin-right: 20px;
}

.search-bar input {
  padding: 8px 12px;
  border: 1px solid #dad7cd;
  border-radius: 4px 0 0 4px;
  outline: none;
  width: 180px;
}

.search-bar button {
  background-color: #588157;
  color: white;
  border: none;
  border-radius: 0 4px 4px 0;
  padding: 8px 12px;
  cursor: pointer;
}

.user-actions {
  display: flex;
  align-items: center;
}

.account-icon {
  color: #3a5a40;
  margin-right: 15px;
  font-size: 18px;
}

.cart-icon {
  position: relative;
  cursor: pointer;
  color: #3a5a40;
  font-size: 18px;
}

.cart-count {
  position: absolute;
  top: -8px;
  right: -8px;
  background-color: #e76f51;
  color: white;
  font-size: 10px;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
}

/* Cart Popup Styles */
.cart-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 998;
  display: none;
}

.cart-popup {
  position: fixed;
  top: 0;
  right: -400px;
  width: 380px;
  height: 100%;
  background-color: #ffffff;
  box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
  z-index: 999;
  transition: right 0.3s ease;
  display: flex;
  flex-direction: column;
}

.cart-popup.active {
  right: 0;
}

.cart-header {
  padding: 20px;
  border-bottom: 1px solid #dad7cd;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.cart-header h3 {
  margin: 0;
  color: #3a5a40;
  font-size: 18px;
}

.close-cart {
  background: none;
  border: none;
  color: #6c757d;
  font-size: 18px;
  cursor: pointer;
}

.cart-items {
  flex: 1;
  overflow-y: auto;
  padding: 20px;
}

.cart-item {
  display: flex;
  align-items: center;
  padding: 15px 0;
  border-bottom: 1px solid #f1f1f1;
  position: relative;
}

.cart-item-image {
  width: 70px;
  height: 70px;
  margin-right: 15px;
  border-radius: 4px;
  overflow: hidden;
}

.cart-item-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.cart-item-details {
  flex: 1;
}

.cart-item-details h4 {
  margin: 0 0 5px 0;
  font-size: 15px;
  color: #333;
}

.cart-item-price {
  color: #588157;
  font-weight: 600;
  margin-bottom: 8px;
}

.cart-item-quantity {
  display: flex;
  align-items: center;
}

.cart-item-quantity input {
  width: 40px;
  text-align: center;
  border: 1px solid #dad7cd;
  padding: 4px;
  margin: 0 5px;
}

.cart-qty-minus, .cart-qty-plus {
  width: 24px;
  height: 24px;
  border: 1px solid #dad7cd;
  background-color: #f8f9f3;
  border-radius: 4px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.remove-item {
  background: none;
  border: none;
  color: #dc3545;
  cursor: pointer;
  padding: 5px;
}

.cart-empty {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 50px 20px;
  text-align: center;
}

.empty-cart-icon {
  font-size: 60px;
  color: #dad7cd;
  margin-bottom: 20px;
}

.cart-empty p {
  color: #6c757d;
  margin-bottom: 20px;
}

.continue-shopping {
  color: #588157;
  text-decoration: none;
  font-weight: 600;
  padding: 8px 20px;
  border: 2px solid #588157;
  border-radius: 4px;
  transition: all 0.3s;
}

.continue-shopping:hover {
  background-color: #588157;
  color: #fff;
}

.cart-summary {
  background-color: #f8f9f3;
  padding: 20px;
}

.summary-row {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
  color: #6c757d;
}

.summary-row.total {
  font-weight: 700;
  color: #3a5a40;
  font-size: 18px;
  border-top: 1px solid #dad7cd;
  padding-top: 10px;
  margin-top: 10px;
}

.cart-actions {
  padding: 20px;
  display: flex;
  gap: 10px;
}

.view-cart-btn, .checkout-btn {
  flex: 1;
  padding: 12px;
  text-align: center;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s;
}

.view-cart-btn {
  background-color: #ffffff;
  color: #588157;
  border: 2px solid #588157;
}

.view-cart-btn:hover {
  background-color: #f8f9f3;
}

.checkout-btn {
  background-color: #588157;
  color: #ffffff;
  border: 2px solid #588157;
}

.checkout-btn:hover {
  background-color: #3a5a40;
}

/* Responsive Styles */
@media (max-width: 991px) {
  .search-bar {
    display: none;
  }
}

@media (max-width: 767px) {
  .main-nav {
    display: none;
  }
  
  .cart-popup {
    width: 100%;
    right: -100%;
  }
}
    </style>
</head>
<body>
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
        
    </nav>

    <div class="user-actions">
        <a href="account.php" class="account-icon"><i class="fas fa-user"></i></a>
        <div class="cart-icon" id="cart-icon">
          <i class="fas fa-shopping-cart"></i>
          <span class="cart-count">0</span>
        </div>
      </div>
</header>



<!-- Cart Popup -->
<div class="cart-popup" id="cart-popup">
  <div class="cart-header">
    <h3>Your Cart</h3>
    <button class="close-cart" id="close-cart"><i class="fas fa-times"></i></button>
  </div>
  
  <div class="cart-items" id="cart-items">
    <!-- Cart items will be dynamically added here -->
    <!-- Example item structure: -->
    <div class="cart-item">
      <div class="cart-item-image">
        <img src="images/products/tomatoes.jpg" alt="Organic Tomatoes">
      </div>
      <div class="cart-item-details">
        <h4>Organic Tomatoes</h4>
        <div class="cart-item-price">₹120.00</div>
        <div class="cart-item-quantity">
          <button class="qty-btn cart-qty-minus">-</button>
          <input type="number" value="2" min="1" readonly>
          <button class="qty-btn cart-qty-plus">+</button>
        </div>
      </div>
      <button class="remove-item"><i class="fas fa-trash-alt"></i></button>
    </div>
    
    <div class="cart-item">
      <div class="cart-item-image">
        <img src="images/products/carrots.jpg" alt="Fresh Carrots">
      </div>
      <div class="cart-item-details">
        <h4>Fresh Carrots</h4>
        <div class="cart-item-price">₹80.00</div>
        <div class="cart-item-quantity">
          <button class="qty-btn cart-qty-minus">-</button>
          <input type="number" value="1" min="1" readonly>
          <button class="qty-btn cart-qty-plus">+</button>
        </div>
      </div>
      <button class="remove-item"><i class="fas fa-trash-alt"></i></button>
    </div>
  </div>
  
  <div class="cart-empty" id="cart-empty" style="display: none;">
    <div class="empty-cart-icon">
      <i class="fas fa-shopping-basket"></i>
    </div>
    <p>Your cart is empty</p>
    <a href="shop.php" class="continue-shopping">Continue Shopping</a>
  </div>
  
  <div class="cart-summary">
    <div class="summary-row">
      <span>Subtotal:</span>
      <span class="subtotal">₹320.00</span>
    </div>
    <div class="summary-row">
      <span>Shipping:</span>
      <span class="shipping">₹50.00</span>
    </div>
    <div class="summary-row total">
      <span>Total:</span>
      <span class="total-amount">₹370.00</span>
    </div>
  </div>
  
  <div class="cart-actions">
    <a href="cart.php" class="view-cart-btn">View Cart</a>
    <a href="checkout.php" class="checkout-btn">Checkout</a>
  </div>
</div>

<!-- Cart Overlay -->
<div class="cart-overlay" id="cart-overlay"></div>

</body>
</html>

<script>
    // Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const cartIcon = document.getElementById('cart-icon');
    const cartPopup = document.getElementById('cart-popup');
    const closeCart = document.getElementById('close-cart');
    const cartOverlay = document.getElementById('cart-overlay');
    const cartItems = document.getElementById('cart-items');
    const cartEmpty = document.getElementById('cart-empty');
    const cartCount = document.querySelector('.cart-count');
    
    // Toggle cart popup
    cartIcon.addEventListener('click', function() {
        cartPopup.classList.add('active');
        cartOverlay.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Prevent scrolling when cart is open
    });
    
    // Close cart popup
    function closeCartPopup() {
        cartPopup.classList.remove('active');
        cartOverlay.style.display = 'none';
        document.body.style.overflow = ''; // Re-enable scrolling
    }
    
    closeCart.addEventListener('click', closeCartPopup);
    cartOverlay.addEventListener('click', closeCartPopup);
    
    // Initialize cart
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    updateCartDisplay();
    
    // Add to cart function
    window.addToCart = function(productId, productName, price, image, quantity = 1) {
        // Check if product is already in cart
        const existingItemIndex = cart.findIndex(item => item.id === productId);
        
        if (existingItemIndex > -1) {
            // Update quantity if product exists
            cart[existingItemIndex].quantity += quantity;
        } else {
            // Add new item to cart
            cart.push({
                id: productId,
                name: productName,
                price: price,
                image: image,
                quantity: quantity
            });
        }
        
        // Save cart to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));
        
        // Update cart display
        updateCartDisplay();
        
        // Show cart popup
        cartPopup.classList.add('active');
        cartOverlay.style.display = 'block';
        document.body.style.overflow = 'hidden';
    };
    
    // Update cart display
    function updateCartDisplay() {
        // Update cart count
        cartCount.textContent = cart.reduce((total, item) => total + item.quantity, 0);
        
        // Check if cart is empty
        if (cart.length === 0) {
            cartItems.style.display = 'none';
            cartEmpty.style.display = 'flex';
            document.querySelector('.cart-summary').style.display = 'none';
            return;
        }
        
        // Show cart items and summary
        cartItems.style.display = 'block';
        cartEmpty.style.display = 'none';
        document.querySelector('.cart-summary').style.display = 'block';
        
        // Clear current cart items
        cartItems.innerHTML = '';
        
        // Add each item to cart
        let subtotal = 0;
        
        cart.forEach((item, index) => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;
            
            const cartItemElement = document.createElement('div');
            cartItemElement.className = 'cart-item';
            cartItemElement.innerHTML = `
                <div class="cart-item-image">
                    <img src="${item.image}" alt="${item.name}">
                </div>
                <div class="cart-item-details">
                    <h4>${item.name}</h4>
                    <div class="cart-item-price">₹${item.price.toFixed(2)}</div>
                    <div class="cart-item-quantity">
                        <button class="qty-btn cart-qty-minus" data-index="${index}">-</button>
                        <input type="number" value="${item.quantity}" min="1" readonly>
                        <button class="qty-btn cart-qty-plus" data-index="${index}">+</button>
                    </div>
                </div>
                <button class="remove-item" data-index="${index}"><i class="fas fa-trash-alt"></i></button>
            `;
            
            cartItems.appendChild(cartItemElement);
        });
        
        // Update subtotal, shipping, and total
        const shipping = subtotal > 0 ? 50 : 0;
        const total = subtotal + shipping;
        
        document.querySelector('.subtotal').textContent = `₹${subtotal.toFixed(2)}`;
        document.querySelector('.shipping').textContent = `₹${shipping.toFixed(2)}`;
        document.querySelector('.total-amount').textContent = `₹${total.toFixed(2)}`;
        
        // Add event listeners for quantity buttons and remove buttons
        const minusButtons = document.querySelectorAll('.cart-qty-minus');
        const plusButtons = document.querySelectorAll('.cart-qty-plus');
        const removeButtons = document.querySelectorAll('.remove-item');
        
        minusButtons.forEach(button => {
            button.addEventListener('click', function() {
                const index = this.getAttribute('data-index');
                if (cart[index].quantity > 1) {
                    cart[index].quantity--;
                    localStorage.setItem('cart', JSON.stringify(cart));
                    updateCartDisplay();
                }
            });
        });
        
        plusButtons.forEach(button => {
            button.addEventListener('click', function() {
                const index = this.getAttribute('data-index');
                cart[index].quantity++;
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartDisplay();
            });
        });
        
        removeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const index = this.getAttribute('data-index');
                cart.splice(index, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartDisplay();
            });
        });
    }
    
});
</script>
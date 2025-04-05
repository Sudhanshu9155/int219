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
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
</header>
</body>
</html>
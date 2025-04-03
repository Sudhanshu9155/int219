<?php

$whitelist = array(
    '127.0.0.1',
    '::1',
    'localhost'
);

if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "int219";

// Create connection without specifying database
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === FALSE) {
    die("Error creating database: " . $conn->error);
}

$conn->select_db($dbname);

$sql = "INSERT IGNORE INTO product (name, image_url, category, `desc`, cost_price, selling_price) VALUES
('Mini Tractor', 'https://assets.tractorjunction.com/tractor-junction/assets/images/upload/farmtrac-atom-26-1690535758.webp', 'Tractor', '15HP Diesel Engine with 2 Years Warranty', 360000.00, 324000.00),
('John Deere Mini', 'https://assets.tractorjunction.com/tractor-junction/assets/images/upload/3036e-1632220005.webp', 'Tractor', '20HP Diesel Engine, High Performance', 400000.00, 380000.00),
('Swaraj Mini', 'https://tractor.cmv360.com/_next/image?url=https%3A%2F%2Fd1odgbsvvxl2qd.cloudfront.net%2Fsmall_Target_630_429afda627.jpg&w=1080&q=75', 'Tractor', '18HP, Diesel Engine, Low Maintenance', 350000.00, 322000.00),
('Eicher Mini', 'https://5.imimg.com/data5/SELLER/Default/2020/10/HT/IL/IH/83761988/new-product-500x500.jpeg', 'Tractor', '22HP, Fuel Efficient, Low Cost', 330000.00, 306000.00),
('Organic Wheat', 'https://m.media-amazon.com/images/I/61PK43QvaqL.jpg', 'Seeds', 'High-quality organic wheat', 200.00, 160.00),
('Hybrid Wheat Seeds', 'https://5.imimg.com/data5/SELLER/Default/2024/2/392815151/UX/YG/YV/86314498/7.jpg', 'Seeds', 'Disease-resistant and high-yield variety.', 250.00, 220.00),
('Organic Rice Seeds', 'https://organicindia.com/cdn/shop/files/organic-red-rice-in-india.jpg?v=1734506572', 'Seeds', 'Best for organic farming.', 220.00, 187.00),
('Organic Fertilizer', 'https://organicbazar.net/cdn/shop/products/vermicompost-10kg-compressed.jpg?v=1694168932', 'Fertilizers', '100% natural manure for healthy crops.', 500.00, 450.00),
('Urea Fertilizer', 'https://plantogallery.com/cdn/shop/products/urea.jpg?v=1623692992', 'Fertilizers', 'High nitrogen content for crop growth.', 700.00, 665.00),
('Hand Hoe', 'https://utkarshagro.com/cdn/shop/files/1_89c5c0e3-4d5c-4ec9-a3a8-8aa5d209bfce.png?v=1730103398&width=1946', 'Tools', 'Durable steel blade for soil preparation.', 800.00, 736.00),
('Agricultural Sprayer', 'https://m.media-amazon.com/images/I/71UDOJL+JCL._AC_UF1000,1000_QL80_.jpg', 'Tools', 'Battery-powered sprayer for pesticides.', 3500.00, 3150.00),
('Irrigation Pipe', 'https://agribegri.com/productthumbimage/thumb222255_4da61c2e1472ec1dc080060b91f050dc-04-26-22-23-03-42.webp', 'Tools', 'Heavy-duty pipe for drip irrigation.', 120000.00, 100056.00);
";

$conn->close();
}
?>
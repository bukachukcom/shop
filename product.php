<?php
require_once 'function/init.php';
require_once 'function/database.php';

/* @var $mysqli */
$categories = getCategories($mysqli);

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: /');
    exit();
}

// Читаем нужный товар по его ID
$result = $mysqli->query("SELECT * FROM product WHERE id = " . $id);
if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    header('Location: /');
    exit();
}
?>
<?php include_once 'templates/header.php'; ?>
<body>
<!-- Shell -->
<div class="shell">
    <!-- Header -->
    <div id="header">
        <h1 id="logo"><a href="/">shoparound</a></h1>
        <!-- Cart -->
        <div id="cart"> <a href="#" class="cart-link">Your Shopping Cart</a>
            <div class="cl">&nbsp;</div>
            <span>Articles: <strong>4</strong></span> &nbsp;&nbsp; <span>Cost: <strong>$250.99</strong></span> </div>
        <!-- End Cart -->
        <!-- Navigation -->
        <div id="navigation">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">The Store</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- End Navigation -->
    </div>
    <!-- End Header -->
    <!-- Main -->
    <div id="main">
        <div class="cl">&nbsp;</div>
        <!-- Content -->
        <div id="content">
            <!-- Content Slider -->
            <div id="slider" class="box">
                <div id="slider-holder">
                    <ul>
                        <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
                    </ul>
                </div>
                <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
            </div>
            <!-- End Content Slider -->
            <!-- Products -->
            <div class="products">
                <h3><?php echo $product['name']; ?></h3>
                <img src="/images/<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>"/>
                Описание: <?php echo $product['description']; ?>
                Цена: <?php echo $product['price']; ?>
                <div class="box search">
                    <h2>Заказать товар <span></span></h2>
                    <div class="box-content">
                        <form action="/order.php" method="post">
                            <input type="hidden" name="productId" value="<?=$product['id']?>"/>
                            <input type="hidden" name="price" value="<?=$product['price']?>"/>
                            <label>Домашний адрес</label>
                            <input type="text" class="field" name="address"/>
                            <label>ФИО</label>
                            <input type="text" class="field" name="username"/>
                            <label>Телефон</label>
                            <input type="text" class="field" name="phone"/>
                            <input type="submit" class="search-submit" value="Заказать" />
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Products -->
        </div>
        <!-- End Content -->
        <!-- Sidebar -->
        <div id="sidebar">
            <!-- Search -->
            <?php include_once 'templates/search.php'; ?>
            <!-- End Search -->
            <!-- Categories -->
            <?php include_once 'templates/categories.php'; ?>
            <!-- End Categories -->
        </div>
        <!-- End Sidebar -->
        <div class="cl">&nbsp;</div>
    </div>
    <!-- End Main -->
    <!-- Side Full -->
    <div class="side-full">
        <!-- More Products -->
        <div class="more-products">
            <div class="more-products-holder">
                <ul>
                    <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
                    <li class="last"><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
                </ul>
            </div>
            <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
        </div>
        <!-- End More Products -->
        <!-- Text Cols -->
        <div class="cols">
            <div class="cl">&nbsp;</div>
            <div class="col">
                <h3 class="ico ico1">Donec imperdiet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
                <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
            </div>
            <div class="col">
                <h3 class="ico ico2">Donec imperdiet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
                <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
            </div>
            <div class="col">
                <h3 class="ico ico3">Donec imperdiet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
                <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
            </div>
            <div class="col col-last">
                <h3 class="ico ico4">Donec imperdiet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
                <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
            </div>
            <div class="cl">&nbsp;</div>
        </div>
        <!-- End Text Cols -->
    </div>
    <!-- End Side Full -->
    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <!-- End Footer -->
</div>
<!-- End Shell -->
</body>
</html>



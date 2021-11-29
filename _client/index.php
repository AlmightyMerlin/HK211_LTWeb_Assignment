<?php
require_once 'php/init.php';

if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = '₫') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}

$listBrands = getBrands();
$listProducts = getProducts();

$brandId = 1;

if (isset($_POST['brandId'])) {
    $brandId = $_POST['brandId'];
    $listProductsFiltered = findProductByBrand($brandId);
} else {
    $listProductsFiltered = findProductByBrand($brandId);
}

?>


<div class="grid-container">

    <?php include 'php/header.php'; ?>
    <main>
        <div class="row left">
            <h1 class="normal">Giảm giá sốc</h1>
        </div>
        <div class="row left">
            <?php foreach ($listProducts as $product) : ?>
                <div class="card">
                    <form action="product01.php" method="POST">
                        <input type="text" value="<?php echo $product['pro_id']; ?>" name="proId" hidden>
                        <!-- <a href="product01.php"> -->
                        <!-- <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" /> -->
                        <!-- <input type="image" name="btnEdit" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png"> -->
                        <!-- <button name="btnEdit" type="submit">
                            <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                        </button> -->

                        <a href="product01.php">
                            <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                        </a>
                    </form>
                    <!-- </a> -->
                    <div class="card-body">
                        <a href="product01.php">
                            <h2><b>
                                    <?php echo $product['pro_name']; ?>
                                </b></h2>
                        </a>
                        <div class="price">
                            <?php echo currency_format($product['price']); ?>
                        </div>
                        <div class="detail-content">
                            <div>lorem ipppsum jjhds cfhbd djsnnjk cdjsnck</div>
                            <br>
                            <div class="add_to_cart">
                                <a style="color: #ffffff;" href="#">Thêm vào giỏ hàng</a>
                            </div>
                            <br>
                            <form action="product.php" method="POST">
                                <input type="text" value="<?php echo $product['pro_id']; ?>" name="proId" hidden>
                                <button name="btnEdit" type="submit" class="btn btn-primary btn-sm mr-2 detail">Chi tiết</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <br><br>
        <div class="row left">
            <h1 class="normal">Máy tính xách tay</h1>
        </div>
        <div class="row left">
            <div class="brand">Thương hiệu</div>
            <?php foreach ($listBrands as $brand) : ?>
                <!-- <a class="card brand" href="#">
                        <img style="width: 40%;" class="blogo" src=<?php echo $brand['url']; ?> alt=<?php echo $brand['name']; ?> />
                    </a> -->
                <form action="" method="POST">
                    <input type="text" value="<?php echo $brand['brand_id']; ?>" name="brandId" hidden>
                    <!-- <button name="btnFilter" type="submit"> -->
                    <input class="card brand blogo <?php echo ($brand['brand_id'] == $brandId) ? "card-selected" : "" ?>" name="btnFilter" type="image" src="<?php echo $brand['url']; ?>">
                    <!-- </button> -->
                </form>
            <?php endforeach; ?>
            <!-- <a class="card brand" href="#">
                    <img style="width: 40%" class="blogo" src="images/Dell.png" alt="Dell" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 80%" class="blogo" src="images/Lenovo.jpg" alt="Lenovo" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 30%" class="blogo" src="images/Apple.png" alt="Apple" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 45%" class="blogo" src="images/Razer.png" alt="Razer" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 60%" class="blogo" src="images/Asus.jpg" alt="Asus" />
                </a>
                <a class="card brand" href="#">
                    <img style="width: 80%" class="blogo" src="images/Acer.png" alt="Acer" />
                </a> -->
        </div>

        <br>
        <div class="row left">
            <div class="million">Khoảng giá</div>
            <a class="card price" href="#">Trên 50 triệu</a>
            <a class="card price" href="#">40 - 50 triệu</a>
            <a class="card price" href="#">30 - 40 triệu</a>
            <a class="card price" href="#">20 - 30 triệu</a>
            <a class="card price" href="#">15 - 20 triệu</a>
            <a class="card price" href="#">10 - 15 triệu</a>
            <a class="card price" href="#">Duới 10 triệu</a>
        </div>

        <br>
        <div class="row left">
            <?php foreach ($listProductsFiltered as $product) : ?>
                <div class="card">
                    <a href="product01.php">
                        <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product01.php">
                            <h2><b>
                                    <?php echo $product['pro_name']; ?>
                                </b></h2>
                        </a>
                        <div class="price">
                            <?php echo currency_format($product['price']); ?>
                        </div>
                    </div>
                    <div class="detail-content">
                        <div><?php echo $product['desc']; ?></div>
                        <br>
                        <div class="add_to_cart">
                            <a style="color: #ffffff;" href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <br>
        <div class="row left">
            <h1 class="normal">Máy tính - PC</h1>
        </div>
        <div class="row left">
            <div class="brand">Thương hiệu</div>
            <a class="card brand" href="#">
                <img style="width: 40%" class="blogo" src="images/Dell.png" alt="Dell" />
            </a>
            <a class="card brand" href="#">
                <img style="width: 80%" class="blogo" src="images/Lenovo.jpg" alt="Lenovo" />
            </a>
            <a class="card brand" href="#">
                <img style="width: 30%" class="blogo" src="images/Apple.png" alt="Apple" />
            </a>
            <a class="card brand" href="#">
                <img style="width: 45%" class="blogo" src="images/Razer.png" alt="Razer" />
            </a>
            <a class="card brand" href="#">
                <img style="width: 60%" class="blogo" src="images/Asus.jpg" alt="Asus" />
            </a>
            <a class="card brand" href="#">
                <img style="width: 80%" class="blogo" src="images/Acer.png" alt="Acer" />
            </a>
        </div>

        <br>
        <div class="row left">
            <div class="million">Khoảng giá</div>
            <a class="card price" href="#">Trên 50 triệu</a>
            <a class="card price" href="#">40 - 50 triệu</a>
            <a class="card price" href="#">30 - 40 triệu</a>
            <a class="card price" href="#">20 - 30 triệu</a>
            <a class="card price" href="#">15 - 20 triệu</a>
            <a class="card price" href="#">10 - 15 triệu</a>
            <a class="card price" href="#">Duới 10 triệu</a>
        </div>

        <br><br>
        <div class="row left">
            <div class="card">
                <a href="product.html">
                    <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                </a>
                <div class="card-body">
                    <a href="product.html">
                        <h2><b>Dell Inspiron 3505</b></h2>
                    </a>
                    <div class="price">201</div>
                </div>
            </div>
            <div class="card">
                <a href="product.html">
                    <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                </a>
                <div class="card-body">
                    <a href="product.html">
                        <h2><b>Dell Inspiron 3505</b></h2>
                    </a>
                    <div class="price">201</div>
                </div>
            </div>
            <div class="card">
                <a href="product.html">
                    <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                </a>
                <div class="card-body">
                    <a href="product.html">
                        <h2><b>Dell Inspiron 3505</b></h2>
                    </a>
                    <div class="price">201</div>
                </div>
            </div>
            <div class="card">
                <a href="product.html">
                    <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                </a>
                <div class="card-body">
                    <a href="product.html">
                        <h2><b>Dell Inspiron 3505</b></h2>
                    </a>
                    <div class="price">201</div>
                </div>
            </div>
            <div class="card">
                <a href="product.html">
                    <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                </a>
                <div class="card-body">
                    <a href="product.html">
                        <h2><b>Dell Inspiron 3505</b></h2>
                    </a>
                    <div class="price">201</div>
                </div>
            </div>
            <div class="card">
                <a href="product.html">
                    <img class="medium" src="images/dell-inspiron-3505-chinh-hang-y1n1t2-thinkprojpg.png" alt="Dell Inspiron" />
                </a>
                <div class="card-body">
                    <a href="product.html">
                        <h2><b>Dell Inspiron 3505</b></h2>
                    </a>
                    <div class="price">201</div>
                </div>
            </div>
        </div>
    </main>

    <!-- <footer class="row">
            <div>
                <a href="temp.html"><img class="logo" src="../Images/hcmut.png" alt="Logo" /></a>
            </div>
            <div>
                <ul>
                    <li>
                        <h2 class="normal">Chính sách</h2>
                    </li>
                    <li><a href="#">Bảo hành</a></li>
                    <li><a href="#">Vận chuyển</a></li>
                    <li><a href="#">Thanh toán</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <h2 class="normal">Hệ thống cửa hàng</h2>
                    </li>
                    <li>268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh</li>
                    <li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+B%C3%A1ch+khoa+-+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Qu%E1%BB%91c+gia+TP.HCM/@10.7733743,106.6606193,15z/data=!4m5!3m4!1s0x0:0xef77cd47a1cc691e!8m2!3d10.7733743!4d106.6606193">
                            Chỉ đường
                        </a></li>
                </ul>
            </div>
        </footer> -->

    <?php include 'php/footer.php'; ?>
</div>

<!-- </body> -->

<!-- </html> -->
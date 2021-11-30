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
            <h1 class="normal">Máy tính xách tay</h1>
        </div>
        <div class="row left">
            <div class="brand">Thương hiệu</div>
            <?php foreach ($listBrands as $brand) : ?>
                <form action="" method="POST">
                    <input type="text" value="<?php echo $brand['brand_id']; ?>" name="brandId" hidden>
                    <input class="card brand blogo <?php echo ($brand['brand_id'] == $brandId) ? "card-selected" : "" ?>" name="btnFilter" type="image" src="<?php echo $brand['url']; ?>">
                </form>
            <?php endforeach; ?>
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
                    <a href="product.php">
                        <img class="medium" src="images/<?php echo $product['pro_id']; ?>/item01.jpg" alt="Dell Inspiron" />
                    </a>
                    <div class="card-body">
                        <a href="product.php">
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

        <br><br>
        <div class="row left">
            <h1 class="normal">Tất cả sản phẩm</h1>
        </div>
        <div class="row left">
            <?php foreach ($listProducts as $product) : ?>
                <div class="card">
                    <form action="product.php" method="POST">
                        <input type="text" value="<?php echo $product['pro_id']; ?>" name="proId" hidden>
                        <input type="image" src="images/<?php echo $product['pro_id']; ?>/item01.jpg">
                    </form>

                    <div class="card-body">
                            <h2><b>
                                <?php echo $product['pro_name']; ?>
                            </b></h2>
                        <div class="price">
                            <?php echo currency_format($product['price']); ?>
                        </div>
                        <div class="detail-content">
                            <div><?php echo $product['desc']; ?></div>
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
    </main>

    <?php include 'php/footer.php'; ?>
</div>
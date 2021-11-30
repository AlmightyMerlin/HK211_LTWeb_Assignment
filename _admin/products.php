<?php
require_once 'php/init.php';

global $currentUser;

if ($currentUser == null) {
    header('Location: login.php');
    exit();
} elseif ($currentUser['role'] == 0) {
    $listUsers = getUsers();
    $listProducts = getProducts();
}


if (isset($_POST['btnDel'])) {
    $id = $_POST['id'];
    deleteProduct($id);
    header("Refresh:0");
}
?>

<?php include 'php/header.php'; ?>

<body>
    <h1 class="text-center">List Products</h1>
    <div class="row justify-content-center">
        <?php foreach ($listProducts as $product) : ?>
            <div class="card" style="width: 18rem;">
                <!-- <img class="card-img-top" src="<?php echo $product['url']; ?>" alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['pro_name']; ?></h5>
                    <p class="card-text"><?php echo $product['desc']; ?></p>
                    <p class="card-text"><?php echo currency_format($product['price']); ?></p>
                    <div class="d-flex">
                        <form action="product_edit.php" method="POST">
                            <input type="text" value="<?php echo $product['pro_name']; ?>" name="name" hidden>
                            <input type="text" value="<?php echo $product['desc']; ?>" name="description" hidden>
                            <input type="text" value="<?php echo $product['price']; ?>" name="price" hidden>
                            <input type="text" value="<?php echo $product['pro_id']; ?>" name="proId" hidden>
                            <input type="text" value="<?php echo $product['brand_id']; ?>" name="brandId" hidden>
                            <button name="btnEdit" type="submit" class="btn btn-primary btn-sm mr-2">Edit</button>
                        </form>
                        <form action="" method="POST">
                            <input type="text" value="<?php echo $product['pro_id']; ?>" name="id" hidden>
                            <button name="btnDel" type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

<!-- <?php
foreach ($listProducts as $product) {
    foreach ($product as $key => $val) {
        echo "$key: $val";
        echo "<br>";
    }
} ?> -->


<script src="js/users.js"></script>
<?php include 'php/footer.php'; ?>
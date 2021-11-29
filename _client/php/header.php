<?php
require_once 'php/init.php';

$listBrands = getBrands();
$listProducts = getProducts();
global $currentUser;

$brandId = 1;

if (isset($_POST['brandId'])) {
	$brandId = $_POST['brandId'];
	$listProductsFiltered = findProductByBrand($brandId);
} else {
	$listProductsFiltered = findProductByBrand($brandId);
}

?>

<!doctype html>
<html lang="vi">

<head>
	<title>Hệ thống máy tính và phụ kiện</title>
	<style>
		<?php include 'style.css'; ?>
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div>
		<nav class="navbar navbar-expand-lg">
			<form action="/_client/index.php" class="form-inline navbar-brand">
				<input class="logo" type="image" src="images/hcmut.png" alt="Logo" width="40" height="40">
			</form>
			<!-- <div>
                <img class="logo" src="Images/hcmut.png" alt="Logo">
            </div> -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="navbar-nav">
					<div class="dropdown nav-item nav-link">
						<a id="blink1" class="Title" href="intro.html">Giới thiệu</a>
					</div>
					<div class="dropdown nav-item nav-link">
						<a id="blink2" class="Title" href="contact.html">Liên hệ</a>
					</div>
					<div class="dropdown nav-item nav-link">
						<a id="blink3" class="Title" href="news.php">Tin tức</a>
					</div>
					<div class="dropdown nav-item nav-link">

						<a id="blink4" class="Title" href="#">Laptop</a>
						<div class="dropdown-content">
							<?php foreach ($listBrands as $brand) : ?>
								<a href="#"><?php echo $brand['name']; ?></a>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="dropdown nav-item nav-link">
						<a id="blink5" class="Title" href="#">PC</a>
						<div class="dropdown-content">
							<?php foreach ($listBrands as $brand) : ?>
								<a href="#"><?php echo $brand['name']; ?></a>
							<?php endforeach; ?>
						</div>
					</div>
					<script type="text/javascript">
						var blink1 = document.getElementById('blink1');
						setInterval(function() {
							blink1.style.opacity = (blink1.style.opacity == 0 ? 1 : 0);
						}, 1000);
					</script>
					<script type="text/javascript">
						var blink2 = document.getElementById('blink2');
						setInterval(function() {
							blink2.style.opacity = (blink2.style.opacity == 0 ? 1 : 0);
						}, 1000);
					</script>
					<script type="text/javascript">
						var blink3 = document.getElementById('blink3');
						setInterval(function() {
							blink3.style.opacity = (blink3.style.opacity == 0 ? 1 : 0);
						}, 1000);
					</script>
					<script type="text/javascript">
						var blink4 = document.getElementById('blink4');
						setInterval(function() {
							blink4.style.opacity = (blink4.style.opacity == 0 ? 1 : 0);
						}, 1000);
					</script>
					<script type="text/javascript">
						var blink5 = document.getElementById('blink5');
						setInterval(function() {
							blink5.style.opacity = (blink5.style.opacity == 0 ? 1 : 0);
						}, 1000);
					</script>
				</div>

			</div>
			<?php if ($currentUser) : ?>

				<div class="dropdown show float-md-right">
					<a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle show nav-link" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
						<img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
						<strong><?php echo $currentUser['name'] ?></strong>
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="user_edit.php">Information</a>
						<a class="dropdown-item" href="cart.html">Cart</a>
						<a class="dropdown-item" href="/_admin/logout.php">Log out</a>
					</div>
				</div>
			<?php endif; ?>
			<!-- <div>
				<a href="cart.html"><i class="fa fa-shopping-cart" style="font-size:30px;"></i></a>
				<a href="signin.html"><i class="fa fa-user" style="font-size:30px;"></i></a>
			</div> -->
		</nav>
	</div>
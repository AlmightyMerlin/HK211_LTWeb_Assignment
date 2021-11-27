<?php
require_once 'php/init.php';
$currentPage = detectPage();
global $currentUser;

$title = 'Admin';
?>

<!doctype html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Managment System</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="navbar-nav">
					<?php if (!$currentUser) : ?>
						<a class="nav-item nav-link <?php if ($currentPage == 'login') echo 'active'; ?>" href="login.php">Login</a>
					<?php endif; ?>
					<a class="nav-item nav-link <?php if ($currentPage == 'users') echo 'active'; ?>"" href=" users.php">Users</a>
					<a class="nav-item nav-link <?php if ($currentPage == 'products') echo 'active'; ?>"" href=" products.php">Products</a>
				</div>
			</div>
			<?php if ($currentUser) : ?>
				<!-- <div class="dropdown float-right">
					<a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle show" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="true">
						<img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
						<strong><?php echo $currentUser['name'] ?></strong>
					</a>

					<ul class="dropdown-menu text-small shadow dropdown-menu-right" aria-labelledby="dropdownUser2" data-popper-placement="top-start" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(0px, -34px);">
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#logout.php">Sign out</a></li>
					</ul>
				</div> -->

				<div class="dropdown show float-md-right">
					<a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle show nav-link" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
						<img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
						<strong><?php echo $currentUser['name'] ?></strong>
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			<?php endif; ?>
		</nav>
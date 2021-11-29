<?php

function findUserByUsername($username)
{
	global $db;
	$stmt = $db->prepare("SELECT * FROM user WHERE mail = ?");
	$stmt->execute(array($username));
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = '₫') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
function editUser($id, $mail, $password, $name, $phone)
{
	global $db;
	$stmt = $db->prepare("UPDATE user SET name = ?, password = ?, mail = ?, phone = ? WHERE id = ? ");
	$stmt->execute(array($name, $password, $mail, $phone, $id));
	echo $name;
	return $stmt->fetch(PDO::FETCH_ASSOC);
}
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = '₫') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}


function getBrands()
{
	global $db;
	$stmt = $db->query("SELECT * FROM brand");
	if ($stmt == FALSE) return;
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function findProductByBrand($brandId)
{
	global $db;
	$stmt = $db->prepare("SELECT * FROM product WHERE brand_id = ?");
	$stmt->execute(array($brandId));
	if ($stmt == FALSE) return;
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function findProductById($id)
{
	global $db;
	$stmt = $db->prepare("SELECT * FROM brand, product, specs WHERE brand.brand_id = product.brand_id AND specs.pro_id = product.pro_id AND product.pro_id = ?");
	$stmt->execute(array($id));
	if ($stmt == FALSE) return;
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getProducts()
{
	global $db;
	$stmt = $db->query("SELECT * FROM product");
	if ($stmt == FALSE) return;
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// function addUser($id, $mail, $password, $name, $phone, $role)
// {
// 	global $db;
// 	$stmt = $db->prepare("INSERT INTO users (id, mail, password, name, phone, role) VALUES (?, ?, ?, ?, ?, ?, ?)");
// 	$stmt->execute(array($id, $mail, $password, $name, $phone, $role));
// 	return $db->lastInsertId();
// }

// function deleteUser($id)
// {
// 	global $db;
// 	$stmt = $db->prepare("DELETE FROM users WHERE id = ? ");
// 	$stmt->execute(array($id));
// 	return $stmt->fetch(PDO::FETCH_ASSOC);
// }

// function editUser($id, $mail, $password, $name, $phone)
// {
// 	global $db;
// 	$stmt = $db->prepare("UPDATE users SET name = ?, password = ?, mail = ?, phone = ? WHERE id = ? ");
// 	$stmt->execute(array($name, $password, $mail, $phone, $id));
// 	echo $name;
// 	return $stmt->fetch(PDO::FETCH_ASSOC);
// }

// /* Detect Page Current */
// function detectPage()
// {
// 	return basename($_SERVER['PHP_SELF'], '.php');
// }

// /* Tìm user bằng username */
// function findUserByUsername($username)
// {
// 	global $db;
// 	$stmt = $db->prepare("SELECT * FROM user WHERE mail = ?");
// 	$stmt->execute(array($username));
// 	return $stmt->fetch(PDO::FETCH_ASSOC);
// }

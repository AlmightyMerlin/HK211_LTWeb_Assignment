<?php

function getUsers()
{
	global $db;
	$stmt = $db->query("SELECT * FROM user");
	if ($stmt == FALSE) return;
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getBrands()
{
	global $db;
	$stmt = $db->query("SELECT * FROM BRAND");
	if ($stmt == FALSE) return;
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addUser($id, $mail, $password, $name, $phone, $role)
{
	global $db;
	$stmt = $db->prepare("INSERT INTO user (id, mail, password, name, phone, role) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$stmt->execute(array($id, $mail, $password, $name, $phone, $role));
	return $db->lastInsertId();
}

function deleteUser($id)
{
	global $db;
	$stmt = $db->prepare("DELETE FROM user WHERE id = ? ");
	$stmt->execute(array($id));
	return $stmt->fetch(PDO::FETCH_ASSOC);
}
function deleteProduct($id)
{
	global $db;
	$stmt = $db->prepare("DELETE FROM PRODUCT WHERE id = ? ");
	$stmt->execute(array($id));
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

function editUser($id, $mail, $password, $name, $phone)
{
	global $db;
	$stmt = $db->prepare("UPDATE user SET name = ?, password = ?, mail = ?, phone = ? WHERE id = ? ");
	$stmt->execute(array($name, $password, $mail, $phone, $id));
	echo $name;
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

// editProduct($id_new, $description_new, $name_new, $brandId_new, $proId_new);
function editProduct($description, $name, $brandId, $proId)
{
	global $db;
	$stmt = $db->prepare("UPDATE user SET description = ?, name = ?, BRAND_ID = ?, PRO_ID = ? WHERE id = ? ");
	$stmt->execute(array($description, $name, $brandId, $proId, $proId));
	echo $name;
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

/* Detect Page Current */
function detectPage()
{
	return basename($_SERVER['PHP_SELF'], '.php');
}

/* Tìm user bằng username */
function findUserByUsername($username)
{
	global $db;
	$stmt = $db->prepare("SELECT * FROM user WHERE mail = ?");
	$stmt->execute(array($username));
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

function findProductById($id)
{
	global $db;
	$stmt = $db->prepare("SELECT * FROM BRAND, PRODUCT, SPECS WHERE BRAND.BRAND_ID = PRODUCT.BRAND_ID AND SPECS.PRO_ID = PRODUCT.PRO_ID AND PRODUCT.PRO_ID = ?");
	$stmt->execute(array($id));
	if ($stmt == FALSE) return;
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getProducts()
{
	global $db;
	$stmt = $db->query("SELECT * FROM PRODUCT");
	if ($stmt == FALSE) return;
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
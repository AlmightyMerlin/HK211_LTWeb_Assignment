<?php

function getUsers()
{
	global $db;
	$stmt = $db->query("SELECT * FROM user");
	if ($stmt == FALSE) return;
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addUser($id, $mail, $password, $name, $phone, $role)
{
	global $db;
	$stmt = $db->prepare("INSERT INTO users (id, mail, password, name, phone, role) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$stmt->execute(array($id, $mail, $password, $name, $phone, $role));
	return $db->lastInsertId();
}

function deleteUser($id)
{
	global $db;
	$stmt = $db->prepare("DELETE FROM users WHERE id = ? ");
	$stmt->execute(array($id));
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

function editUser($id, $mail, $password, $name, $phone)
{
	global $db;
	$stmt = $db->prepare("UPDATE users SET name = ?, password = ?, mail = ?, phone = ? WHERE id = ? ");
	$stmt->execute(array($name, $password, $mail, $phone, $id));
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

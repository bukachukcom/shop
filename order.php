<?php
require_once 'function/init.php';
require_once 'function/database.php';

/* @var $mysqli */

if (count($_POST)) {
    $address = strip_tags($_POST['address']);
    $username = strip_tags($_POST['username']);
    $phone = strip_tags($_POST['phone']);
    $price = (float)$_POST['price'];
    $productId = intval($_POST['productId']);

    $address = $mysqli->real_escape_string($address);
    $username = $mysqli->real_escape_string($username);
    $phone = $mysqli->real_escape_string($phone);

    $mysqli->query("INSERT INTO orders SET address = '$address', username = '$username', phone = '$phone', price = $price, productId = $productId, createdAt = '". date('Y-m-d H:i:s') ."'");
    header('Location: /success.php');
    exit();
}

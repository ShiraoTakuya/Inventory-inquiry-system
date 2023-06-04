<?php
$set = json_decode(file_get_contents("SET.INI"));
header('Content-Type: application/json');
$db = new PDO("mysql:host={$set->servername};port={$set->port};dbname={$set->dbname};charset=utf8", $set->username, $set->password);

$result = $db->query("SELECT id, name, price, stock FROM products");

$products = $result->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(
$products, JSON_UNESCAPED_UNICODE);
?>
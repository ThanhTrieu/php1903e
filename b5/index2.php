<?php
// nhan du lieu tu index.php truyen sang
// php cung cap 1 bien toan cuc kieu mang $_GET
$name = $_GET['name'] ?? '';
// $name = isset($_GET['name']) ? $_GET['name'] : '';
$age = $_GET['age'] ?? 0;
$address = $_GET['add'] ?? '';

echo "my name: {$name} - my age : {$age} - my address : {$address}";
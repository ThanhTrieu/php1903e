<?php
session_start();

$cart = $_SESSION['cart'] ?? [];

require '../view/showcart_view.php';
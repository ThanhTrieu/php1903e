<?php
// nhung model database
require 'model/cart_model.php';

$products = getAllDataProduct();

// nhung view - hien thi du lieu

require 'view/cart_view.php';
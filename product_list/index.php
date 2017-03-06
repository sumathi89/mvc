<?php
echo '<h1>Product list </h1>';
require('../model/database_connect.php');
require('../model/product_db.php');
$products=get_products();
include('product_list.php');
?>

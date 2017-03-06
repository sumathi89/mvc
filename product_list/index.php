<?php
echo '<h1>Product list </h1>';
require('../model/database_connect.php');
require('../model/product_db.php');
$action=filter_input(INPUT_POST,'action');
if($action==NULL)
{
	$action='list_products';
}
if($action=='list_products')
{
	$products=get_products();
	include('product_list.php');
}
else if($action=='delete_product')
{
	$product_id=filter_input(INPUT_POST,'product_id',FILTER_VALIDATE_INT);
	delete_product($product_id);
	header('Location: .');
}
?>

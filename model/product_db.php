<?php
function get_products()
{
global $db;
$query='select * from products_guitar1;';
$statement=$db->prepare($query);
$statement->execute();
$products=$statement->fetchAll();
return $products;
}
?>

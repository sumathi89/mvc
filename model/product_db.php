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

function delete_product($product_id)
{
global $db;
$query='delete from products_guitar1 where productID=:product_id;';
$statement=$db->prepare($query);
$statement->bindValue(':product_id',$product_id);
$statement->execute();
$statement->closeCursor();
}

?>

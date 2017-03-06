<h1>Display the product list </h1>
<table id='display'>
<tr>
<th>Code</th>
<th>Name</th>
<th>Price</th>
</tr>
<?php
	foreach($products as $product)
	{
	?>
	<tr>
		<td><?php echo $product['productCode'];?></td>
		<td><?php echo $product['productName']; ?></td>
		<td><?php echo $product['listPrice'];?></td>
		<td>
		<form action='.' method='post'>
		<input type='hidden' name='action' value='delete_product'>
		<input type='hidden' name='product_id' value="<?php echo
		$product['productID']; ?>">
		<input type ='submit' value ='Delete'>
		</td>
	
	</tr>
	<?php
	}
?>
</table>

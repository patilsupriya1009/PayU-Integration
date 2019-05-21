<?php
include 'connection.php';
?>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PayU Integration</title>
</head>
<body>
	
	<?php
		//fetch products from the database
		$results = $db->query("SELECT * FROM products");
		while($row = $results->fetch_assoc())
		{
	?>
    <form action="billing_info.php" method="post">
		
		<input type="hidden" name="product_name" value="<?php echo $row['name']; ?>"/>
		<input type="hidden" name="price" value="<?php echo $row['price']; ?>"/>
		<img src="images/<?php echo $row['image']; ?>"/>
		<br/>Prodcut Name: <?php echo $row['name']; ?>
		<br/>Product Price: <?php echo $row['price']; ?>
        <br/><input type="submit" value="Buy Now" />
    </form>
    <?php } ?>
</body>
</html>

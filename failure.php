<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="";

	echo "<h3>Sorry. Your order status is ". $status .".</h3>";
    echo "<h3>Invalid transcation. Please try again</h3>";
?>	

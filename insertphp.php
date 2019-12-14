<?php 

$user='root';
$con= mysqli_connect('localhost', $user); 
mysqli_select_db($con, 'priya');

extract($_POST);

if(isset($_POST['submit'])){

	$q ="insert into priyainsert (username, password,address) values ('$username', '$password', '$address')" ;

	$query = mysqli_query($con, $q);
	header('location: insert.php');

}

 ?>

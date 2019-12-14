<?php

$user='root';
$con= mysqli_connect('localhost', $user); 
mysqli_select_db($con, 'priya');


$q = "select * from priyainsert";

$query = mysqli_query($con, $q);

if(mysqli_num_rows($query) > 0){
while ($result = mysqli_fetch_array($query) ) {
	?>
	
	<tr>

		<td>  </td>
		<td> <?php echo $result['username'] ?> </td>
		<td> <?php echo $result['password'] ?> </td>
		<td> <?php echo $result['address'] ?> </td>>
	</tr>



<?php	
}

}
?>
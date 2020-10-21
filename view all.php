<?php
include_once'h1.php';
?>
<!DOCTYPE html>
<html>
<head><title></title>
<style type="text/css">
	body{
		background-color:lightgreen;
	 }
	header{
		float:right; 
	}
</style></head>
<body><header>
	 <form action="f0.php" method="POST"><h5> CLICK HERE TO VIEW HOME PAGE</h5><button type="submit"value="submit" >VIEW HOME PAGE </button></form>
	 <form action="f1.php" method="POST"><h5> CLICK HERE TO VIEW ONE SPECIFIC CUSTOMERS</h5><button type="submit"value="submit" >VIEW ONE PARTICULAR CUSTOMER</button></form>
	 <form action="f4.php" method="POST"><h5> CLICK HERE TO TRANSFER MONEY</h5><button type="submit"value="submit" > TRANSFER MONEY</button></form>
	</header>
	<?php
	$sql="SELECT*FROM customer_details";
	$result=mysqli_query($db_conn,$sql);
	$resultcheck=mysqli_num_rows($result);
	if($resultcheck>0)

	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo"Account number:{$row['account_number'] }<br>";
			echo"First name:{$row['first_name']} <br>";
			echo"Last name:{$row['last_name']} <br>";
			echo"Email: {$row['email_id']} <br>";
			echo"Mobile number: {$row['mobile_number']} <br>";
			echo"Location: {$row['location']} <br>";
			echo"Current_balance:{$row['current_balance']}<br>";
			echo" ---------------------------------------------------------------------------------------------------------<br>";
		}
	}
	
		?>
	</body></html>

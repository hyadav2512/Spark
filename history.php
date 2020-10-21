<?php
include_once'h1.php';
?>
<!DOCTYPE html>
<html>
<head><title></title>
<style type="text/css">
	body{
		background-color:white;
	 }
	header{
		float:right; 
	}
</style></head></head>
<body>
	<?php
	sql="SELECT*FROM transactions;";
	$result=mysqli_query($db_conn,$sql);
	$resultcheck=mysqli_num_rows($result);
	if($resultcheck>0)

	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo"Account number:{$row['account_number'] }<br>";
			echo"Amount credited:{$row['amount_credited']} <br>";
			echo"Amount debited:{$row['amount_debited']} <br>";
			echo"Date of transaction: {$row['date_of_transaction']} <br>";
			//echo"Time of transaction: {$row['time_of_transaction']} <br>";
			echo" ---------------------------------------------------------------------------------------------------------<br>";
		}
	}
	?>
	</body></html>

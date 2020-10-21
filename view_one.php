
<?php
include_once'h1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		background-color:lightgreen;
	 }
	header{
		float:right; 
	}
</style>
</head>
<body><header>
	<form action="f0.php" method="POST"><h5> CLICK HERE TO VIEW HOME PAGE</h5><button type="submit"value="submit" >VIEW HOME PAGE </button></form>
	 <form action="h2.php" method="POST"><h5> CLICK HERE TO VIEW ALL CUSTOMERS</h5><button type="submit"value="submit" >VIEW ALL CUSTOMERS</button></form>
	 <form action="f4.php" method="POST"><h5> CLICK HERE TO TRANSFER MONEY</h5><button type="submit"value="submit" >TRANSFER MONEY</button></form></header>
	<?php
	$acc_num=$_POST['acc_number'];
$sql="SELECT*FROM customer_details WHERE account_number=$acc_num;";
$result=mysqli_query($db_conn,$sql);
//$resultcheck=mysqli_num_rows($result);
if(!$result){
	echo" Error".mysqli_error($db_conn);
}
else if(mysqli_num_rows($result)==1)
        {

		   $row=mysqli_fetch_assoc($result);
            echo "Account number:{$row['account_number']}<br>";
			echo "First name:{$row['first_name']}<br>";
			echo "Last name:{$row['last_name']}<br>";
			echo "Email:{$row['email_id']}<br>";
			echo "Mobile number:{$row['mobile_number']}<br>";
			echo "Location:{$row['location']}<br>";
		}
		else
		{
			echo" Either invalid account number or you have not provided any account number!";
		}
		?>
		</body>
		</html>



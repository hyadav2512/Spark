<?php
include_once"h1.php"
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
	header{
		float:right;
	}
	body{
		background: lightgreen;
	}
</style>
</head>
<body>
	<header>
	 <form action="f0.php" method="POST"><h5> CLICK HERE TO VIEW HOME PAGE</h5><button type="submit"value="submit" >VIEW HOME PAGE </button></form>
	 <form action="h2.php" method="POST"><h5> CLICK HERE TO VIEW ALL CUSTOMERS</h5><button type="submit"value="submit" >VIEW ALL CUSTOMERS</button></form>
	 <form action="f1.php" method="POST"><h5> CLICK HERE TO VIEW ONE PARTIICULAR CUSTOMER</h5><button type="submit"value="submit" >VIEW ONE PARTICULAR COSTOMER</button></form>
	</header>
<?php

$aod=$_POST['acc_of_dep'];
$aor=$_POST['acc_of_rec'];
$a=$_POST['amount'];
$q="SELECT current_balance FROM customer_details WHERE account_number='$aod';";
$res=mysqli_query($db_conn,$q);
if(mysqli_num_rows($res)!=0){
$row=mysqli_fetch_array($res);
$var=$row['current_balance'];
if($var>$a)
{
$sqlu="UPDATE customer_details SET current_balance=current_balance-$a WHERE account_number='$aod';";
$result=mysqli_query($db_conn,$sqlu);
if(!$result)
{
echo"Error".mysqli_error($db_conn);
}
else {
# code..
$sqlu1="UPDATE customer_details SET current_balance=current_balance+$a WHERE account_number=$aor;";
$result1=mysqli_query($db_conn,$sqlu1);
if(!$result1)
echo"Error".mysqli_error($db_conn);
else
{
echo"Transaction is successful!!";
$sql="INSERT INTO transactions(account_number,amount_debited,amount_credited,date&time)VALUES(
$aod,$a,0,date())";
$sql1="INSERT INTO transactions(account_number,amount_debited,amount_credited,date&time)VALUES(
$aor,0,$a,date());";
}
}
}
else{
	echo"Insufficient balance";
}
}
else{
	echo"Check if you have provided all fields correctly!!";
}

?>
</body>
</html>
<a href="home.php"><p align="right">Home Page</p></a>
<center>
<form action="payment.php" method="post" enctype="multipart/form-data">
<table border=1>
<tr>
<th colspan=2>purchase</th>
</tr>
<tr>
<td>Full name:</td>
<td><input type="text" name="fname" /></td>
</tr>
<tr>
<td>email:</td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>City:</td>
<td><input type="text" name="city" /></td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text" name="address" /></td>
</tr>
<tr>
<td>Credit Card:</td>
<td><input type="text" name="credit" /></td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" name="submit" value="submit" /> </td>
</tr>
</table>
</form>
</center>

<?php
$db = mysqli_connect('localhost', 'root', '','payments');

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$credit=$_POST['credit'];

	$query="insert into payments (fname,email,address,city,credit) VALUES ('$fname','$email','$address','$city','$credit')";
	if(mysqli_query($db,$query))
	{
		echo "Payments Successfully";
	}
	else
	{
		echo "Payment Faild!";
	}
}
?>

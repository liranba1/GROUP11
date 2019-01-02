<?php session_start(); 
if(!isset($_SESSION['username']))
{
	header('location:home.php');
}
if(isset($_SESSION['rank']))
{
if ($_SESSION['rank']!=2) 
{
	header('location:home.php');
}}?>
<center>
<a href="home.php"><p align="right">Home Page</p></a>
<a href="payment_reports.php"><p align="right">Back to payments search</p></a>
</center>
<?php if (!isset($_POST['submit'])) {?>
	<br><br><br><br><br>
	<center>
	<form action="payment_reports.php" method="post">
	<table border=1>
	<tr>
	<th colspan=7>Payments</th>
	</tr>
	<tr>
	<td>Enter Year:</td>
	<td><input type="text" name="year" /></td>
	</tr>
	<td>Month:</td>
	<td><input type="text" name="month" /></td>
	<tr>
	<td>Enter Day:</td>
	<td><input type="text" name="day" /></td>
	</tr>
	<tr><td colspan=2 align="center"><input type="submit" name="submit" value="submit" /> </td></tr>
	</table>
	</form></br></br></br></br></br>
<?php } else {?>
<?php 
	$db = mysqli_connect('localhost', 'root', '','admin');
	$y=$_POST['year'];
	$m=$_POST['month'];
	$d=$_POST['day'];
	if(empty($y))
	{
		echo "<script type='text/javascript'>alert('You must Enter atleast year!');window.location.href='payment_report.php'</script>";
	}
	if(!empty($y) and !empty($m))
	{
		$query="SELECT * from payments WHERE year='$y' and month='$m'";
	}
	if(!empty($y) and !empty($m) and !empty($d))
	{
		$query="SELECT * from payments WHERE year='$y' and month='$m' and day='$d'";
	}
	if(empty($m) and empty($d))
	{
		$query="SELECT * from payments WHERE year='$y'";
	}
	if(!empty($y) and !empty($d) and empty($m))
	{
		echo "<script type='text/javascript'>alert('You can't combine between year and days without month!');window.location.href='order_reports.php'</script>";
	}
	
	if($query)
	{
		?>
		<center>
		<table border=1>
		<tr><th colspan=9>Selected Payments</th></tr>
		<tr>
		<td>Order ID</td><td>User</td><td>Date</td><td>Credit Card</td><td>CVV</td><td>Exp</td><th>Total Price</td>
		</tr>
<?php 
	$db = mysqli_connect('localhost', 'root', '','admin');
	if($query)
	{
		$total=0;
		$run=mysqli_query($db,$query);
		while($row=mysqli_fetch_array($run))
		{
			$id=$row['id'];
			$user=$row['username'];
			$card=$row['card'];
			$cvv=$row['cvv'];
			$exp=$row['exp'];
			$d=$row['day'];
			$m=$row['month'];
			$y=$row['year'];
			$tprice=$row['tprice'];
			$total+=$tprice;
	?>
	<?php $date=$d.'/'.$m.'/'.$y; ?>
	<tr>
	<td><?php echo '#';echo $id;?></td><td><?php echo $user;?></td><td><?php echo $date; ?></td><td><?php echo $card; ?></td>
	<td><?php echo $cvv; ?></td><td><?php echo $exp; ?></td><td><?php echo $tprice; echo '$';?></td>
	</tr>
	
<?php
		}?>
		</table>
		<center>
		<tr><h1>Total Balance: <?php echo $total; echo '$'; ?></h1></tr>
		</center>
	<?php }
}
	else 
	{
		echo "<script type='text/javascript'>alert('Your input is doesn't exists in the system!');window.location.href='order_reports.php'</script>";
	}
}?>
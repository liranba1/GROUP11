<?php include "table.css" ;?>
<?php session_start(); if(isset($_SESSION["username"])) { ?>
<a href="home.php"><p align="right">Home Page</p></a>
<center>
<table border=1>
<tr><th colspan=9>All My Orders</th></tr>
<tr>
<th>Order ID</th><th>fullname</th><th>year</th><th>month</th><th>day</th><th>city</th><th>state</th><th>address</th><th>zip</th>
</tr>
<?php
$username=$_SESSION["username"];
$db = mysqli_connect('localhost', 'root', '','admin');
$query="SELECT * from shippments WHERE username='$username'";
$total=0;
	if($query)
	{
		$run=mysqli_query($db,$query);
		while($row=mysqli_fetch_array($run))
		{
			$id=$row['id'];
			$barcode=$row['barcode'];
			$name=$row['name'];
			$image=$row['image'];
			$price=$row['price'];
			$quantity=$row['quantity'];
			$size=$row['size'];
			$t_p=$price*$quantity;
			$d=$row['day'];
			$m=$row['month'];
			$y=$row['year'];
			@$total+=$row['price']*$quantity;
	?>
	<?php $date=$d.'/'.$m.'/'.$y; ?>
	<td><?php echo '#';echo $id;?></td><td><?php echo $date;?></td><td><?php echo '#';echo $barcode; ?><td><?php echo $name; ?></td><td><img src="image/<?php echo $image ?>" width=50 height=50 /></td>
	<td><?php echo $size; ?></td><td><?php echo $quantity; ?></td><td><?php echo $t_p; echo '$'; ?></td>
	</tr>
<?php
		}
	}
}
?>
<?php {?>
<tr><th colspan=8><?php echo 'Total Paid:'; echo $total;echo '$';?></th></tr>
</table>
<?php }?>

<?php session_start(); if(isset($_SESSION["username"])){ ?>
	<?php include "table.css" ;?>
<a href="home.php"><p align="right">Home Page</p></a>
<center>
<?php echo @$_GET['mes']; ?>
<h1>Cart</h1>
<form action="cart.php" method="post" enctype="multipart/form.data">
<table border=1>
<tr><th colspan=7>Cart Details</th></tr>
<tr>
<th>Delete product</th><th>Name</th><th>Image</th><th>Price</th><th>Size</th><th>Quantity</th><th>Total</th>
</tr>
<?php
if(isset($_SESSION["username"]))
{
$username=$_SESSION["username"];
$db = mysqli_connect('localhost', 'root', '','cart');
$query="SELECT * from cart WHERE username='$username'";

	if($query)
	{
		$run=mysqli_query($db,$query);
		while($row=mysqli_fetch_array($run))
		{
			$id=$row['id'];
			$barcode=$row['barcode'];
			$name=$row['p_name'];
			$image=$row['p_image'];
			$price=$row['p_price'];
			$quantity=$row['p_quantity'];
			$size=$row['p_size'];
			$t_p=$row['p_price']*$quantity;
			@$total+=$row['p_price']*$quantity;
	?>
	<tr><td><input type="checkbox" name="check[]" value="<?php echo $id; ?>"multiple/></td>
	<td><?php echo $name; ?></td><td><img src="image/<?php echo $image ?>" width=50 height=50 /></td><td><?php echo $price; echo '$'; ?></td>
	<td><?php echo $size; ?></td>
	<td>
	<input type="hidden" name="id[]" value="<?php echo $id; ?>" />
	<input type="hidden" name="username" value="<?php echo $username; ?>" />
	<input type="hidden" name="barcode[]" value="<?php echo $barcode; ?>" />
	<input type="text" name="qty[]" value="<?php echo $quantity; ?>" size="5"/>
	<td><?php echo $t_p;echo '$'; ?></td></tr>
<?php
		}
	}
}
?>
<tr><th colspan=8><input type="submit" name="submit" value="Update Cart" /></th></tr>
</table>
</form>
</center>
<?php
$db = mysqli_connect('localhost', 'root', '','cart');

if (isset($_POST['submit']))
{
	if (isset($_POST['qty'])) {

		$quaty=$_POST['qty'];
		$ids=$_POST['id'];
		$user=$_POST['username'];

		foreach($quaty as $q)
		{
			if($q>50 or $q<1)
			{
				$_SESSION['error']=1;
			}
		}
		if(!isset($_SESSION['error']))
	{
		$array=array_combine($quaty,$ids);
		foreach($array as $q =>$i)
		{
			$res=mysqli_query($db,"SELECT * from cart WHERE id='$i'");
			$row=mysqli_fetch_assoc($res);

			$bar=$row['barcode'];
			$name=$row['p_name'];
			$sz=$row['p_size'];

			$res=mysqli_query($db,"SELECT * from stock WHERE barcode='$bar' and size='$sz'");
			$row=mysqli_fetch_assoc($res);
			$pquant=$row['quantity'];

			if($q>$pquant)
			{
				$msg='Quantity choosen for: '.$name.' '.$sz.' is not Available!';
				echo '<script type="text/javascript">alert("'.$msg.'")</script>';
			}
			else
			{
			$query="UPDATE cart SET p_quantity='$q' where id='$i'";
			mysqli_query($db,$query);
			if(mysqli_query($db,$query))
				header("location:cart.php?mes=Update Quantity Successfully");
			else
				header("location:cart.php?mes=Update Cart Faild");
			}
		}
	}
		else
		{
			?>
			<script type='text/javascript'>alert('Quantity Must be between 1 to 50!');window.location.href='cart.php'</script>;
			<?php
			unset($_SESSION['error']);
		}
}
}
?>
<?php
	$db = mysqli_connect('localhost', 'root', '','cart');

	if(isset($_POST['submit']))
{
	if(isset($_POST['check']))
	{
		$delete=$_POST['check'];
		foreach($delete as $del)
		{
			$query="DELETE from cart WHERE id='$del'";
			mysqli_query($db,$query);
			if(mysqli_query($db,$query))
			{
				header("location:cart.php?mes=Deleted item");
			}
			else
			{
				header("location:cart.php?mes=Item delete faild");
			}

		}
	}

}
?>
<center>
<?php if (isset($total)){ ?>
<center>
<p>Total Price:<?php echo $total;echo '$'; ?></p>
<?php $_SESSION['ptotal']=$total; ?>
<form action="order.php" method="post">
<input type="submit" name="checkout" value="Check Out">
</form>
</center>
<center>
</center>
<?php }
else
echo "Cart is Empty";
?>
<?php }?>
<?php if (!isset($_SESSION["username"])) { ?>
<center>
<br></br>
<p>You must Log in before getting cart</p>
<a href="login.php">Login</a>
<p>Not a memeber yet? register!</p>
<a href="register.php">register</a>
<p></p>
<a href="home.php">Back to homepage</a>
</center>
<?php }?>

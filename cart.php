<a href="home.php"><p align="right">Home Page</p></a>
<center>
<?php echo @$_GET['mes']; ?>
<h1>Cart</h1>
<table border=1>
<tr><th colspan=8>Cart Details</th></tr>
<tr><th>Delete product</th><th>Name</th><th>Image</th><th>Price</th><th>Quantity</th><th>description</th>
</tr>

<?php

$db = mysqli_connect('localhost', 'root', '','cart');
$query="SELECT * from cart";
$run=mysqli_query($db,$query);
while($row=mysqli_fetch_array($run))
{
	$id=$row['id'];
	$name=$row['p_name'];
	$image=$row['p_image'];
	$price=$row['p_price'];
	$quantity=$row['p_quantity'];
	$size=$row['p_size'];
	$t_p=$row['p_price']*$quantity;
	@$total+=$row['p_price']*$quantity;
	?>
	<tr><td><input type="checkbox" name="check[]" value="<?php echo $id; ?>"multiple/></td>
	<td><?php echo $name; ?></td><td><img src="image/<?php echo $image ?>" width=50 height=50 /></td><td><?php echo $price; echo '$'; ?></td><td>
	<input type="hidden" name="id[]" value="<?php echo $id; ?>" />
	<input type="text" name="qty[]" value="<?php echo $quantity; ?>" size="5" /></td>
	<td><?php echo $t_p; ?></td></tr>
<?php
}
?>
</table>
</form>
</center>
<center>
<p>Total Price:<?php echo $total;echo '$'; ?></p>
<a href="payment.php"><button>Check Out</button></a>
<a href="home.php"><button>Continue purchase</button></a>
<tr><th colspan=8><input type="submit" name="submit" value="Update" /></th></tr>
</center>
<?php
$db = mysqli_connect('localhost', 'root', '','cart');
if(isset($_POST['submit']))
{
	if (isset($_POST['qty']))
	{
		$quanty=$_POST['qty'];
		$ids=$_POST['id'];

		$array=array_combine($quanty,$ids);
		foreach($array as $q => $i)
		{
			$query="update cart1 set p_quantity='$q' where id='$i' ";
			mysqli_query($db,$query);
			header("location:cart.php?mes=Update quantity as been successfully");
		}
	}
}
?>

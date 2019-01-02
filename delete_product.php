<?php session_start(); 
if(!isset($_SESSION['username']))
{
	header('location:home.php');
}
$username=$_SESSION['username'];
$db = mysqli_connect('localhost', 'root', '','registarion');
$rank=mysqli_query($db,"SELECT rank from users where username='$username'");
$result = mysqli_fetch_array($rank);
if ($result['rank']!=2) 
{
	header('location:home.php');
}?>
	<a href="home.php"><p align="right">Home Page</p></a>
	<center>
	<form action="delete_product.php" method="post">
	<table border=1>
	<tr>
	<th colspan=2>Delete Product</th>
	</tr>
	<tr>
	<td>Product Barcode:</td>
	<td><input type="text" name="barcode" /></td>
	</tr>
	<td>Size:</td>
	<th><select name="size">
		<option value="XS">XS</option>
		<option value="S">S</option>
		<option value="M">M</option>
		<option value="L">L</option>
		<option value="XL">XL</option>
	</select></th>
	<tr><td colspan=2 align="center"><input type="submit" name="delete" value="Delete product from store" /> </td></tr>
	<tr><td colspan=2 align="center"><input type="submit" name="submit" value="submit" /> </td></tr>
	</table>
	</form>
	<?php if(isset($_POST['submit'])) {
		$db = mysqli_connect('localhost', 'root', '','cart');
		
		$barcode=$_POST['barcode'];
		$size=$_POST['size'];
		
		$query="DELETE FROM stock WHERE barcode='$barcode' AND size='$size'";
		mysqli_query($db,$query);
		if(mysqli_query($db,$query))
		{
			echo "<script>alert('Delete product Succesfully'); window.location.href='delete_product.php'</script>";
		}
	}?>
		<?php if(isset($_POST['delete'])) {
		$db = mysqli_connect('localhost', 'root', '','cart');
		
		$barcode=$_POST['barcode'];
		$query="DELETE FROM product WHERE barcode='$barcode'";
		mysqli_query($db,$query);
		$query="DELETE FROM stock WHERE barcode='$barcode'";
		mysqli_query($db,$query);
		$query="DELETE FROM cart WHERE barcode='$barcode'";
		mysqli_query($db,$query);
		if(mysqli_query($db,$query))
		{
			echo "<script>alert('Product deleted from the store'); window.location.href='edit_product.php'</script>";
		}
	}?>


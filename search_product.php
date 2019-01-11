<?php include "table.css" ;?>
<?php include "header.php" ;
if(!isset($_SESSION['username']))
{
	echo "<script type='text/javascript'>alert('Permission Denied');window.location.href='home.php'</script>";
}
if(isset($_SESSION['rank']))
{
if ($_SESSION['rank']!=1)
{
	echo "<script type='text/javascript'>alert('Permission Denied');window.location.href='home.php'</script>";
}}?>
<center>
<a href="home.php"><p align="right">Home Page</p></a>
<a href="search_product.php"><p align="right">Back to Search</p></a>
</center>
<?php if (!isset($_POST['sbarcode'])) {?>
	<br><br><br><br><br>
	<center>
	<form action="search_product.php" method="post">
	<br>
	<table>
	<th colspan=3>Search Product</th>
	<tr>
	<td>Enter Barcode:</td>
	<td><input type="text" name="barcode" /></td>
	</tr>
	<td><input type="submit" name="sbarcode"></td>
	</form>
<?php } else {?>

		<center>
		<table border=5>
		<tr><th colspan=5>Selected Product</th></tr>
		<tr>
		<th>Barcode</th><th>Image</th><th>Price</th><th>Size</th><th>Quantity On Stock</th>
		</tr>
<?php 
	if(isset($_POST['sbarcode']))
	{		
			$barcode=$_POST['barcode'];
			$db=mysqli_connect('localhost','root','','cart');
			$query="SELECT * FROM stock WHERE barcode='$barcode'";
		
			$run=mysqli_query($db,$query) or die('my sqli error');
			while($row=mysqli_fetch_array($run))
		{
			$bar=$row['barcode'];
			$image=$row['image'];
			$price=$row['price'];
			$size=$row['size'];
			$quantity=$row['quantity'];
			?>
			<tr>
			<td><?php echo '#';echo $barcode;?></td><td><img src="image/<?php echo $image ; ?>" width="80" height="80"></td><td><?php echo $price;?></td><td><?php echo $size; ?></td><td><?php echo $quantity; ?></td>
			</tr>
		<?php }?>
		</table>
<?php  } 
}?>
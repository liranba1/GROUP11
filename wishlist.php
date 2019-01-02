<?php session_start(); if (isset($_SESSION['username'])) { ?>

<a href="cart.php"><p align="right">View Cart</p></a>
<a href="home.php"><p align="right">Home Page</p></a>
<center>
<table border=1>
<h2><th colspan=7>My Wishlist</th></h2>
<tr>
<th>Barcode</th>
<th>Name</th>
<th>Image</th>
<th>Price</th>
<th>Size</th>
<th>Add to cart</th>
<th>Delete</th>
</tr>

<?php 
$username=$_SESSION['username'];
$db = mysqli_connect('localhost', 'root', '','cart');
$query="SELECT * FROM wishlist WHERE username='$username'";
$run=mysqli_query($db,$query);
while ($row =mysqli_fetch_array($run))
{
	$id=$row['id'];
	$barcode=$row['barcode'];
	$name=$row['name'];
	$image=$row['image'];
	$price=$row['price'];
	$cat=$row['catagory'];
	?>
	<tr>
	<th><?php echo '#'; echo $barcode;?></th>
	<th><?php echo $name; ?></th>
	<th><img src="image/<?php echo $image ; ?>" width="120" height="120" ?></th>
	<th><?php echo $price; echo '$'; ?></th>
	<form action="wishlist.php" method="post">
		<th><select name="size">
		<option value="XS">XS</option>
		<option value="S">S</option>
		<option value="M">M</option>
		<option value="L">L</option>
		<option value="XL">XL</option>
		</select></th>
		<input type="hidden" value="<?php echo $name; ?>" name="name" />
		<input type="hidden" value="<?php echo $image; ?>" name="image" />
		<input type="hidden" value="<?php echo $price; ?>" name="price" />
		<input type="hidden" value="<?php echo $barcode; ?>" name="barcode" />
		<input type="hidden" value="<?php echo $cat; ?>" name="cat" />
		<input type="hidden" value="<?php echo $id; ?>" name="id" />
	<th><input type="submit" name="submit" value="Add to cart"></th>
	<th><input type="submit" name="delete" value="Delete"></th>
	</form></tr>
	
	<?php }?>
	
<?php
if (isset($_POST['submit']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$barcode=$_POST['barcode'];
	$image=$_POST['image'];
	$price=$_POST['price'];
	$cat=$_POST['cat'];
	$size=$_POST['size'];
	$query="insert into cart (barcode,username,p_name,p_image,p_price,p_size,p_quantity,p_catagory) VALUES('$barcode','$username','$name','$image','$price','$size',1,'$cat')";
	if (mysqli_query($db,$query))
	{
		$query="DELETE from wishlist WHERE id='$id'";
		if (mysqli_query($db,$query))
		{
			echo "<script type='text/javascript'>alert('The product successfuly added to the cart!');window.location.href='wishlist.php'</script>";
		}
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Product adding is Faild!');window.location.href='wishlist.php'</script>";
	}
	

}	
if (isset($_POST['delete']))
{
	$id=$_POST['id'];
	$query="DELETE from wishlist WHERE id='$id'";
	if (mysqli_query($db,$query))
		echo "<script type='text/javascript'>alert('The product successfuly deleted!');window.location.href='wishlist.php'</script>";
	else
		echo "<script type='text/javascript'>alert('The product delete Faild try again!');window.location.href='wishlist.php'</script>";
	
}
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php }?>


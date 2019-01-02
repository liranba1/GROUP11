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
	<form action="edit_product.php" method="post">
	<table border=1>
	<tr>
	<th colspan=2>Update Products</th>
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
	<tr><td colspan=2 align="center"><input type="submit" name="submit" value="submit" /> </td></tr>
	</table>
	</form>
	<?php if(isset($_POST['submit'])) {
		$db = mysqli_connect('localhost', 'root', '','cart');
		$barcode=$_POST['barcode'];
		$size=$_POST['size'];
		
		$_SESSION['barcode']=$barcode;
		$_SESSION['size']=$size;
		
		$query="SELECT * FROM stock WHERE barcode='$barcode' AND size='$size'";
		$res=mysqli_query($db,$query);
		$row=mysqli_fetch_assoc($res);
		
		$image=$row['image'];
		$price=$row['price'];
		?>
		<br><img src="image/<?php echo $image ; ?>" width="300" height="200" ?></br>
		<form action="edit_product.php" method="post">
		<tr>
		<br><td>Edit Name:</td>
		<td><input type="text" name="name"/></td>
		</tr></br>
		<tr>
		<br><td>Edit Barcode:</td>
		<td><input type="text" name="barcode" /></td>
		</tr></br>
		<tr>
		<br><td>Edit Quantity:</td>
		<td><input type="text" name="quantity" /></td>
		</tr><br>
		<tr>
		<br><td>Edit price:</td>
		<td><input type="text" name="price" /></td>
		</tr></br>
		<input type="submit" name="update" value="Update Products">
		</form>
		<?php }?>
		<?php
		if(isset($_POST['update']))
		{
			$db = mysqli_connect('localhost', 'root', '','cart');
			$n=$_POST['name'];
			$b=$_POST['barcode'];
			$q=$_POST['quantity'];
			$p=$_POST['price'];
			
			$barcode=$_SESSION['barcode'];
			$size=$_SESSION['size'];
			unset($_SESSION['barcode']);
			unset($_SESSION['size']);
			
			if(isset($n))
			{
				$update="UPDATE stock SET name='$n' WHERE barcode='$barcode' AND size='$size'";
				mysqli_query($db,$update);
			}
			if(isset($b))
			{
				$update="UPDATE stock SET barcode='$b' WHERE barcode='$barcode' AND size='$size'";
				mysqli_query($db,$update);
			}
			if(isset($q))
			{
				$update="UPDATE stock SET quantity='$q' WHERE barcode='$barcode' AND size='$size'";
				mysqli_query($db,$update);
			}
			if (isset($p))
			{
				$update="UPDATE stock SET price='$p' WHERE barcode='$barcode' AND size='$size'";
				mysqli_query($db,$update);
			}
			if(mysqli_query($db,$update))
			{
				echo "<script>alert('Update Succesfully'); window.location.href='edit_product.php'</script>";
			}
		}
		?>
		<?php
	?>

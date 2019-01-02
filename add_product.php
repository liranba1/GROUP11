<?php 
session_start();
if (isset($_SESSION['username'])) 
$username=$_SESSION['username'];
$db = mysqli_connect('localhost', 'root', '','registarion');
$rank=mysqli_query($db,"SELECT rank from users where username='$username'");
$result = mysqli_fetch_array($rank);
if ($result['rank']==2) {?>
<a href="home.php"><p align="right">Home Page</p></a>
<center>
<form action="add_product.php" method="post" enctype="multipart/form-data">
<table border=1>
<tr>
<th colspan=2>Add a new Product</th>
</tr>
<tr>
<td>Barcode:</td>
<td><input type="text" name="barcode" /></td>
</tr>
<tr>
<td>Name:</td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Image:</td>
<td><input type="file" name="image" /></td>
</tr>
<tr>
<td>Price:</td>
<td><input type="text" name="price" /></td>
</tr>
<tr>
<td>Size:</td>
<td>
  <select name="sz">
    <option value="XS">XS</option>
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
	<option value="XL">XL</option>
  </select>
</td>
</tr>
<tr>
<td>Catagory:</td>
<td>
  <select name="catname">
    <option value="tops">tops</option>
    <option value="dresses">dresses</option>
    <option value="heels">heels</option>
    <option value="sunglasses">sunglasses</option>
	<option value="bags">bags</option>
	<option value="flats">flats</option>
	<option value="bottoms">bottoms</option>
  </select>
</td>
</tr>
<tr>
<td>Quantity:</td>
<td><input type="text" name="quantity" /></td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" name="submit" value="submit" /> </td>
</tr>
</table>
</form>
</center>

<?php
$db = mysqli_connect('localhost', 'root', '','cart');

if(isset($_POST['submit']))
{
	$barcode=$_POST['barcode'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$image=$_FILES['image']['name'];
	$sz=$_POST['sz'];
	$cat=$_POST['catname'];
	$quantity=$_POST['quantity'];
	$image_tmp_name=$_FILES['image']['tmp_name'];		
	
	move_uploaded_file($image_tmp_name,"image/$image");
	$result = mysqli_query($db,"SELECT barcode FROM stock WHERE barcode ='$barcode' and size='$sz'");
	if (mysqli_num_rows($result))
	{
		echo "<script>alert('Error product is already exist! For edit product:'); window.location.href='edit_product.php'</script>";
	}	
	else
	{
	$query = mysqli_query($db,"SELECT barcode FROM product WHERE barcode ='$barcode'");
	if (!mysqli_num_rows($query))
	{
		$query="insert into product (barcode,name,image,price,quantity,catagory,size) VALUES ('$barcode','$name','$image','$price','1','$cat','All')";
		mysqli_query($db,$query);
	}
	
	$query="insert into stock (barcode,name,image,price,quantity,catagory,size) VALUES ('$barcode','$name','$image','$price','$quantity','$cat','$sz')";
	if(mysqli_query($db,$query))
	{
		echo '<center>';
		echo "Product Successfully Inserted";
		echo '</center>';
	}
	else
	{
		echo '<center>';
		echo "Product Insert Faild!";
		echo '</center>';
	}
	}
}
?>
	<?php } else{ ?>
		<center>
		<h2>Permission Denied!</h2>
		<a href="home.php">Return Home Page</a><br/>
		</center>
	<?php }?>
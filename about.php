<?php

$db = mysqli_connect('localhost', 'root', '','cart');
$query="SELECT * FROM product WHERE catagory='tops'";
$run=mysqli_query($db,$query);
while ($row =mysqli_fetch_array($run))
{
	$id=$row['id'];
	$name=$row['name'];
	$image=$row['image'];
	$price=$row['price'];
	$size=$row['size'];
	$cat=$row['catagory'];
	?>
	<tr><th><?php echo $name; ?></th>
	<th><img src="image/<?php echo $image ; ?>" width="300" height="200" ?></th>
	<th><?php echo $price; echo '$'; ?></th>
	<th><?php echo $size; ?></th>
	<form action="tops.php" method="post">
	<th><input type="text" name="quantity" value="">
	<th><input type="submit" name="submit" value="Add to cart"></th>
	</form></tr>
}
<?php?>
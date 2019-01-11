<?php include "header.php"; ?>
<?php
if (isset($_SESSION['rank']))
{
	if ($_SESSION['rank']==1)
	{?>
	<?php if (!isset($_POST['submit']))
	{ ?>
	<br><br><br><br><br><br><br><br><br>
	<center>
	<form action="most_popular.php" method="post">
	<table border=1>
	<tr>
	<th colspan=2>Most Popular</th>
	</tr>
	<tr>
	<td>Enter rank:</td>
	<td><input type="int" name="rank"/></td>
	</tr>
	<tr><td colspan=2 align="center"><input type="submit" name="submit" value="submit" /> </td></tr>
	</table>
	</form>
	</br></br></br></br></br></br></br></br>
	<?php }} ?>
	<?php if(isset($_POST['submit']))
	{
		$db=mysqli_connect('localhost','root','','admin');
		$rank=$_POST['rank'];
		?>
	<center>
	<table border=1>
	<h2><th colspan=8><?php echo '#'; echo $rank; echo ' ';?>Most Popular</th></h2>
	<tr><th>Product Name</th>
	<th>Image</th>
	<th>Barcode</th>
	<th>Sales Amount</th>
	</tr>
		<?php
		$query="SELECT barcode,SUM(quantity),name,image FROM orders GROUP BY barcode ORDER BY SUM(quantity) DESC LIMIT $rank";
		$run=mysqli_query($db,$query);
		if($run)
	{
		while($row=mysqli_fetch_array($run))
	{
		$name=$row['name'];
		$barcode=$row['barcode'];
		$quantity=$row['SUM(quantity)'];
		$image=$row['image'];
		?>
		<tr>
		<td><?php echo $name;?></td>
		<th><img src="image/<?php echo $image ; ?>" width="100" height="100" ?></th>
		<td><?php echo '#'; echo $barcode;?></td>
		<td><?php echo $quantity; ?></td>
		</tr>
<?php }?>
		</table>
		</center>
<?php }}}
else {
echo "<script type='text/javascript'>alert('Permission Denied');window.location.href='home.php'</script>";
 }?>

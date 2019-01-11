<?php include "server.php"; ?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

body {
  background-color: #d3d3d3;
}


.navbar {
    overflow: hidden;
    background-color: white;
    font-family: MS Gothic, MS Gothic, MS Gothic;
}

.navbar a {
    float: left;
    font-size: 18px;
    color: black;
    text-align: center;
    padding: 12px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 18px;
    border: none;
    outline: none;
    color: black;
    padding: 12px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #d3d3d3;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #d3d3d3;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    font-family: Dotum;
}

.dropdown-content .header {
    background: #d3d3d3;
    padding: 16px;
    color: black;
    font-family: Dotum;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    background-color: white;
    height: 500px;
}

.column a {
    float: none;
    color: black;
    padding: 19px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


</style>
</head>
<body>
<div class="navbar">
  <a href="home.php">Home</a>
  	<?php if (isset($_SESSION['username'])) {
	$username=$_SESSION['username'];
	$db = mysqli_connect('localhost', 'root', '','registarion');
	$rank=mysqli_query($db,"SELECT rank from users where username='$username'");
	$result = mysqli_fetch_array($rank);
	$_SESSION['rank']=$result['rank'];
	if ($result['rank']==0||$result['rank']==2) {
	?>
	<div class="dropdown">
    <button class="dropbtn"><?php echo $username; ?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h3>Orders</h3>
          <a href="customer_orders.php">My Orders</a>
        </div>
        <div class="column">
          <h3>Cart</h3>
          <a href="cart.php">My Cart</a>
		  <a href="wishlist.php">My Wishlist</a>
        </div>
		<div class="column">
          <h3>My Messages</h3>
          <a href="user_messages.php">Messages</a>
        </div>
	   </div>
    </div>
  </div>
	<?php
		}
	} ?>
  <div class="dropdown">
    <button class="dropbtn">Menu
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Arlen design</h2>
      </div>
      <div class="row">
        <div class="column">
          <h3>Clothes</h3>
          <a href="tops.php">Tops</a>
          <a href="dresses.php">Dresses</a>
          <a href="bottoms.php">Bottoms</a>
        </div>
        <div class="column">
          <h3>Shoes</h3>
          <a href="heels.php">Heels</a>
          <a href="flats.php">Flats</a>
        </div>
        <div class="column">
          <h3>Acceorise</h3>
          <a href="sunglasses.php">Sunglasses</a>
          <a href="bags.php">Bags</a>
        </div>
      </div>
    </div>
  </div>
    <a href="contact.php">Contact us</a>
	<a href="about.php">About us</a>
	<a href="search.php">Search items</a>
	<?php if (isset($_SESSION['username'])) {
	$username=$_SESSION['username'];
	$db = mysqli_connect('localhost', 'root', '','registarion');
	$rank=mysqli_query($db,"SELECT rank from users where username='$username'");
	$result = mysqli_fetch_array($rank);
	$_SESSION['rank']=$result['rank'];

	if ($result['rank']==1) {
	?>
	<div class="dropdown">
    <button class="dropbtn">Stock and Financial manage
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h3>Reports</h3>
		  <a href="payment_reports.php">Payment Reports</a>
		  <a href="order_reports.php">Order Reports</a>
		  <a href="shippments_reports.php">Shippment Reports</a>
		  <a href="lack.php">Lack Reports</a>
        </div>
		<div class="column">
          <h3>Search</h3>
		  <a href="search_order.php">Search Order</a>
		  <a href="search_product.php">Search Product</a>
        </div>
		<div class="column">
          <h3>General</h3>
          <a href="most_popular.php">Most Popular</a>
        </div>
		</div>
    </div>
	  </div>
	<?php
		}
	} ?>
  	<?php if (isset($_SESSION['rank'])) {
	if($_SESSION['rank']==2) {
	?>
	<div class="dropdown">
    <button class="dropbtn">Content and Media Manage
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h3>Products</h3>
          <a href="add_product.php">Add new product</a>
		  <a href="edit_product.php">Update products</a>
		  <a href="delete_product.php">Delete products</a>
		  <a href="product_reports.php">Products on Store</a>
        </div>
        <div class="column">
          <h3>Support</h3>
          <a href="messages_reports.php">Customers Messages</a>
		  <a href="search_user.php">Search User</a>
		  <a href="delete_user.php">Delete User</a>
        </div>
		<div class="column">
          <h3>Permissions</h3>
          <a href="permissions.php">Make/Change Permission</a>
        </div>
	<?php
		}
	} ?>
      </div>
    </div>
  </div>
</div>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>

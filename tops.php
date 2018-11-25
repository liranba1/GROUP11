<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: right;
  width: 33%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 10px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 6px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h2>Tops</h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="pic1.png" alt="pic1" style="width:60%">
      <div class="container">
        <h2>Top raz</h2>
        <p class="title">top</p>
        <p>A white summer top</p>
        <p>12$</p>
 		<a href="item.php">
        <p><button class="button">Select item</button></p>
		</a>
        <p><button class="button">Add to wishlist</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="pic1.png" alt="pic2" style="width:60%">
      <div class="container">
        <h2>Top Noy</h2>
        <p class="title">top</p>
        <p>A black and white summer top</p>
        <p>12$</p>
		<a href="item.php">
        <p><button class="button">Select item</button></p>
		</a>
        <p><button class="button">Add to wishlist</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="pic1.png" alt="pic3" style="width:60%">
      <div class="container">
        <h2>Top orel</h2>
        <p class="title">top</p>
        <p>A black summer top</p>
        <p>12$</p>
		<a href="item.php">
        <p><button class="button">Select item</button></p>
		</a>
        <p><button class="button">Add to wishlist</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

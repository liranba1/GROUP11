<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo"><img src="logo.png" style="width:50%"></a>
  <div class="header-right">

  </div>
</div>

<div style="padding-left:20px">

</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=Send] {
    background-color: pink;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=Send]:hover {
    background-color: grey;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column, input[type=Send] {
        width: 100%;
        margin-top: 0;

    }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>please enter your details</p>
  </div>
  <div class="row">
    <div class="column">
      <a href="home.php"><img src="logo.png" style="width:100%"></a>
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="E-Mail">E-Mail</label>
        <input type="text" id="E-Mail" name="E-Mail" placeholder="Your e-mail address..">
        <label for="Your Request">Write somthing</label>
        <textarea id="Your Request" name="Your Request" placeholder="Write something.." style="height:170px"></textarea>
        <input type="Send" value="Send">
      </form>
    </div>
  </div>
</div>

</body>
</html>

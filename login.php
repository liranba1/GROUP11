<?php
include "inc.php";

if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $q = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($q) == 1){
         $row = mysqli_fetch_object($q);
         $_SESSION['userObj'] = $row;
    }
}

if(isset($_SESSION['userObj'])){
    header("Location: index.php");
}

?>


<div class="card">
    <form action="login.php" method="post">
        <input type="text" name="username" value="Username" required>
        <input type="password" name="password" value="password" required>
        <button type="submit" name="login">Login</button>
    </form>
</div>

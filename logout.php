<?php
session_start();
unset($_SESSION['userObj']);
header("Location: login.php");
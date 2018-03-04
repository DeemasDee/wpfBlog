<?php
//sesi login
session_start();
if(isset($_SESSION["username"])){
}else{
 echo header("location:login.php");
 
}
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    Dashboard Admin
    <ul>
            <li><a href="../index.php?page=home">Cek Blog</a></li>
            <li><a href="logout.php">logout</a></li>
	</ul>
</body>
</html>>
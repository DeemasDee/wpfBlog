<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> WPF BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
<!-- -->
<div class="content">
	<header>
		<h1 class="judul">WPF Blog</h1>
		<h3 class="deskripsi">Mencoba membuat catatan Pribadi</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
		</ul>
	</div>
 
	<div class="badan">
 <!-- Untuk opsi menu bar-->
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		switch ($page) {
			case 'home':
				include "pages/beranda.php";
				break;
			case 'tentang':
				include "pages/tentang.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman belum dibuat !</h3></center>";
                break;
            }
    }
    else{
		include "pages/beranda.php";
	}?>
	</div>
</div>
</body>
</html>>
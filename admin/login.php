<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<br/><br/>
	<center><h2>Form Login Admin</h2></center>	
	<br/>
    <div class="login">
        <br/>
        <form method="post" action="proses_login.php" id="login-form">
            <?php if(isset($_GET["login_error"])){ ?>
            <h4 style="color: red; text-align: center;" >Maaf Password atau username salah</h4>
            <?php } ?>
                <br />
                <div class="input-group">
                <input type="text" name="username" value="" placeholder="Username or Email" style="width: 280px;">
                </div>
                <div class="input-group">
                <input type="password" name="password" value="" placeholder="Password" style="width: 280px;">
                </div>
                <div class="input-group"><input type="submit" name="commit" value="Login" class="btn">
                </div>
        </form>
    </div>
</body>
</html>
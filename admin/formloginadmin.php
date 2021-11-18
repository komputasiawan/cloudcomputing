<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<link href="../css/loginadmin.css" rel="stylesheet">   
</head>
<body>
  <body>
    <?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>UPS! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($insertMsg)){
		?>
			<div class="alert alert-success">
				<strong>SUCCESS! <?php echo $insertMsg; ?></strong>
			</div>
        <?php
		}
		?> 
    <div class="container">
      <h1>Login Admin</h1>
        <form action="cekloginadmin.php" method="post">
            <label>Username Admin</label><br>
            <input type="text" name="userlog" id="userlog"><br>
            <label>Password Admin</label><br>
            <input type="password" name="passlog" id="passlog"><br>
            <button id="masukadmin" name="masukadmin">Login</button>
			<p> 
              <a href="../formloginuser.php">Masuk sebagai User</a> &nbsp &nbsp &nbsp &nbsp <a href="../index.php">Home</a>
            </p>
        </form>
    </div>
  </body>
</html>
    


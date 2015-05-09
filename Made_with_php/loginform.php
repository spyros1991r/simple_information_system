<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Please Login.</title>
<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>

      <h3>Login to Public's Website</h3>
	  
       <?php if(isset($_SESSION['warnings'])){ ?>
       	   <div id="warnings"><?php echo $_SESSION['warnings'];?></div>
		   
	
	  <?php session_destroy();  } ?>
	  
      <form action="logincode.php" method="POST">
      <label>Your username:</label>
      <input type="text" name="username" value="">
      <label>Your Password:</label>
      <input type="password" name="userpass" value="">
      <input type="hidden" name="loginform" value="TRUE">
      <input type="submit" value="submit">
      
      </form>
              
              
</body>
</html>

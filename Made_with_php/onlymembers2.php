<?php session_start(); ?>

       <?php if(isset($_SESSION['warnings'])){ ?>
       	   <div id="warnings"><?php echo $_SESSION['warnings'];?></div>

<?php session_destroy();   } ?>


     <?php if(isset($_SESSION['notice'])){ ?>
       	   <div id="notice"><?php echo $_SESSION['notice'];?></div>

<?php session_destroy();  } ?>




<form action="members_code.php" method="POST">

<label> Please insert the product for specific search </label>
<input type="text" name="proion" value="">
<input type="submit" value="search_in_the_store" name="search_in_the_store">
<input type="submit" value="search_in_the_storage" name="search_in_the_storage">
<input type="hidden" name="onlymembers" value="TRUE">








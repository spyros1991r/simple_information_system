<?php session_start(); ?>

       <?php if(isset($_SESSION['warnings2'])){ ?>
       	   <div id="warnings2"><?php echo $_SESSION['warnings2'];?></div>

<?php session_destroy();  } ?>

     <?php if(isset($_SESSION['notice'])){ ?>
       	   <div id="notice"><?php echo $_SESSION['notice'];?></div>

<?php session_destroy();  } ?>

<form action="members_code.php" method="POST">

<label> Please insert the name of the product </label>
<input type="text" name="paraggelia_proion" value="">
<label> Please insert the quantity of the product </label>
<input type="text" name="posotita_paraggelia_proion" value="">
<input type="submit" value="submit">
<input type="hidden" name="only_members_paraggelia" value="TRUE">

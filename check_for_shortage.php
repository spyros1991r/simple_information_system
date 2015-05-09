
<?php


session_start();
include('dbcon.php');  

if (isset($_POST['check_for_shortages'])) {
    
     $id = 1;
	 $flag = false;

    for($i=1;$i<=4;$i++) {
	   
	
         if($stmt = $mysqli->prepare("SELECT quantity_of_product FROM products_store WHERE id = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('i',$i); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress2);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
            }
			   if($stmt = $mysqli->prepare("SELECT quantity_of_product FROM products_storage WHERE id = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('i',$i); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress3);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
            }
			
			   if($stmt = $mysqli->prepare("SELECT name_of_product FROM products_store WHERE id = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('i',$i); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress4);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
            }
			
			$sinoliki_posotita = $ress2 + $ress3;
			
			if($sinoliki_posotita <= 4) {
			
			  echo ("We must order more products for the product with id $id and name $ress4");
			  
			  echo"<br/>";
			
			  $flag = true; 
			    
		            }
			  
	    }
		
		
		if($flag == true) {
		
		echo " <label> <click here to move back to the options </label> ";
				 
	    ?>
        <form action="move.php" method="POST">
		
	    <br/>
		
        <input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
		
		
				 
		  <?php 
		   

        }		
		
	  
		
		
	else if($flag == false) {

        echo("No product needs to be ordered <br/>"); 
		  
		echo " <label> click here to move back to the options </label>";
				 
	    ?>
        <form action="drop_of_prices.php" method="POST">
		
	    <br/>
		
        <input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
				 
				 
	     <?php 

        }		   
    }
	
?>
   
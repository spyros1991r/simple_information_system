
<?php 
include ('dbcon.php');
session_start();

//Part for specific search

//search in the store

if((isset($_POST['onlymembers'])) && (isset($_POST['search_in_the_store']))){

$myproion=trim($_POST['proion']);

if(isset($_POST['proion']) && !empty($_POST['proion'])){

   if($stmt = $mysqli->prepare("SELECT quantity_of_product FROM products_store WHERE name_of_product = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('s',$myproion); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
            }
			
	 if($stmt = $mysqli->prepare("SELECT name_of_product FROM products_store WHERE name_of_product = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('s',$myproion); 
             //Εκτέλεση
             $stmt->execute();
             //Bind των αποτελεσμάτων
             $stmt->bind_result($ress6);  
             //Πιάνουμε το record από τη βάση.
             $stmt->fetch();   
             //Κλείσιμο του statement
             $stmt->close();                    
            }
            

            if($ress6 == ""){
			 $_SESSION['warnings'] = "There is no such product";
			 header("location: onlymembers2.php");
              
				
			}
			
			else if($ress6 != "") {
			
			    
				$posotita = 10-$ress;
                echo (" Product has quantity of $ress <br/> The remaining space in the store for the product $ress6 is $posotita");
				
				echo "<label> <br/> click here to move back to the options </label> ";
				 
				 ?>
				  <form action="move.php" method="POST">
				  <br/>
                 <input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
				 
				 
				 <?php
				 
			} 
				    
				
			
              
			  }
			  
			  else {
			  $_SESSION['notice'] = "Please fill in the field";
			  header("location: onlymembers2.php");
			  
	 }
	 
}

	 
	 //search in the storage
	 
 else if((isset($_POST['onlymembers'])) && (isset($_POST['search_in_the_storage']))){
	 
	 
	 $myproion=trim($_POST['proion']);

    if(isset($_POST['proion']) && !empty($_POST['proion'])){

       if($stmt = $mysqli->prepare("SELECT quantity_of_product FROM products_storage WHERE name_of_product = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('s',$myproion); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
            }
			
	 if($stmt = $mysqli->prepare("SELECT name_of_product FROM products_storage WHERE name_of_product = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('s',$myproion); 
             //Εκτέλεση
             $stmt->execute();
             //Bind των αποτελεσμάτων
             $stmt->bind_result($ress9);  
             //Πιάνουμε το record από τη βάση.
             $stmt->fetch();   
             //Κλείσιμο του statement
             $stmt->close();                    
            }
            

            if($ress9 == ""){
			 $_SESSION['warnings'] = "There is no such product";
			 header("location: onlymembers2.php");
              
				
			}
			
			else if($ress9 != "") {
			    $posotita = 10 - $ress;
				print(" Product has quantity of $ress");
				print(" <br/> The remaining space of the storage for the product $ress9 is $posotita ");
				
				?>
				  <form action="move.php" method="POST">
				  <br/>
                 <input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
				 
				 
				 <?php
				 
	 
	          }
			  
			  
			  
		}
		
		else {
		
		 $_SESSION['notice'] = "Please fill in the field";
			  header("location: onlymembers2.php");
			  
			  }
			  
		
		
		
		
	}
	 
	 //Part for orders
	 
	 
	 else if(isset($_POST['only_members_paraggelia']) && $_POST['only_members_paraggelia']){
	 
	    $myproion=trim($_POST['paraggelia_proion']);
	    $posotita_myproion=trim($_POST['posotita_paraggelia_proion']);
		
		
	 
	 
	 //Check in the store
	 
	 if(isset($_POST['paraggelia_proion']) && !empty($_POST['paraggelia_proion']) && (isset($_POST['posotita_paraggelia_proion']) && !empty($_POST['posotita_paraggelia_proion']))){
	 
		
   if($stmt = $mysqli->prepare("SELECT quantity_of_product FROM products_store WHERE name_of_product = ? LIMIT 1")){
             //Bind των παραμέτρων
             $stmt->bind_param('s',$myproion); 
             /*Εκτέλεση*/
              $stmt->execute();
             /*Bind των αποτελεσμάτων*/
              $stmt->bind_result($ress);  
              /*Πιάνουμε το record από τη βάση.*/  
              $stmt->fetch();   
              /*Κλείσιμο του statement*/
              $stmt->close();                    
            }
			
	 if($stmt = $mysqli->prepare("SELECT name_of_product FROM products_store WHERE name_of_product = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('s',$myproion); 
             /*Εκτέλεση*/
              $stmt->execute();
            /*Bind των αποτελεσμάτων*/
              $stmt->bind_result($ress7);  
            /*Πιάνουμε το record από τη βάση.*/  
              $stmt->fetch();   
              /*Κλείσιμο του statement*/
              $stmt->close();                    
            }
          
			
			
            if((($ress7 == null) && ($ress >= $posotita_myproion)) || (($ress7 == null) && ($ress < $posotita_myproion))) {
			
			 $_SESSION['warnings2'] = "There is no such product in the store or in the storage";
			 
			 header("location: only_members_paraggelia.php");
			 
			 }

             else if(($ress >= $posotita_myproion) && ($ress7 != null)) {
			 
			 $mysqli->query("UPDATE products_store SET quantity_of_product =".intval($ress - $posotita_myproion)."  WHERE name_of_product = '".mysql_real_escape_string($myproion)."'");
			 
			 
			 echo "The products has been found in the store"; 
			 
			 echo " <label> <br/> click here to move back to the options </label> ";
				 
				 ?>
				  <form action="move.php" method="POST">
				  <br/>
                 <input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
				 
				 <?php
			 
			  if($stmt = $mysqli->prepare("SELECT sales_of_product FROM statistics WHERE name_of_product = ? LIMIT 1")){
               //Bind των παραμέτρων
               $stmt->bind_param('s',$myproion); 
               /*Εκτέλεση*/
               $stmt->execute();
               /*Bind των αποτελεσμάτων*/
               $stmt->bind_result($ress3);  
               /*Πιάνουμε το record από τη βάση.*/  
               $stmt->fetch();   
               /*Κλείσιμο του statement*/
               $stmt->close();                    
			 }
				
			
			$mysqli->query("UPDATE statistics SET sales_of_product =".intval($ress3 + $posotita_myproion)."  WHERE name_of_product = '".mysql_real_escape_string($myproion)."'");
			
			} 
			 //check in the storage
			 
			 
			else if(($ress < $posotita_myproion) && ($ress7 != null)) {
			
			 echo " Not enough quantity in the store <br/>";
			 
			 
			       if($stmt = $mysqli->prepare("SELECT quantity_of_product FROM products_storage WHERE name_of_product = ? LIMIT 1")){
                    //Bind των παραμέτρων
                    $stmt->bind_param('s',$myproion); 
                    //Εκτέλεση
                    $stmt->execute();
                   //Bind των αποτελεσμάτων
                   $stmt->bind_result($ress2);  
                   //Πιάνουμε το record από τη βάση. 
                   $stmt->fetch();   
                   //Κλείσιμο του statement
                   $stmt->close();    	        
			 
			 }
			 
			 if($ress2 >= $posotita_myproion) {
			 
			   $mysqli->query("UPDATE products_storage SET quantity_of_product =".intval($ress2-$posotita_myproion)."  WHERE name_of_product = '".mysql_real_escape_string($myproion)."'");
              
			   echo "The products has been found in the storage <br/>"; 
			   echo "The products has been sent from the storage to the store";
			   
			   echo " <label> <br/> click here to move back to the options </label> ";
				 
				 ?>
				 
				  <form action="move.php" method="POST">
				  <br/>
                 <input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
				 
				 </form>
				 
				 <?php
			  
			  
			   if($stmt = $mysqli->prepare("SELECT sales_of_product FROM statistics WHERE name_of_product = ? LIMIT 1")){
                 //Bind των παραμέτρων
                 $stmt->bind_param('s',$myproion); 
                 //Εκτέλεση
                 $stmt->execute();
                 //Bind των αποτελεσμάτων
                 $stmt->bind_result($ress4);  
                 //Πιάνουμε το record από τη βάση.
                 $stmt->fetch();   
                 //Κλείσιμο του statement
                 $stmt->close();                    
            }
			
			
			 if($ress4 == '0')  {
			
			
			 
             $mysqli->query("UPDATE statistics SET sales_of_product =".intval($ress - $posotita_myproion)."  WHERE name_of_product = '".mysql_real_escape_string($myproion)."'");
			 
			 
			 }
			 
			 else {
			 
			 
			 $mysqli->query("UPDATE statistics SET sales_of_product =".intval($ress4 + $posotita_myproion)."  WHERE name_of_product = '".mysql_real_escape_string($myproion)."'");
			 
			 }     
			  
			 
			 }
			 
			 else {
			 
			  echo "Not enough quantity in the storage \n";
			  
			  ?>
				  <form action="move.php" method="POST">
				  <br/>
                 <input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
				 
				 
				 <?php

			 
			 }
			
			
         			 
	        
			
			} 
			
        }
		else {
		
		  $_SESSION['warnings2'] = "Please fill in both fields";
			 
			 header("location: only_members_paraggelia.php");
		
		}
		
		
		
}

?>
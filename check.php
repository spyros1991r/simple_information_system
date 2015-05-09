<?php
session_start();
include('dbcon.php');  

 if (isset($_POST["check_storage"])) {
     
      $id=1;
 
     for($i=1;$i<=5;$i++) {
    
     

      if($stmt = $mysqli->prepare("SELECT posotita FROM proionta_apothikis WHERE id = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('i',$id); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress3);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
        }
			
		if($stmt = $mysqli->prepare("SELECT proion FROM proionta_apothikis WHERE id = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('i',$id); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress4);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
            }	
			
			$akomi_posotita = $ress3;
			echo "For product with id $id and name $ress4 the remaining quantity is $akomi_posotita <br/>";
			
		    $id++;
			
			
    }
	
	?>
	
	<form action="move.php" method="POST">
	<input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
				 
	</form>
	 
    <?php 
				 
 }
	
		



else if(isset($_POST["check_store"])) {

     
      $id2=1;
 
     for($i=1;$i<=5;$i++) {
    
     

      if($stmt = $mysqli->prepare("SELECT posotita FROM proionta WHERE id = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('i',$id2); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress5);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
        }
			
		if($stmt = $mysqli->prepare("SELECT proion FROM proionta WHERE id = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('i',$id2); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress6);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
            }	
			
			$akomi_posotita = $ress5;
			
			echo "For product with id $id2 and name $ress6 the remaining quantity is $akomi_posotita <br/>";
			
		    $id2++;
					
    }

    	?>
			
	       <form action="move.php" method="POST">
	       <input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
				 
	       </form>
	 
	       <?php 	
	
 }	
 		

?>
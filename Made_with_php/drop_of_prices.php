
<?php
include ('dbcon.php');
session_start();


if(isset($_POST['drop_of_prices'])) {
     //$flag = false;
	 
     $id = 1;
				   
	for($i=1;$i<=5;$i++) {
	   
	
         if($stmt = $mysqli->prepare("SELECT sales_of_product FROM statistics WHERE id = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('i',$id); 
             //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($ress2);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close(); 
			  
			
             }
			 
		  if($stmt = $mysqli->prepare("SELECT name_of_product FROM statistics WHERE id = ? LIMIT 1")){
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
		     
			 if($ress2 <= 4) {
			    
			   echo "For product $ress4 with id $id its price must be lowered <br/>";
			   
			   //$flag = true;
			 
                }
				
				$id++;
				
				
				

    }
	
	 ?>
	 
	 <form action="move.php" method="POST">
	 <input type="submit" value="click_here_to_go_back" name="click_here_to_go_back">
				 
	 </form>
	 
	 <?php 
	
	


}
      
		
		?>
		
 
 <?php
 session_start();
			   
			   if(isset($_POST['Move_to_order_section'])) {
			   
			      header('Location: only_members_paraggelia.php');
				  
				}
				
				else if(isset($_POST['Move_to_search_section'])) {
				
				   header('Location: onlymembers2.php');
				   
				}
				
				 else if(isset($_POST['logout'])) {
				
				   header('Location: loginform.php');
				   
				   session_destroy();
				   
				   }
		
				  ?>
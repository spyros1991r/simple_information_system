
 <?php session_start(); 
             
			 echo("Please pick either the specific product search either the order panel");
			
			?>
			
			     <?php if(isset($_SESSION['warnings'])){ ?>
       	   <div id="warnings"><?php echo $_SESSION['warnings'];?></div>

             <?php session_destroy(); } ?>
				 
				 <form action="dio_buttons.php" method="POST">
				 <input type="submit" value="Move_to_order_section" name="Move_to_order_section">
				 <input type="submit" value="Move_to_search_section" name="Move_to_search_section">
				 <label> If you want to exit click logout </label>
				 <input type="submit" value="logout" name="logout">
				 
				 </form>
				 
				 <form action="drop_of_prices.php" method="POST">
				 <label> If you want to check for drop of prices click here </label>
				 <input type="submit" value="drop_of_prices" name="drop_of_prices">
				 
				 </form>
				 
				 
				 <form action="check_for_shortage.php" method="POST">
				 <label> If you want to check for shortages click here </label>
				 <input type="submit" value="check_for_shortages" name="check_for_shortages"> 
				  
				  </form>
				  
				  <?php  if(isset($_SESSION['user1'])) {
				  
				  ?>
				  
				  
				          <form action="check.php" method="POST">
				          <label> If you want to check for how many products exist in the storage click here </label>
				          <input type="submit" value="check_storage" name="check_storage">
				 
				          </form> 
						  
					<?php }  ?>
					
					 
					   <?php  if(isset($_SESSION['user2'])) {
				  
				       ?>
				  
				  
				          <form action="check.php" method="POST">
				          <label> If you want to check for how many products exist in the store click here </label>
				          <input type="submit" value="check_store" name="check_store">
				 
				          </form> 
						  
					<?php }  ?>
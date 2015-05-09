<?php
session_start();
include('dbcon.php');  

  if((isset($_POST['loginform']) && $_POST['loginform'])) {
		  
          if((isset($_POST['username']) && !empty($_POST['username'])
         && isset($_POST['userpass']) && !empty($_POST['userpass']))){
            //Μπαίνουμε στη διαδικασία του Log In
            $myName = trim($_POST['username']);
            $mypass = md5(trim($_POST['userpass']));
            
      if($stmt = $mysqli->prepare("SELECT name FROM users WHERE name = ? AND password = ? LIMIT 1")){
             //Bind των παραμέτρων
            $stmt->bind_param('ss',$name ,$pass); 
			
			$name=$myName;
			$pass=$mypass;

           //Εκτέλεση
              $stmt->execute();
            //Bind των αποτελεσμάτων
              $stmt->bind_result($res);  
            //Πιάνουμε το record από τη βάση. 
              $stmt->fetch();   
              //Κλείσιμο του statement
              $stmt->close();                    
            }
   
		   
		   
		   
           if($res == null){
               $_SESSION['warnings'] = "Wrong Combination";
               header("Location: loginform.php");
           }
           else {
			   
		      header("Location: connection_between_paraggelia_and_search.php");
			  
			  }
			   
			   
			   }
			   
			   
			     
     else
     {   
         $_SESSION['warnings']="Please Fill IN both Fields";
		 header("Location: loginform.php");
		
		 
     }
			   
			
           } 
         
  
  
?>

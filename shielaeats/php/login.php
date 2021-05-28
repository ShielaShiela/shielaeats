<?php
	include 'connectdb.php';
	session_start();

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $conn -> real_escape_string($_POST['uname']);
      $mypassword = $conn -> real_escape_string($_POST['psw']); 
      $myusername = "admin";
	  $mypassword = "1234";
      $sql = "SELECT Username, UserPassword, UserTypeID FROM Users WHERE Username = '$myusername' and UserPassword = '$mypassword'";
      $result = $conn->query($sql);
	  
	  if ($result) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$usertype = $row['UserTypeID'];
			
			if ($usertype == 0){
				//Admin
				echo "Admin";
				$_SESSION['login_user'] = $myusername;
				header("location: ../admin.html");
			}
			else if ($usertype == 1){
				//Restaurant
				echo "Restaurant";
			}
			else if ($usertype == 2){
				echo "Courier";
			}
		}
		
	  } 
	else {
		echo "0 results";
	}
	  
   }
   $conn->close();
?>
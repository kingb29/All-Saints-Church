<?php
			if(isset($_POST['userEmailSubmit'])) {
				include('initialize.php');
				$email = $_POST['userEmail'];
				
				$sql = "INSERT INTO `Newsletter`(`Email`) VALUES ('$email')";
				
				if(!mysqli_query($db, $sql)){
					die('error');
				}
				
				$success = "Added " . $email . " to the Newsletter`list!";
				header('Location:ministries.php');
			}
		?>
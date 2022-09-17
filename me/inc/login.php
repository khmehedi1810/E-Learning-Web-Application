<?php 
	include "../../inc/db.php";
	ob_start();
	session_start();
	if (isset($_POST['s_login'])) {
	    $s_email = $_POST['s_email'];
		$s_password = $_POST['s_password'];
		if (empty($s_email) || empty($s_password)) {
			header("Location: ../error.php");
		}
		else{
			$s_email = mysqli_real_escape_string($connection, $s_email);
			$s_password = mysqli_real_escape_string($connection, $s_password);

			$hassedPass = sha1($s_password);

			$query = "SELECT * FROM students WHERE s_email = '$s_email' ";

			$selectStu = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_array($selectStu) ) {
				
				$_SESSION['s_id'] 			= $row['s_id'];
				$_SESSION['s_fname'] 		= $row['s_fname'];
				$_SESSION['s_lname'] 		= $row['s_lname'];
				$_SESSION['s_email'] 		= $row['s_email'];
				$_SESSION['s_phone'] 		= $row['s_phone'];
				$_SESSION['s_password'] 	= $row['s_password'];
				$_SESSION['s_gender'] 		= $row['s_gender'];
				$_SESSION['s_institute'] 	= $row['s_institute'];
				$_SESSION['s_securityQ'] 	= $row['s_securityQ'];
				$_SESSION['s_securityA'] 	= $row['s_securityA'];
				$_SESSION['s_pp'] 			= $row['s_pp'];
				$_SESSION['s_adress'] 		= $row['s_adress'];
				$_SESSION['s_gardian'] 		= $row['s_gardian'];
				$_SESSION['s_gardianPhone'] = $row['s_gardianPhone'];
				$_SESSION['s_fbProfile'] 	= $row['s_fbProfile'];

			}

			if ( $_SESSION['s_email'] !== $s_email ||  $_SESSION['s_password'] !== $hassedPass ){
				header("Location: ../error.php");
			}
			else if ( $_SESSION['s_email'] == $s_email &&  $_SESSION['s_password'] == $hassedPass ){
				header("Location: ../dashboard.php");
			}
			else{
				header("Location: ../index.php");
			}
		}
	}


ob_end_flush();
?>



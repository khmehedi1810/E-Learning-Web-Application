<?php
	include "../../inc/db.php";
	ob_start();
	session_start();
	if (isset($_POST['t_log'])) {
	    $t_lseKey = $_POST['t_lseKey'];
	    $t_lem = $_POST['t_lem'];
		$t_lpass = $_POST['t_lpass'];
		if (empty($t_lseKey) || empty($t_lem) || empty($t_lpass)) {
			header("Location: ../error.php");
		}
		else{
			$t_lseKey = mysqli_real_escape_string($connection, $t_lseKey);
			$t_lem = mysqli_real_escape_string($connection, $t_lem);
			$t_lpass = mysqli_real_escape_string($connection, $t_lpass);

			$hassedPass = sha1($t_lpass);

			$query = "SELECT t_id,t_email,t_security_key,t_password FROM teachers WHERE t_email = '$t_lem' ";

			$selectTea = mysqli_query($connection, $query);

			if (!$selectTea) {
				die("Query Failed ". mysqli_error($connection));
			}
			else{
				while ($row = mysqli_fetch_array($selectTea) ) {
				
				$_SESSION['t_id'] 			= $row['t_id'];
				$_SESSION['t_email'] 		= $row['t_email'];
				$_SESSION['t_security_key'] = $row['t_security_key'];
				$_SESSION['t_password'] 	= $row['t_password'];
				$_SESSION['t_permission'] 	= $row['t_permission'];

				}
				
				if ( $_SESSION['t_security_key'] !== $t_lseKey ||  $_SESSION['t_email'] !== $t_lem ||  $_SESSION['t_password'] !== $hassedPass){
					header("Location: ../error.php");
				}
				else if ( $_SESSION['t_security_key'] == $t_lseKey &&  $_SESSION['t_email'] == $t_lem &&  $_SESSION['t_password'] == $hassedPass){
					header("Location: ../dashboard.php");
				}
				else{
					header("Location: ../index.php");
				}
			}
		}
	}


?>
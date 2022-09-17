<?php 

	if (isset($_POST['report-btn'])) {
		$report_subject = $_POST['report-subject'];
		$report_message = $_POST['report-message'];


		if ( empty($report_subject) )
		{
			$message = '<div class="alert alert-warning">Please Fillup Subject.</div>';
		}
		elseif ( empty($report_message) ) 
		{
			$message = '<div class="alert alert-warning">Please Put a message.</div>';
		}
		else{

			$query = "INSERT INTO complain (subject, message) VALUES ( '$report_subject', '$report_message' )";

			$add_new_complain = mysqli_query($connection, $query);

			if ( !$add_new_complain ){
				die("Query Failed ". mysqli_error($connection));
			}
			else{
				header("Location: thankyou.php");
			}

		}



	}

?>
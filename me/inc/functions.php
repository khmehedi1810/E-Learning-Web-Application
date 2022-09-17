<?php 
  //
  ob_start();

  // For register a student
  if (isset($_POST['stu_register'])) {
  	    $s_fname 		= $_POST['s_fname'];
		$s_lname 		= $_POST['s_lname'];
		$s_pass 		= $_POST['s_pass'];
		$s_ins 			= $_POST['s_ins'];
		$s_gender 		= $_POST['s_gender'];
		$s_email 		= $_POST['s_email'];
		$s_phone 		= $_POST['s_phone'];
		$s_securityQ 	= $_POST['s_securityQ'];
		$s_securityA 	= $_POST['s_securityA'];

		// Encrypted Password
		$hassedPassword = sha1($s_pass);


		if ( empty($s_fname) || empty($s_lname) || empty($hassedPassword) || empty($s_ins) || empty($s_gender) || empty($s_email) || empty($s_phone) || empty($s_securityQ) || empty($s_securityA) )
		{
			echo '<div class="alert alert-warning">Please Fillup all the fields Correctly</div>';
		}
		else{

			$query = "INSERT INTO students (s_fname, s_lname, s_email, s_phone, s_password, s_gender, s_institute, s_securityQ, s_securityA) VALUES ( '$s_fname', '$s_lname', '$s_email', '$s_phone', '$hassedPassword', '$s_gender', '$s_ins', '$s_securityQ', '$s_securityA' )";

			$add_new_student = mysqli_query($connection, $query);

			if ( !$add_new_student ){
				//die("Query Failed ". mysqli_error($connection));
				echo '<div class="alert alert-warning">Email Addess Already Exist.</div>';
			}
			else{
				header("Location: thankyou.php");
			}

		}
  }

  //For Update a student data.
  if (isset($_POST['s_update'])) {
  		$u_id 				= $_POST['u_s_id'];
  	  	$u_s_fname 			= $_POST['u_s_fname'];
		$u_s_lname 			= $_POST['u_s_lname'];

		$u_s_pp        		= $_FILES['u_s_pp']['name'];
  		$u_s_pp_tmp    		= $_FILES['u_s_pp']['tmp_name'];
 
		$u_s_institute 		= $_POST['u_s_institute'];
		$u_s_gender 		= $_POST['u_s_gender'];
		$u_s_phone 			= $_POST['u_s_phone'];
		$u_s_gardian 		= $_POST['u_s_gardian'];
		$u_s_gardianPhone 	= $_POST['u_s_gardianPhone'];
		$u_s_fbProfile 		= $_POST['u_s_fbProfile'];
		$u_s_adress 		= mysqli_real_escape_string($connection, $_POST['u_s_adress']);


		move_uploaded_file($u_s_pp_tmp, "img/$u_s_pp");
		if ( !empty($u_s_pp) ){
		    $query = "UPDATE students SET s_fname='$u_s_fname', s_lname='$u_s_lname', s_phone='$u_s_phone', s_gender='$u_s_gender', s_institute='$u_s_institute',s_pp='$u_s_pp', s_adress='$u_s_adress', s_gardian='$u_s_gardian', s_gardianPhone='$u_s_gardianPhone', s_fbProfile='$u_s_fbProfile' WHERE s_id= '$u_id'";

		    $updatestudent = mysqli_query($connection, $query);

		    if ( !$updatestudent ){
		      die ("Query Failed. " . mysqli_error($connection));
		    }
		    else{
		      header("Location: dashboard.php");
		    }
		}else{
			$query = "UPDATE students SET s_fname='$u_s_fname', s_lname='$u_s_lname', s_phone='$u_s_phone', s_gender='$u_s_gender', s_institute='$u_s_institute', s_adress='$u_s_adress', s_gardian='$u_s_gardian', s_gardianPhone='$u_s_gardianPhone', s_fbProfile='$u_s_fbProfile' WHERE s_id= '$u_id'";

		    $updatestudent = mysqli_query($connection, $query);

		    if ( !$updatestudent ){
		      die ("Query Failed. " . mysqli_error($connection));
		    }
		    else{
		      header("Location: dashboard.php");
		    }
		}
  }


ob_end_flush();
?>
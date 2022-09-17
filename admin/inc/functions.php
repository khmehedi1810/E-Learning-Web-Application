<?php 
  //
  ob_start();

  if (isset($_POST['t_register'])) {
  	  $t_fnam			= $_POST['t_fnam'];
  	  $t_lnam			= $_POST['t_lnam'];
  	  $t_email			= $_POST['t_email'];
  	  $t_phn			= $_POST['t_phn'];
  	  $t_pass			= $_POST['t_pass'];
  	  $t_secu_key		= $_POST['t_secu_key'];
  	  $t_securityQ		= $_POST['t_securityQ'];
  	  $t_securityA		= $_POST['t_securityA'];

  	  $hassedPassword = sha1($t_pass);

  	  if ( empty($t_fnam) || empty($t_lnam) || empty($hassedPassword) || empty($t_email) || empty($t_phn) || empty($t_secu_key) || empty($t_securityQ) || empty($t_securityA) )
  		{
  			echo '<div class="alert alert-warning">Please Fillup all the fields Correctly</div>';
  		}
  		else{

  			$query = "INSERT INTO teachers (t_fname, t_lname, t_email, t_phone, t_password, t_security_key, t_SecurityQ, t_SecurityA) VALUES ( '$t_fnam', '$t_lnam', '$t_email', '$t_phn', '$hassedPassword', '$t_secu_key', '$t_securityQ', '$t_securityA' )";

  			$add_new_teacher = mysqli_query($connection, $query);

  			if ( !$add_new_teacher ){
  				//die("Query Failed ". mysqli_error($connection));
          echo '<div class="alert alert-warning">Email Addess Already Exist.</div>';
  			}
  			else{
  				header("Location: thankyou.php");
  			}
		  }
  }

  // For Update Teacher Info
  if (isset($_POST['t_update_info'])) {
      $t_up_id        =   $_POST['t_up_id'];
      $t_up_fnam      =   $_POST['t_up_fnam'];
      $t_up_lnam      =   $_POST['t_up_lnam'];

      $t_up_pp        = $_FILES['t_up_pp']['name'];
      $t_up_pp_tmp    = $_FILES['t_up_pp']['tmp_name'];


      $t_up_skey      =   $_POST['t_up_skey'];
      $t_up_nid       =   $_POST['t_up_nid'];
      $t_up_dob       =   $_POST['t_up_dob'];
      $t_up_prof      =   $_POST['t_up_prof'];
      $t_up_gndr      =   $_POST['t_up_gndr'];
      $t_up_ins       =   $_POST['t_up_ins'];
      $t_up_bio       =   mysqli_real_escape_string($connection, $_POST['t_up_bio']);
      $t_up_phn       =   $_POST['t_up_phn'];
      $t_up_edu       =   $_POST['t_up_edu'];
      $t_up_exp       =   mysqli_real_escape_string($connection, $_POST['t_up_exp']);
      $t_up_Hadd      =   mysqli_real_escape_string($connection, $_POST['t_up_Hadd']);
      $t_up_Padd      =   mysqli_real_escape_string($connection, $_POST['t_up_Padd']);
      $t_up_dmoVdo    =   $_POST['t_up_dmoVdo'];
      $t_up_fblink    =   $_POST['t_up_fblink'];

      move_uploaded_file($t_up_pp_tmp, "img/$t_up_pp");

      if ( !empty($t_up_pp) ){
        $query = "UPDATE teachers SET t_fname='$t_up_fnam', t_lname='$t_up_lnam', t_bio='$t_up_bio', t_phone='$t_up_phn', t_security_key='$t_up_skey',t_nid='$t_up_nid', t_dob='$t_up_dob', t_hometwn='$t_up_Hadd', t_presentAdd='$t_up_Padd', t_ppic='$t_up_pp', t_demoVdo='$t_up_dmoVdo', t_gender='$t_up_gndr', t_proffession='$t_up_prof', t_eduQua='$t_up_edu', t_institute='$t_up_ins', t_experience='$t_up_exp', t_fblink='$t_up_fblink' WHERE t_id= '$t_up_id'";

        $updateTea = mysqli_query($connection, $query);

        if ( !$updateTea ){
          die ("Query Failed. " . mysqli_error($connection));
        }
        else{
          header("Location: dashboard.php");
        }
      }
      else{
        $query = "UPDATE teachers SET t_fname='$t_up_fnam', t_lname='$t_up_lnam', t_bio='$t_up_bio', t_phone='$t_up_phn', t_security_key='$t_up_skey',t_nid='$t_up_nid', t_dob='$t_up_dob', t_hometwn='$t_up_Hadd', t_presentAdd='$t_up_Padd', t_demoVdo='$t_up_dmoVdo', t_gender='$t_up_gndr', t_proffession='$t_up_prof', t_eduQua='$t_up_edu', t_institute='$t_up_ins', t_experience='$t_up_exp', t_fblink='$t_up_fblink' WHERE t_id= '$t_up_id'";

        $updateTea = mysqli_query($connection, $query);

        if ( !$updateTea ){
          die ("Query Failed. " . mysqli_error($connection));
        }
        else{
          header("Location: dashboard.php");
        }
      }
  }

if (isset($_POST['create_course'])) {
    $course_code    = $_POST['course_code'];
    $course_key     = $_POST['course_key'];
    $t_id           = $_POST['t_id'];
    $course_dmo_vdo = $_POST['course_dmo_vdo'];
    $course_fbLink  = $_POST['course_fbLink'];
    $course_desc    = $_POST['course_desc'];

    if ( empty($course_code) || empty($course_key) || empty($t_id) || empty($course_dmo_vdo) || empty($course_fbLink) || empty($course_desc) )
    {
      echo '<div class="alert alert-warning" style="    width: 600px;margin: 0 auto;margin-top: 40px;border-radius: 10px;">Please Fillup all the fields Correctly</div>';
    }
    else{

      $query = "INSERT INTO courses (course_code, course_key, course_desc, course_dmo_vdo, course_fbLink, t_id) VALUES ( '$course_code', '$course_key', '$course_desc', '$course_dmo_vdo', '$course_fbLink', '$t_id')";

      $add_course = mysqli_query($connection, $query);

      if ( !$add_course ){
        echo '<div class="alert alert-warning" style="width: 600px;margin: 0 auto; margin-top: 100px;border-radius: 10px;">WRONG! Course Key Already Exist.</div>';
      }
      else{
        header("Location: dashboard.php");
      }
    }
}

  // Course Update Info
  if (isset($_POST['crs_update'])) {
      $crs_id         =   $_POST['crs_id'];
      $ucrs_key       =   $_POST['ucrs_key'];
      $ucrs_desc      =   mysqli_real_escape_string($connection, $_POST['ucrs_desc']);
      $ucrs_dmoVdo    =   $_POST['ucrs_dmoVdo'];
      $ucrs_fbgrp     =   $_POST['ucrs_fbgrp'];

      $query = "UPDATE courses SET course_key='$ucrs_key', course_desc='$ucrs_desc', course_dmo_vdo='$ucrs_dmoVdo', course_fbLink='$ucrs_fbgrp' WHERE course_id= '$crs_id'";

      $updateCRS = mysqli_query($connection, $query);

      if ( !$updateCRS ){
        echo '<div class="alert alert-warning" style="width: 600px;margin: 0 auto; margin-top: 100px;border-radius: 10px;">WRONG! Course Key Already Exist.</div>';
      }
      else{
        header("Location: courses.php");
      }
  }

  // Delete Course from Teacher
  if (isset($_POST['crsDEL'])) {

    $DEL_crs_id     =  $_POST['DEL_crs_id'];
    $DEL_course     =  $_POST['DEL_course'];
    $query = "SELECT course_key FROM courses WHERE course_id = '$DEL_crs_id'";
    $select_course_key = mysqli_query($connection, $query);

    while ( $row = mysqli_fetch_array($select_course_key) )
      {
          $course_key         = $row['course_key'];
      }
      if (empty($course_key)) {
          echo '<div class="alert alert-warning" style="width: 600px;margin: 0 auto; margin-top: 100px;border-radius: 10px;">WRONG! Key</div>';
      }
      else{
          if ($DEL_course == $course_key) {
              $del_crs_per = "DELETE FROM courses WHERE course_id = '$DEL_crs_id' AND course_key = '$DEL_course'";

              $delete_crs_for_tea_end = mysqli_query($connection, $del_crs_per);

              if ( !$delete_crs_for_tea_end ){
                  die("Query Failed ". mysqli_error($connection));
              }
              else{
                  header("Location: courses.php");
              }
          }
          else{
             echo '<div class="alert alert-warning" style="width: 600px;margin: 0 auto; margin-top: 100px;border-radius: 10px;">WRONG! Key</div>';
          }
      }

  }

if (isset($_POST['stu_complain'])) {
    $stuId_com      = $_POST['stuId_com'];
    $stuComCrsID    = $_POST['stuComCrsID'];
    $stuComCrsCode  = $_POST['stuComCrsCode'];
    $stuComCrsKey   = $_POST['stuComCrsKey'];
    $stu_comp       = $_POST['stu_comp'];

      $query = "INSERT INTO student_complain (s_id, course_ID, stu_com_crsCode, stu_com_crsKey, stu_com_complaim) VALUES ( '$stuId_com', '$stuComCrsID', '$stuComCrsCode', '$stuComCrsKey', '$stu_comp')";

        $insertComplain = mysqli_query($connection, $query);

        if ( !$insertComplain ){
          die("Query Failed ". mysqli_error($connection));
        }
        else{
          echo '<div class="alert alert-warning" style="width: 600px;margin: 0 auto; margin-top: 100px;border-radius: 10px;">Complain Send!</div>';
        }

}

ob_end_flush();
?>
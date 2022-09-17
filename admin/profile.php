<?php include "inc/header.php"; ?>
	<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="img/<?php 
			                      if( !$t_ppic ){
			                        echo 'title_logo.png';
			                      }
			                      else{
			                        echo $t_ppic;
			                      }
			                     ?>"  width="88" height="88" alt="User">
                            </div>
                            <div class="content-area">
                                <h3><?php echo $t_fname." ".$t_lname; ?></h3>
                                <p><?php echo $t_institute; ?></p>
                                <p><?php echo $sesson_email; ?></p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Courses</span>
                                    <span><?php echo $count_crs; ?></span>
                                </li>
                                <li>
                                    <span>Students</span>
                                    <span><?php echo $count_stu; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">library_books</i>
                                        Education
                                    </div>
                                    <div class="content">
                                        <?php echo $t_eduQua; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">perm_phone_msg</i>
                                        Contact
                                    </div>
                                    <div class="content">
                                        <?php echo $t_phone; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Address
                                    </div>
                                    <div class="content">
                                    	<h6>Present Address</h6>
                                        <?php echo $t_presentAdd; ?>
                                    </div>
                                    <div class="content">
                                    	<h6>Permanent Address</h6>
                                        <?php echo $t_hometwn; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">edit</i>
                                        Experience
                                    </div>
                                    <div class="content">
                                        <?php echo $t_experience; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">notes</i>
                                        About Me
                                    </div>
                                    <div class="content">
                                        <?php echo $t_bio; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    	
                                        <div class="panel panel-default panel-post">
                                        	<div class="panel-heading">
                                                <div >
			                            			<h2 class="col-teal">Information</h2>
			                            		</div>
                                            </div>
                                            <div class="panel-body">
			                            		<div style="padding-top: 5px;">
			                                    	<div class="col-md-4 col-sm-6 col-xs-12">
			                                    		<h4>Teacher's ID</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $t_id; ?></h5>
			                                		</div>
			                                		<div class="col-md-4 col-sm-6 col-xs-12">
			                                    		<h4>Security Key</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $t_security_key; ?></h5>
			                                		</div>
			                                		<div class="col-md-4 col-sm-6 col-xs-12">
			                                    		<h4>Teacher's NID</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $t_nid; ?></h5>
			                                		</div>
			                                	</div>
                                            </div>
                                            <hr>
                                            <div class="panel-body">
			                            		<div style="padding-top: 5px;">
			                                    	<div class="col-md-4 col-sm-6 col-xs-12">
			                                    		<h4>Date Of Birth</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $t_dob; ?></h5>
			                                		</div>
			                                		<div class="col-md-4 col-sm-6 col-xs-12">
			                                    		<h4>Gender</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $t_gender; ?></h5>
			                                		</div>
			                                		<div class="col-md-4 col-sm-6 col-xs-12">
			                                    		<h4>Profession</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $t_proffession; ?></h5>
			                                		</div>
			                                	</div>
                                            </div>
                                            <hr>
                                            <hr>
                                            <div class="panel-body">
			                            		<div style="padding-top: 5px;">
			                                		<div class="col-md-6 col-sm-6 col-xs-12">
			                                    		<h4>Security Question</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $t_SecurityQ; ?></h5>
			                                		</div>
			                                		<div class="col-md-6 col-sm-6 col-xs-12">
			                                    		<h4>Security Question Ans</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $t_SecurityA; ?></h5>
			                                		</div>
			                                	</div>
                                            </div>
                                            <hr>
                                            <div class="panel-body">
			                            		<div style="padding-top: 5px;">
			                                    	<div class="col-md-6 col-sm-6 col-xs-12">
			                                    		<h4>Demo Video Link <small>(Any Topic in your subject)</small> </h4>
			                                    		<a target="_blank" href="<?php echo $t_demoVdo; ?>">
				                                    	<h5 class="col-blue-grey">Click Here</h5></a>
			                                		</div>
			                                		<div class="col-md-6 col-sm-6 col-xs-12">
			                                    		<h4>Facebook Profile Link</h4>
			                                    		<a target="_blank" href="<?php echo $t_fblink; ?>">
				                                    	<h5 class="col-blue-grey"><span class="material-icons">facebook</span></h5></a>
			                                		</div>
			                                	</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="id" class="col-sm-2 control-label">Teacher's ID</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input style="background: #ddd;padding-left: 5px;" type="text" class="form-control" id="id" name="t_up_id" value="<?php echo $t_id; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="FirstName" name="t_up_fnam" value="<?php echo $t_fname; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="LastName" name="t_up_lnam"  value="<?php echo $t_lname; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_pic" class="col-sm-2 control-label">Profile Photo</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="file" name="t_up_pp" id="Tea_pic" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_skey" class="col-sm-2 control-label">Security Key</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" name="t_up_skey" id="Tea_skey" value="<?php echo $t_security_key; ?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_nid" class="col-sm-2 control-label">NID</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" name="t_up_nid" placeholder="National ID card Number" id="Tea_nid" value="<?php echo $t_nid; ?>"  class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_dob" class="col-sm-2 control-label">Date of Birth</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" name="t_up_dob" placeholder="DOB as Text" id="Tea_dob" value="<?php echo $t_dob; ?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_prof" class="col-sm-2 control-label">Profession</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" name="t_up_prof" id="Tea_prof" placeholder="Student/Teacher/Others" value="<?php echo $t_proffession; ?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Gender</label>
                                                <div class="col-sm-10">
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="t_up_gndr" value="Male" checked>
                                                        <span> Male </span> 
                                                    </label>
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="t_up_gndr" value="Female">
                                                        <span>Female </span> 
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_ins" class="col-sm-2 control-label">Institute</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" name="t_up_ins" id="Tea_ins" placeholder="Current Working Ins. or University(For Student)" value="<?php echo $t_institute;?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_bio" class="col-sm-2 control-label">Bio</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" id="Tea_bio" name="t_up_bio" rows="3" placeholder="Write Short Description About You." ><?php echo $t_bio;?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_phn" class="col-sm-2 control-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" name="t_up_phn" id="Tea_phn" value="<?php echo $t_phone; ?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_edu" class="col-sm-2 control-label">Education</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" name="t_up_edu" id="Tea_edu" value="<?php echo $t_eduQua; ?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_exp" class="col-sm-2 control-label">Experience</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" id="Tea_exp" name="t_up_exp" rows="3" placeholder="Update your experience area, Add more.(If you have)"><?php echo $t_experience; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_Hadd" class="col-sm-2 control-label">Home Town</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" id="Tea_Hadd" name="t_up_Hadd" rows="3" placeholder="Permanent Address"><?php echo $t_hometwn; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_Padd" class="col-sm-2 control-label">Present Address</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" id="Tea_Hadd" name="t_up_Padd"  rows="3" placeholder="Current Address"><?php echo $t_presentAdd; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_dmoVdo" class="col-sm-2 control-label">Demo Video Link</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" name="t_up_dmoVdo" placeholder="Input your video link. (Any Topic in your subject)" id="Tea_dmoVdo" value="<?php echo $t_demoVdo; ?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_fblink" class="col-sm-2 control-label">Fb Profile Link</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" name="t_up_fblink" id="Tea_fblink" value="<?php echo $t_fblink; ?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" name="t_update_info" class="btn btn-danger">UPDATE</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="text-right">
                                            <div class="">
                                                <h5 ><a class="col-pink" href="" data-toggle="modal" data-target="#deleteProfile">Delete Your Profile</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form  class="form-horizontal" method="POST">
                                            <div>
                                                <input type="text" class="form-control sr-only" id="OldPassword" name="t_pass_id" value="<?php echo $t_id; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="OldPassword" name="t_OldPassword" placeholder="Old Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="t_NewPassword" placeholder="New Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="t_NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" name="t_update_pass" class="btn btn-danger">UPDATE PASSWORD</button>
                                                </div>
                                            </div>

<?php 

    if (isset($_POST['t_update_pass'])) {
        $t_pass_id              = $_POST['t_pass_id'];
        $current_pass           = $_SESSION['t_password'];
        $t_OldPassword          = sha1($_POST['t_OldPassword']);
        $t_NewPassword          = sha1($_POST['t_NewPassword']);
        $t_NewPasswordConfirm   = sha1($_POST['t_NewPasswordConfirm']);
        if (!empty($t_OldPassword) || !empty($t_NewPassword) || !empty($t_NewPasswordConfirm)) {
        
            if ($current_pass == $t_OldPassword) {
                if ($t_NewPassword == $t_NewPasswordConfirm) {
                    $query = "UPDATE teachers SET t_password='$t_NewPassword' WHERE t_id= '$t_pass_id'";

                    $updateTeaPass = mysqli_query($connection, $query);

                    if ( !$updateTeaPass ){
                      die ("Query Failed. " . mysqli_error($connection));
                    }
                    else{
                      echo '<div class="alert alert-success" role="alert">
                          <strong>Successfully! Update your Password.</strong>
                        </div>';
                    }
                }
                else{
                    echo '<div class="alert alert-danger" role="alert">
                          <strong>Wrong! Do not match new Password.</strong>
                        </div>';
                }
            }
            else{
                echo '<div class="alert alert-danger" role="alert">
                          <strong>Wrong! Old Password is Incorrect.</strong>
                        </div>';
            }
        }
        else{
            echo '<div class="alert alert-danger" role="alert">
                          <strong>Error! You can not submit Empty field.</strong>
                        </div>';
        }
    }

?>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    $thisTeacCourse = "SELECT * FROM courses WHERE t_id = '$teach_sea_id'";
    $checkTea = mysqli_query($connection, $thisTeacCourse);
    $check = 0;
    while ($row = mysqli_fetch_array($checkTea) ) {
        $t_id             = $row['t_id'];
        $check = 9999;
    }


    if ($check == 9999) { ?>

        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="deleteProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalCenterTitle">You Cannot Delete Your Profile. Cause You have Published Course/s.</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center><h2 class="text-danger"><strong>SORRY</strong></h2></center>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="col-pink">If you want to<b> DELETE </b> your profile, First you have to Finish or Delete All Courses. Then You can Delete Your Profile.</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php }
    else{ ?>

        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="deleteProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalCenterTitle">Are you sure, you want to DELETE Your Profile?</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <div class="form-row">
                    <div class="col-md-2">
                      
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="delProId" class="form-control sr-only" readonly placeholder="Enter key Here" required value="<?php echo $teach_sea_id; ?>">
                      <input type="text" name="delProPass" class="form-control" placeholder="Enter Password" >
                    </div>
                    <div class="col-md-2 text-right">
                      <input type="submit" required name="DelPro" value="DELETE " class="btn btn-danger">
                    </div>
                    <div class="col-md-2">
                      
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="col-pink">If you<b> DELETE </b> your Profile once, You cannot access or Earn from this platform.</p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 

    <?php }


?>

<?php

    if (isset($_POST['DelPro'])) {
        $delProId   = $_POST['delProId'];
        $delProPass = $_POST['delProPass'];
        $hashPas = sha1($delProPass);

        if ($delProId == $teach_sea_id && $t_password == $hashPas) {
            $del_profile = "DELETE FROM teachers WHERE t_id = '$delProId' AND t_password = '$hashPas'";

           $del_tea_profile = mysqli_query($connection, $del_profile);

            if ( !$del_tea_profile ){
               die("Query Failed ". mysqli_error($connection));
            }
            else{
              header("Location: inc/logout.php");
            }
        }
        else{
            echo '<div class="alert alert-danger" style="margin-left:375px;">Wrong Password.</div>';
        }

    }


?>
    

<?php include "inc/footer.php"; ?>
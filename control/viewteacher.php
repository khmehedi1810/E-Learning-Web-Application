<?php include "inc/header.php" ?>

<?php 
if (isset($_GET['view_tea'])) {
	$view_tea = $_GET['view_tea'];

    $query = "SELECT * FROM teachers WHERE t_id = '$view_tea'";
    $select_teacher = mysqli_query($connection, $query);
    while ( $row = mysqli_fetch_assoc($select_teacher) )
    {
        $t_id         = $row['t_id'];
        $t_fname      = $row['t_fname'];
        $t_lname      = $row['t_lname'];
        $t_email      = $row['t_email'];
        $t_phone      = $row['t_phone'];
        $t_ppic       = $row['t_ppic'];
        $t_nid        = $row['t_nid'];
        $t_dob        = $row['t_dob'];
        $t_presentAdd = $row['t_presentAdd'];
        $t_demoVdo    = $row['t_demoVdo'];
        $t_gender     = $row['t_gender'];
        $t_eduQua     = $row['t_eduQua'];
        $t_proffession= $row['t_proffession'];
        $t_institute  = $row['t_institute'];
        $t_fblink     = $row['t_fblink'];
        $t_permission = $row['t_permission'];
        $t_experience = $row['t_experience'];
        $t_SecurityQ  = $row['t_SecurityQ'];
        $t_SecurityA  = $row['t_SecurityA'];
    }

}


?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Teachers Details</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Teacher</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Teacher</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
            </div>
        </div>
    </div>
    <?php 
        if (empty($view_tea)) {
            echo '<div class="alert alert-warning mb-5" style="width: 600px;margin: 0 auto; margin-top: 60px;border-radius: 10px;">No! Teacher Selected</div>';
        }
        else{
    ?>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3">
                <!-- Column -->
                <div class="card">
                    <img class="card-img-top" src="assets/images/background/profile-bg.jpg"
                        alt="Card image cap">
                    <div class="card-body little-profile text-center">
                        <div class="pro-img">
                            <img src="../admin/img/<?php 
                              if( !$t_ppic ){
                                echo 'title_logo.png';
                              }
                              else{
                                echo $t_ppic;
                              }
                             ?>"  alt="User">
                           
                        </div>
                        <h3 class="mb-0"><?php echo $t_fname.' '.$t_lname ;?></h3>
                        <p><a href="mailto:"><?php echo $t_email; ?></a></p>
                        <p class="p-0s">Profile Status:</p>
                            <?php 
                            	if ($t_permission == 'YES') {
                            		echo '<a href="javascript:void(0)"
                            class="mt-2 waves-effect waves-dark btn btn-success btn-sm btn-rounded">ACTIVE</a>';
                            	}
                            	else{
                            		echo '<a href="javascript:void(0)"
                            class="mt-2 waves-effect waves-dark btn btn-danger btn-sm btn-rounded">DEACTIVATE</a>';
                            	}
                            ?>
                            
                    </div>
                </div>
                <div class="card">
                    <div class="card-body bg-info">
                        <h4 class="text-white card-title">Update Status</h4>
                    </div>
                    <div class="card-body">
                        <div class="message-box contact-box">
                            <div class="message-widget contact-widget">
                                <?php 
                                    if ($t_permission == 'YES') { ?>
                                        <form method="POST" class="form-horizontal form-material mx-2">
                                            
                                             <div class="form-group">
                                                <div class="col-sm-12 text-center">
                                                    <input type="submit" name="up_deactive" value="Deactivate" class="btn btn-danger text-white">
                                                </div>
                                            </div>
                                        </form>
                                    <?php }
                                    else{ ?>

                                        <form method="POST" class="form-horizontal form-material mx-2">
                                           
                                             <div class="form-group">
                                                <div class="col-sm-12 text-center">
                                                    <input type="submit" name="up_active" value="Activate" class="btn btn-success text-white">
                                                </div>
                                            </div>
                                        </form>

                                   <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body bg-danger text-center">
                        <h4 class="text-white card-title">DELETE ACCOUNT</h4>
                        <a href="" class="text-warning" data-toggle="modal" data-target="#deleTeaMod">Delete this Teacher</a>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <div class="col-lg-8 col-xlg-9">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile"
                                role="tab">Profile</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings"
                                role="tab">Settings</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!--second tab-->
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_fname." ".$t_lname; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Teacher ID</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_id; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_phone; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_email; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Institute</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_institute; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Gender</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_gender; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Education</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_eduQua; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Profession</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_proffession; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>NID</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_nid; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>DOB</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_dob; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Address</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_presentAdd; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Experience</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_experience; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 b-r"> <strong>Security Ques</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_SecurityQ; ?></p>
                                    </div>
                                    <div class="col-md-6 col-xs-12"> <strong>Ans</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $t_SecurityA; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class=""> <strong>Demo Video Link</strong>
                                        <br>
                                        <a href="<?php echo $t_demoVdo; ?>" target="_blank" class="">Click Here</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class=""> <strong>Your Facebook Profile link</strong>
                                        <br>
                                        <a href="<?php echo $t_fblink; ?>" target="_blank" class="">Facebook Profile</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="POST">
                                    
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Update Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="<?php echo $t_email; ?>" 
                                                class="form-control form-control-line ps-0" name="upTeaemail"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success text-white" name="Update_Email">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
<?php } ?>
<!-- Delete Student Modal-->
  <div class="modal fade" id="deleTeaMod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you SURE?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">For any kinds of Irrelevant work, You can Delete any Teacher.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="POST">
                <input type="submit" class="btn btn-danger" name="delTea" value="DELETE">
            </form>
        </div>
      </div>
    </div>
  </div>

<?php 
    // De-activate profile
    if (isset($_POST['up_deactive'])) {

        $query = "UPDATE teachers SET t_permission ='NO' WHERE t_id = '$t_id'";

        $update_ac_status = mysqli_query($connection, $query);

        if ( !$update_ac_status ){
          die ("Query Failed. " . mysqli_error($connection));
        }
        else{
          header("Location: submitted-profiles.php");
        }
    }

    // Activate Profile
    if (isset($_POST['up_active'])) {

        $query = "UPDATE teachers SET t_permission ='YES' WHERE t_id = '$t_id'";

        $update_ac_status = mysqli_query($connection, $query);

        if ( !$update_ac_status ){
          die ("Query Failed. " . mysqli_error($connection));
        }
        else{
          header("Location: teachers.php");
        }

    }

    // Update teacher's email
    if (isset($_POST['Update_Email'])) {
        $upTeaemail     = $_POST['upTeaemail'];
        $query = "UPDATE teachers SET t_email ='$upTeaemail' WHERE t_id = '$t_id'";

        $upEmailAdd = mysqli_query($connection, $query);

        if ( !$upEmailAdd ){
          die ("Query Failed. " . mysqli_error($connection));
        }
        else{
          header("Location: dashboard.php");
        }

    }

    if (isset($_POST['delTea'])) {
        $query = "DELETE FROM teachers WHERE t_id ='$t_id'";

            $delete_teacherACC = mysqli_query($connection, $query);

            if ( !$delete_teacherACC ){
                die("Query Failed ". mysqli_error($connection));
            }
            else{
                header("Location: submitted-profiles.php");
            }
    }


?>


<?php include "inc/footer.php" ?>

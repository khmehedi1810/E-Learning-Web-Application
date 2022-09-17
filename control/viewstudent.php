<?php include "inc/header.php" ?>

<?php 
if (isset($_GET['view_stu'])) {
    $view_stu = $_GET['view_stu'];

    $query = "SELECT * FROM students WHERE s_id = '$view_stu'";
    $select_students = mysqli_query($connection, $query);
    while ( $row = mysqli_fetch_assoc($select_students) )
    {
        $s_id           = $row['s_id'];
        $s_fname        = $row['s_fname'];
        $s_lname        = $row['s_lname'];
        $s_email        = $row['s_email'];
        $s_phone        = $row['s_phone'];
        $s_gender       = $row['s_gender'];
        $s_institute    = $row['s_institute'];
        $s_securityQ    = $row['s_securityQ'];
        $s_securityA    = $row['s_securityA'];
        $s_pp           = $row['s_pp'];
        $s_adress       = $row['s_adress'];
        $s_gardian      = $row['s_gardian'];
        $s_gardianPhone = $row['s_gardianPhone'];
        $s_fbProfile    = $row['s_fbProfile'];
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
                <h3 class="page-title mb-0 p-0">Students Details</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Student</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
            </div>
        </div>
    </div>
    <?php 
        if (empty($view_stu)) {
            echo '<div class="alert alert-warning mb-5" style="width: 600px;margin: 0 auto; margin-top: 60px;border-radius: 10px;">No! Student Selected</div>';
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
                            <img src="../me/img/<?php 
                              if( !$s_pp ){
                                echo 'title_logo.png';
                              }
                              else{
                                echo $s_pp;
                              }
                             ?>"  alt="User">
                        </div>
                        <h3 class="mb-0"><?php echo $s_fname.' '.$s_lname ;?></h3>
                        <p><a href="mailto:"><?php echo $s_email; ?></a></p>
                        <p><?php echo $s_institute; ?></p>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-body bg-danger text-center">
                        <h4 class="text-white card-title">DELETE ACCOUNT</h4>
                        <a href="" class="text-warning" data-toggle="modal" data-target="#deleStuMod">Delete this Student</a>
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
                                        <p class="text-muted"><?php echo $s_fname." ".$s_lname; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Student ID</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $s_id; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $s_phone; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $s_email; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Institute</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $s_institute; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Gender</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $s_gender; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Gurdian</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $s_gardian; ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Gurdian Phone</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $s_gardianPhone; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 b-r"> <strong>Security Ques</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $s_securityQ; ?></p>
                                    </div>
                                    <div class="col-md-6 col-xs-12"> <strong>Ans</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $s_securityA; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class=""> <strong>Facebook Profile link</strong>
                                        <br>
                                        <a href="<?php echo $s_fbProfile; ?>" target="_blank" class="">Facebook Profile</a>
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
                                            <input type="email" required value="<?php echo $s_email; ?>" 
                                                class="form-control form-control-line ps-0" name="conUpStuem"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Update Phone</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $s_phone; ?>" 
                                                class="form-control form-control-line ps-0" name="conUpStuphn"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success text-white" name="Update_s_con">
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
  <div class="modal fade" id="deleStuMod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you SURE?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">For any kinds of Irrelevant work, You can Delete any Student.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="POST">
                <input type="submit" class="btn btn-danger" name="delSTU" value="DELETE">
            </form>
        </div>
      </div>
    </div>
  </div>


<?php 
  
    // Update Stident's contact Info
    if (isset($_POST['Update_s_con'])) {
        $conUpStuem      = $_POST['conUpStuem'];
        $conUpStuphn     = $_POST['conUpStuphn'];
        $query = "UPDATE students SET s_email ='$conUpStuem', s_phone ='$conUpStuphn' WHERE s_id = '$s_id'";

        $conup_stuInfo = mysqli_query($connection, $query);

        if ( !$conup_stuInfo ){
          die ("Query Failed. " . mysqli_error($connection));
        }
        else{
          header("Location: students.php");
        }

    }

    if (isset($_POST['delSTU'])) {
        $query = "DELETE FROM students WHERE s_id='$s_id'";

            $delete_studentAcc = mysqli_query($connection, $query);

            if ( !$delete_studentAcc ){
                die("Query Failed ". mysqli_error($connection));
            }
            else{
                header("Location: students.php");
            }
    }


?>


<?php include "inc/footer.php" ?>

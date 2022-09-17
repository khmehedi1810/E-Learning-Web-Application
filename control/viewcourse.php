<?php include "inc/header.php" ?>


<?php 
if (isset($_GET['view_crs'])) {
    $view_crs = $_GET['view_crs'];

    $query = "SELECT DISTINCT * FROM courses WHERE course_id = '$view_crs'";
    $select_det_crs = mysqli_query($connection, $query);
    while ( $row = mysqli_fetch_array($select_det_crs) )
    {
        $course_id          = $row['course_id'];
        $course_code        = $row['course_code'];
        $course_key         = $row['course_key'];
        $course_desc        = $row['course_desc'];
        $course_dmo_vdo     = $row['course_dmo_vdo'];
        $course_fbLink      = $row['course_fbLink'];
        $t_id               = $row['t_id'];
    }

}
    $teacher = "SELECT * FROM teachers WHERE t_id = '$t_id'";
    $select_teacher = mysqli_query($connection, $teacher);
    while ( $row = mysqli_fetch_assoc($select_teacher) )
    {
        $t_id         = $row['t_id'];
        $t_fname      = $row['t_fname'];
        $t_lname      = $row['t_lname'];
        $t_email      = $row['t_email'];
        $t_phone      = $row['t_phone'];
    }

?>



<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Course Details</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
            </div>
        </div>
    </div>
    <?php 
        if (empty($view_crs)) {
            echo '<div class="alert alert-warning mb-5" style="width: 600px;margin: 0 auto; margin-top: 60px;border-radius: 10px;">No! Course Selected</div>';
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
                        <!-- <div class="pro-img"><img src="../me/img/<?php //echo $s_pp; ?>" alt="user"></div> -->
                        <h3>Course Code:</h3>
                        <h3 class="mb-2"> <strong><?php echo $course_code;?></strong></h3>
                        <hr>
                        <p class="mb-0">Course Key:</p>
                        <p> <strong><?php echo $course_key; ?></strong></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body bg-warning text-center">
                        <h4 class="text-white card-title">Teacher Info</h4>
                        <h3 class="mb-2"> 
                            <strong><?php echo $t_fname.' '.$t_lname;?></strong>
                            <small>(<?php echo $t_id; ?>)</small>
                        </h3>
                        <hr>
                        <p><a href="mailto:"><strong><?php echo $t_email; ?></strong></a> </p>
                        <p><a href="tel:"><strong><?php echo $t_phone; ?></strong></a> </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body bg-danger text-center">
                        <h4 class="text-white card-title">DELETE COURSE</h4>
                        <a href="" class="text-warning" data-toggle="modal" data-target="#delCourses">Delete this Course</a>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <div class="col-lg-8 col-xlg-9">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile"
                                role="tab">Corse Content</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings"
                                role="tab">Message Course Teacher</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!--second tab-->
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="" > <strong class="text-success">Description</strong><br>
                                        <br>
                                        <p><?php echo $course_desc; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class=""> <strong class="text-success">Course Orientation Video</strong>
                                        <br>
                                        <a href="<?php echo $course_dmo_vdo; ?>" target="_blank" class="">Course Demo Video</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class=""> <strong class="text-success">Facebook Profile link</strong>
                                        <br>
                                        <a href="<?php echo $course_fbLink; ?>" target="_blank" class="">Facebook Profile</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="POST">
                                    
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <textarea rows="6" required class="form-control form-control-line ps-0" placeholder="Write something to the course Teacher about this course." name="conToteacherMes"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" value="Send" class="btn btn-success text-white" name="teacMessage">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-xlg-12">
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Course Students</h4>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Student Name</th>
                                        <th class="border-top-0">Student ID</th>
                                        <th class="border-top-0">Student Email</th>
                                        <th class="border-top-0">Student Phone</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $query = "SELECT DISTINCT * FROM courses,assign,students WHERE courses.course_id = '$course_id' AND  assign.course_id = courses.course_id AND assign.s_id = students.s_id";
                                    $select_course = mysqli_query($connection, $query);
                                    $i = 0;
                                    while ( $row = mysqli_fetch_array($select_course) )
                                    {
                                        $s_id         = $row['s_id'];
                                        $s_fname      = $row['s_fname'];
                                        $s_lname      = $row['s_lname'];
                                        $s_email      = $row['s_email'];
                                        $s_phone      = $row['s_phone'];
                                        $i++;
                                        ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $s_fname.' '.$s_lname; ?></td>
                                                <td><?php echo $s_id; ?></td>
                                                <td><a href="mailto:"><?php echo $s_email; ?></a></td>
                                                <td><a href="tel:"><?php echo $s_phone; ?></a></td>
                                                <td> 
                                                    <form method="POST">
                                                        <input type="text" class="sr-only" name="s_del_id" value="<?php echo $s_id; ?>" >
                                                        <input type="submit" name="unroll" value="Unroll" class="btn btn-danger btn-sm">
                                                    </form> 
                                                </td>
                                            </tr>
                                <?php

                                    }
                                ?>
                                </tbody>
                            </table>
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
  <div class="modal fade" id="delCourses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you SURE?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Delete this course, If Teacher give you permission to remove it or If you found any kinds of teacher's fault.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="POST">
                <input type="submit" class="btn btn-danger" name="delCrs" value="DELETE">
            </form>
        </div>
      </div>
    </div>
  </div>


<?php

    if (isset($_POST['delCrs'])) {
        

        $query = "DELETE FROM courses WHERE course_id ='$course_id'";

            $delete_crs = mysqli_query($connection, $query);

            if ( !$delete_crs ){
                die("Query Failed ". mysqli_error($connection));
            }
            else{
                header("Location: courseenrole.php");
            }
    }
    if (isset($_POST['unroll'])) {
        $s_del_id   = $_POST['s_del_id'];
        $query = "DELETE FROM assign WHERE course_id ='$course_id' AND s_id ='$s_del_id' AND course_key ='$course_key'";

            $unrolUser = mysqli_query($connection, $query);

            if ( !$unrolUser ){
                die("Query Failed ". mysqli_error($connection));
            }
            else{
                header("Location: courseenrole.php");
            }
    }



?>

<?php

    if (isset($_POST['teacMessage'])) {
        $teamess    = $_POST['conToteacherMes'];
        if ( empty($teamess) )
        {
            echo '<div class="alert alert-warning" style="width: 600px;margin: 0 auto;margin-top: 40px;border-radius: 10px;">Please Fillup all field Correctly</div>';
        }
        else{

            $query = "INSERT INTO teachermsg (tMsg_msg, t_id) VALUES ( '$teamess', '$t_id' )";

            $sendTeaMSg = mysqli_query($connection, $query);

            if ( !$sendTeaMSg ){
                die("Query Failed ". mysqli_error($connection));
            }
            else{
                echo '<div class="alert alert-success">Message Successfully Send.</div>';
            }
          }

    }

?>










<?php include "inc/footer.php" ?>
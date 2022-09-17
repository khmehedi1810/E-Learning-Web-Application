<?php include "inc/header.php" ?>


<?php 

    if (isset($_GET['detail'])) {
        $ckey   = $_GET['detail'];

        $ful_crs = "SELECT * FROM courses,teachers WHERE course_key = '$ckey' AND courses.t_id = teachers.t_id";
        $select_detail_crs = mysqli_query($connection, $ful_crs);
        while ($row = mysqli_fetch_array($select_detail_crs) ) {
                $course_code    = $row['course_code'];
                $course_desc    = $row['course_desc'];
                $course_dmo_vdo = $row['course_dmo_vdo'];
                $course_fbLink  = $row['course_fbLink'];
                $t_id           = $row['t_id'];
                $t_fname        = $row['t_fname'];
                $t_lname        = $row['t_lname'];
                $t_email        = $row['t_email'];
                $t_phone        = $row['t_phone'];

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
                <h3 class="page-title mb-0 p-0">Course Details</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Full Course</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 text-right" >
                <button class="btn btn-warning" data-toggle="modal" data-target="#leaveClass">Unenroll Course</button>
            </div>
        </div>
    </div>

    <!-- Modal Leave COurse -->
    <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="leaveClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Leave From This Course.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <div class="form-row">
                    <div class="col-2">
                      
                    </div>
                    <div class="col-6">
                      <input type="text" name="leavestu_id" class="form-control sr-only" placeholder="Enter key Here" required value="<?php echo $_SESSION['s_id'];?>">
                      <input type="text" name="lev_course" class="form-control" placeholder="Enter key Here" >
                    </div>
                    <div class="col">
                      <input type="submit" name="leavecrs" value="LEAVE" class="btn btn-warning">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer text-center">
                <p class="modal-title" id="exampleModalCenterTitle"><span class="text-danger">Once you leave this course, you can not access the course content next time.</span></p>
              </div>
            </div>
          </div>
        </div>

    <div class="container-fluid error-row">
        <div class="row">
<?php 


if (isset($_POST['leavecrs'])) {
    $leavestu_id    = $_POST['leavestu_id'];
    $lev_course     = $_POST['lev_course'];

    if (empty($ckey)) {
        echo '<div class="alert alert-warning">Empty Course!</div>';
    }
    else{

        if ($lev_course == $ckey) {
            $query = "DELETE FROM assign WHERE s_id='$leavestu_id' AND course_key = '$lev_course'";

                $delete_assign_crs = mysqli_query($connection, $query);

                if ( !$delete_assign_crs ){
                    die("Query Failed ". mysqli_error($connection));
                }
                else{
                    header("Location: enrolecourses.php");
                }
        }
        else{
            echo '<div class="alert alert-warning">Wrong Course Key!</div>';
        }
    }

}

?>
        </div>
    </div>

    <div class="container-fluid full-course-det">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <?php 
            if (empty($ckey)) {
                echo '<div class="alert alert-warning mb-5" style="width: 600px;margin: 0 auto; margin-top: 100px;border-radius: 10px;">No! Course Selected</div>';
            }
            else{
        ?>
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Course Code: <span class="ful_crs_info text-info"> <?php echo $course_code; ?></span></h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Teacher: <span class="ful_crs_info text-info"><?php echo $t_fname.' '.$t_lname; ?> </span><span><small>(<?php echo $t_id; ?>)</small></span>
                        </h4>
                        <h6>Email: <span> <a href="mailto:"><?php echo $t_email; ?></a> </span></h6>
                        <h6>Phone: <span> <a href="tel:"><?php echo $t_phone; ?></a> </span></h6>
                        <hr>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Course Overview: 
                        </h4>
                        <p><?php echo $course_desc; ?></p>
                        <hr>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Course Orientation Video Link: 
                        </h4>
                        <p><a href="<?php echo $course_dmo_vdo; ?>" target="_blank"><?php echo $course_dmo_vdo; ?></a></p>
                        <hr>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Course Secret Group Link: 
                        </h4>
                        <p><a href="<?php echo $course_fbLink; ?>" target="_blank"><?php echo $course_fbLink; ?></a></p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
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

</div>

<?php include "inc/footer.php" ?>

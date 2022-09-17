<?php include "inc/header.php" ?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Courses</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 text-right" >
                <button class="btn btn-warning" data-toggle="modal" data-target="#joinClass">Join Course</button>
            </div>
        </div>
    </div>

    <!-- Modal Join COurse -->
    <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="joinClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Enroll in your favorite teacher's course.</h5>
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
                      <input type="text" name="student_id" class="form-control sr-only" placeholder="Enter key Here" required value="<?php echo $_SESSION['s_id'];?>">
                      <input type="text" name="join_course" class="form-control" placeholder="Enter key Here" >
                    </div>
                    <div class="col">
                      <input type="submit" name="join" value="JOIN" class="btn btn-warning">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer text-center">
                <p class="modal-title" id="exampleModalCenterTitle">Bring course key from your teacher.</p>
              </div>
            </div>
          </div>
        </div>

    <div class="container-fluid error-row">
        <div class="row">
<?php 
if (isset($_POST['join'])) {
    $student_id     = $_POST['student_id'];
    $join_course    = $_POST['join_course'];
    if (empty($join_course) || empty($student_id)) {
    
        echo '<div class="alert alert-warning ">Please Fillup all the fields Correctly</div>';
    }
    else{
        $key_sel = "SELECT course_id FROM courses WHERE course_key = '$join_course' ";
        $select_key = mysqli_query($connection, $key_sel);
        while ($row = mysqli_fetch_array($select_key) ) {
                $course_id   = $row['course_id'];

        }
        if (empty($course_id)) {
            echo '<div class="alert alert-warning">Wrong Course Key!</div>';
        }
        else{
            $checkexist_info = "SELECT * FROM assign";
            $selcCheckInfo = mysqli_query($connection, $checkexist_info);
            while ($row = mysqli_fetch_array($selcCheckInfo) ) {
                    $checkCrsKey    = $row['course_key'];
                    $checkSId       = $row['s_id'];

            }
            if($checkCrsKey == $join_course && $checkSId == $student_id){
                echo '<div class="alert alert-warning">You have already join this COURSE!</div>';
            }
            else{
                $join_corse = "INSERT INTO assign (course_id, course_key, s_id) VALUES ( '$course_id', '$join_course', '$student_id' )";

                $join_student = mysqli_query($connection, $join_corse);

                if ( !$join_student ){
                    die("Query Failed ". mysqli_error($connection));
                }
                else{
                    header("Location: enrolecourses.php");
                }
            }
        }
    }


}
?>
        </div>
    </div>


    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Course List</h4>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Course Code</th>
                                        <th class="border-top-0">Course Key</th>
                                        <th class="border-top-0">Teacher ID</th>
                                        <th class="border-top-0">Teacher Name</th>
                                        <th class="border-top-0">Full Course</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                  $stu = $_SESSION['s_id'];
                                    $query = "SELECT DISTINCT * FROM courses,assign,teachers WHERE assign.s_id = '$stu' AND  courses.course_key=assign.course_key AND courses.t_id = teachers.t_id";
                                    $select_course = mysqli_query($connection, $query);
                                    $i = 0;
                                    while ( $row = mysqli_fetch_array($select_course) )
                                    {
                                        $course_id          = $row['course_id'];
                                        $course_key         = $row['course_key'];
                                        $course_code        = $row['course_code'];
                                        $t_id               = $row['t_id'];
                                        $t_fname            = $row['t_fname'];
                                        $t_lname            = $row['t_lname'];
                                        $i++;
                                        ?>
                                        <tr>
                                          <th scope="row"><?php echo $i; ?></th>
                                          <td><?php echo $course_code; ?></td>
                                          <td><?php echo $course_key; ?></td>
                                          <td><?php echo $t_id; ?></td>
                                          <td><?php echo $t_fname." ".$t_lname; ?></td>
                                          <td>
                                            <div class="btn-group">
                                                <a href="fullcourse.php?detail=<?php echo $course_key; ?>" class="btn btn-warning">Visit</a>
                                            </div>
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

</div>

<?php include "inc/footer.php" ?>
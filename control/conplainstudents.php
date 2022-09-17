<?php include "inc/header.php" ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Students</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Complains</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
            </div>
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
                        <h4 class="card-title">Student's Complain Table</h4>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Student ID</th>
                                        <th class="border-top-0">Course Code</th>
                                        <th class="border-top-0">Complain</th>
                                        <th class="border-top-0">View Course/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $selStuCom = "SELECT * FROM student_complain";
                                        $selectStuCom = mysqli_query($connection, $selStuCom);
                                        $i = 0;
                                        while ( $row = mysqli_fetch_assoc($selectStuCom) )
                                        {
                                            $stu_com_id         = $row['stu_com_id'];
                                            $s_id               = $row['s_id'];
                                            $course_id          = $row['course_id'];
                                            $stu_com_crsCode    = $row['stu_com_crsCode'];
                                            $stu_com_crsKey     = $row['stu_com_crsKey'];
                                            $stu_com_complaim   = $row['stu_com_complaim'];
                                            $i++;
                                            ?>
                                            <tr>
                                              <th scope="row"><?php echo $i; ?></th>
                                              <td><?php echo $s_id; ?></td>
                                              <!-- <td><?php echo $course_id; ?></td> -->
                                              <td><?php echo $stu_com_crsCode; ?></td>
                                              <td><?php echo $stu_com_complaim; ?></td>
                                              <td>
                                                <div class="btn-group">
                                                    <a href="viewcourse.php?view_crs=<?php echo $course_id; ?>" class="btn btn-warning">View</a>
                                                     <a href="conplainstudents.php?del_com=<?php echo $stu_com_id; ?>" class="btn btn-info">Delete</a>
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


<?php
if (isset($_GET['del_com'])) {
    $del_com_id    = $_GET['del_com'];
    $delStuCom = "DELETE FROM student_complain WHERE stu_com_id = '$del_com_id'";

      $delComStu = mysqli_query($connection, $delStuCom);

      if ( !$delComStu ){
          die("Query Failed ". mysqli_error($connection));
      }
      else{
          header("Location: conplainstudents.php");
      }
}


?>

<?php include "inc/footer.php" ?>
<?php include "inc/header.php" ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Teachers</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Teachers</li>
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
                        <h4 class="card-title">Teacher's Complain Table</h4>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Teacher ID</th>
                                        <th class="border-top-0">Review Message</th>
                                        <th class="border-top-0">View Profle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $selTeaRV = "SELECT * FROM reviewteacher";
                                        $selectTeaReview = mysqli_query($connection, $selTeaRV);
                                        $i = 0;
                                        while ( $row = mysqli_fetch_assoc($selectTeaReview) )
                                        {
                                            $rvT_id        = $row['rvT_id'];
                                            $rv_mesg       = $row['rv_mesg'];
                                            $t_id          = $row['t_id'];
                                            $i++;
                                            ?>
                                            <tr>
                                              <th scope="row"><?php echo $i; ?></th>
                                              <td><?php echo $t_id; ?></td>
                                              <!-- <td><?php echo $course_id; ?></td> -->
                                              <td><?php echo $rv_mesg; ?></td>
                                              <td>
                                                <div class="btn-group">
                                                    <a href="viewteacher.php?view_tea=<?php echo $t_id; ?>" class="btn btn-warning">View</a>
                                                     <a href="reviewteacher.php?del_rv=<?php echo $rvT_id; ?>" class="btn btn-info">Delete</a>
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
if (isset($_GET['del_rv'])) {
    $delTeaRv    = $_GET['del_rv'];
    $delRvTea = "DELETE FROM reviewteacher WHERE rvT_id = '$delTeaRv'";

      $delRVSingleTeacher = mysqli_query($connection, $delRvTea);

      if ( !$delRVSingleTeacher ){
          die("Query Failed ". mysqli_error($connection));
      }
      else{
          header("Location: reviewteacher.php");
      }
}


?>
<?php include "inc/footer.php" ?>
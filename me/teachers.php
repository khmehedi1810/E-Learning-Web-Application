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
                        <h4 class="card-title">Teacher List</h4>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Teacher Name</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Phone</th>
                                        <th class="border-top-0">Qualification</th>
                                        <th class="border-top-0">Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                  $stu = $_SESSION['s_id'];
                                    $query = "SELECT DISTINCT * FROM courses,assign,teachers WHERE assign.s_id = '$stu' AND  courses.course_key=assign.course_key AND courses.t_id = teachers.t_id group by courses.t_id";
                                    $select_course = mysqli_query($connection, $query);
                                    $i = 0;
                                    while ( $row = mysqli_fetch_array($select_course) )
                                    {
                                        $course_key         = $row['course_key'];
                                        $course_code        = $row['course_code'];
                                        $t_id               = $row['t_id'];
                                        $t_fname            = $row['t_fname'];
                                        $t_lname            = $row['t_lname'];
                                        $t_email            = $row['t_email'];
                                        $t_phone            = $row['t_phone'];
                                        $t_eduQua           = $row['t_eduQua'];
                                        $i++;
                                        ?>
                                        <tr>
                                          <th scope="row"><?php echo $i; ?></th>
                                          <td><?php echo $t_fname." ".$t_lname; ?></td>
                                          <td><a href="mailto:"><?php echo $t_email; ?></a></td>
                                          <td><a href="tel:"><?php echo $t_phone; ?></a></td>
                                          <td><?php echo $t_eduQua; ?></td>
                                          <td><a href="../admin/teacherprofile.php?tprovisit=<?php echo $t_id; ?>" target="_blank" class="btn btn-warning">Visit</a></td>
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
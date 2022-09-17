<?php include "inc/header.php" ?>

<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">All Courses</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Active Courses</h4>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Course Code</th>
                                        <th class="border-top-0">Course Key</th>
                                        <th class="border-top-0">Teacher</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $queryCRS = "SELECT * FROM courses";
                                        $select_coueses = mysqli_query($connection, $queryCRS);
                                        $i = 0;
                                        while ( $row = mysqli_fetch_assoc($select_coueses) )
                                        {
                                            $course_id       = $row['course_id'];
                                            $course_code     = $row['course_code'];
                                            $course_key      = $row['course_key'];
                                            $t_id            = $row['t_id'];
                                            $i++;
                                            ?>
                                            <tr>
                                              <th scope="row"><?php echo $i; ?></th>
                                              <td><?php echo $course_code; ?></td>
                                              <td><?php echo $course_key; ?></td>
                                              <td><?php echo $t_id; ?></td>
                                              <td>
                                                <div class="btn-group">
                                                    <a href="viewcourse.php?view_crs=<?php echo $course_id; ?>" class="btn btn-warning">View</a>
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
    </div>


<?php include "inc/footer.php" ?>
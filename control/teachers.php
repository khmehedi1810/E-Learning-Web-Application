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
                        <h4 class="card-title">Active Teachers</h4>
                        <h6 class="card-subtitle">Those are out <code>ACTIVE</code> Teacher's. Who can publish courses.</h6>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Phone</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query = "SELECT * FROM teachers WHERE t_permission = 'YES'";
                                        $select_teacher = mysqli_query($connection, $query);
                                        $i = 0;
                                        while ( $row = mysqli_fetch_assoc($select_teacher) )
                                        {
                                            $t_id         = $row['t_id'];
                                            $t_fname      = $row['t_fname'];
                                            $t_lname      = $row['t_lname'];
                                            $t_email      = $row['t_email'];
                                            $t_phone      = $row['t_phone'];
                                            $i++;
                                            ?>
                                            <tr>
                                              <th scope="row"><?php echo $i; ?></th>
                                              <td><?php echo $t_id; ?></td>
                                              <td><?php echo $t_fname .' '.$t_lname; ?></td>
                                              <td><?php echo $t_email; ?></td>
                                              <td><?php echo $t_phone; ?></td>
                                              <td>
                                                <div class="btn-group">
                                                    <a href="viewteacher.php?view_tea=<?php echo $t_id; ?>" class="btn btn-warning">View</a>
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


<?php include "inc/footer.php" ?>
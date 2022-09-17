<?php include "inc/header.php" ?>

<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Complains</h3>
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
        <!-- Start Page Content -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Complain Box</h4>
                        <div class="table-responsive">
                            <table class="table user-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Subject</th>
                                        <th class="border-top-0">Complains</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query = "SELECT * FROM complain ORDER BY `id` DESC";
                                        $select_all_users = mysqli_query($connection, $query);
                                        $i = 0;
                                        while ( $row = mysqli_fetch_assoc($select_all_users) )
                                        {
                                            $id        = $row['id'];
                                            $subject   = $row['subject'];
                                            $message   = $row['message'];
                                            $i++;
                                            ?>
                                            <tr>
                                              <th scope="row"><?php echo $i; ?></th>
                                              <td><?php echo $subject; ?></td>
                                              <td><?php echo $message; ?></td>
                                              <td>
                                                <div class="btn-group">
                                                    <a href="report.php?delete=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
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
        <?php //delete_conplains(); 

            delete_complains();

        ?>
    </div>

       


<?php include "inc/footer.php" ?>
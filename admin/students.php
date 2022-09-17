<?php include "inc/header.php"; ?>

 	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>STUDENTS</h2>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All STUDENTS</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student Name</th>
                                            <th>Student ID</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Institute</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        <?php 

            $query = "SELECT DISTINCT * FROM courses,assign,students,teachers WHERE assign.course_id = courses.course_id AND assign.s_id = students.s_id AND courses.t_id = '$teach_sea_id' group by assign.s_id";
            $select_course = mysqli_query($connection, $query);
            $i = 0;
            while ( $row = mysqli_fetch_array($select_course) )
            {
                $s_id         = $row['s_id'];
                $s_fname      = $row['s_fname'];
                $s_lname      = $row['s_lname'];
                $s_email      = $row['s_email'];
                $s_phone      = $row['s_phone'];
                $s_institute  = $row['s_institute'];
                $i++;
                ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $s_fname.' '.$s_lname; ?></td>
                                            <td><?php echo $s_id; ?></td>
                                            <td><a href="mailto:"><?php echo $s_email; ?></a></td>
                                            <td><a href="tel:"><?php echo $s_phone; ?></a></td>
                                            <td><?php echo $s_institute; ?></td>
                                            
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
                <!-- #END# Task Info -->
            </div>
        </div>
    </section> 



<?php include "inc/footer.php"; ?>
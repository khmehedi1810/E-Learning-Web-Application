<?php include "inc/header.php"; ?>

 	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>COMMENTS</h2>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>All Comments</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Review Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $selTeaRV = "SELECT * FROM reviewteacher WHERE t_id = '$teach_sea_id'";
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
                                              <td><?php echo $rv_mesg; ?></td>
                                              <td>
                                                <div class="btn-group">
                                                     <a href="comments.php?del_rv=<?php echo $rvT_id; ?>" class="btn btn-info">Delete</a>
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
                <!-- #END# Task Info -->
            </div>
        </div>
    </section> 

<?php
if (isset($_GET['del_rv'])) {
    $delTeaRv    = $_GET['del_rv'];
    $delRvTea = "DELETE FROM reviewteacher WHERE rvT_id = '$delTeaRv'";

      $delRVSingleTeacher = mysqli_query($connection, $delRvTea);

      if ( !$delRVSingleTeacher ){
          die("Query Failed ". mysqli_error($connection));
      }
      else{
          header("Location: comments.php");
      }
}


?>

<?php include "inc/footer.php"; ?>
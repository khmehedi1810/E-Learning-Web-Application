<?php include "inc/header.php"; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Courses</h2>
            </div>

            <!-- Widgets -->
            <?php 
              
              if (empty($t_permission)) { ?>
                <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box bg-pink hover-expand-effect" style="cursor: pointer;margin-bottom: 5px;">
                          <div class="icon" style="cursor: pointer;">
                              <i class="material-icons">playlist_add_check</i>
                          </div>
                          <div class="content" style="cursor: pointer;">
                              <div class="text">Your Profile need to permission</div>
                              <h6 style="margin: 0;padding:0;">You cannot Add Course</h6>
                          </div>
                      </div>
                  </div>
                </div>

                
              <?php }
              else{
              if ($t_permission == 'YES') {
                
            ?>
            <div class="row clearfix">
            	<a href="" data-toggle="modal" data-target="#modalContactForm" disabled>
	                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	                    <div class="info-box bg-pink hover-expand-effect" style="cursor: pointer;margin-bottom: 5px;">
	                        <div class="icon" style="cursor: pointer;">
	                            <i class="material-icons">playlist_add_check</i>
	                        </div>
	                        <div class="content" style="cursor: pointer;">
	                            <div class="text">Publish Your Course</div>
                              <h4 style="margin: 0;padding:0;">Add New Course</h4>
	                        </div>
	                    </div>
	                </div>
	            </a>
            </div>

          <?php } 
            else{ ?>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect" style="cursor: pointer;margin-bottom: 5px;">
                        <div class="icon" style="cursor: pointer;">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content" style="cursor: pointer;">
                            <div class="text">Your Profile need to permission</div>
                            <h6 style="margin: 0;padding:0;">You cannot Add Course</h6>
                        </div>
                    </div>
                </div>
            </div>

            <?php }
          }

          ?>

            <div class="row clearfix course-list-sec">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Your Published Courses</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Course Code</th>
                                            <th>Course Key</th>
                                            <th>Teacher ID</th>
                                            <th>Full Course</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $teacher_sessonID = $_SESSION['t_id'];
                                        $query = "SELECT DISTINCT * FROM courses WHERE t_id = '$teacher_sessonID'";
                                        $select_course = mysqli_query($connection, $query);
                                        $i = 0;
                                        while ( $row = mysqli_fetch_array($select_course) )
                                        {
                                            $course_id          = $row['course_id'];
                                            $course_code        = $row['course_code'];
                                            $course_key         = $row['course_key'];
                                            $course_desc        = $row['course_desc'];
                                            $course_dmo_vdo     = $row['course_dmo_vdo'];
                                            $course_fbLink      = $row['course_fbLink'];
                                            $t_id               = $row['t_id'];
                                            $i++;
                                            ?>
                                            <tr>
                                              <th scope="row"><?php echo $i; ?></th>
                                              <td><?php echo $course_code; ?></td>
                                              <td><?php echo $course_key; ?></td>
                                              <td><?php echo $t_id; ?></td>
                                              <td>
                                                <div class="btn-group">
                                                    <a href="detailscourse.php?show=<?php echo $course_id; ?>" class="btn btn-warning">Visit</a>
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


<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Launch Your Course</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <select name="course_code" required class="code_select" >
                <option selected disabled>Please select Course Code</option>
                <option>CLS_6_BAN</option>
                <option>CLS_6_ENG</option>
                <option>CLS_6_MAT</option>
                <option>CLS_7_BAN</option>
                <option>CLS_7_ENG</option>
                <option>CLS_7_MAT</option>
                <option>CLS_8_BAN</option>
                <option>CLS_8_ENG</option>
                <option>CLS_8_MAT</option>
                <option>CLS_9_BAN</option>
                <option>CLS_9_ENG</option>
                <option>CLS_9_MAT</option>
                <option>CLS_11_BAN</option>
                <option>CLS_11_ENG</option>
                <option>CLS_11_MAT</option>
            </select>
          </div>
          <div class="select-learn">
            <small><a target="_blank" href="coursemanual.php">Learn More About Course Code</a></small>
          </div>

          <div class="md-form mb-5">
            <input type="text" name="course_key" required placeholder="Course Key" class="form-control validate">
          </div>

          <div class="md-form mb-5">
            <input type="text" name="t_id" readonly value="<?php echo $_SESSION['t_id']; ?>" class="form-control validate">
          </div>

          <div class="md-form mb-5">
            <input type="text" name="course_dmo_vdo" required placeholder="Course Demo Video LInk"  class="form-control validate">
          </div>

          <div class="md-form mb-5">
            <input type="text" name="course_fbLink" required placeholder="Hidden Facebook Link"  class="form-control validate">
          </div>

          <div class="md-form">
            <textarea type="text" required name="course_desc" placeholder="Description About This Course" class="md-textarea form-control" rows="4"></textarea>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center p-5">
          <input type="submit" name="create_course" value="Create" class="btn btn-unique btn-block btn-logo-col">
        </div>
        
      </form>

    </div>
  </div>
</div>
<!-- End Courses Add -->

<?php include "inc/footer.php"; ?>
<?php include "inc/header.php"; ?>

<?php 

	if (isset($_GET['show'])) {
		$courseID 	= $_GET['show'];
		$query = "SELECT DISTINCT * FROM courses WHERE course_id = '$courseID'";
            $select_det_crs = mysqli_query($connection, $query);
            while ( $row = mysqli_fetch_array($select_det_crs) )
            {
                $course_id          = $row['course_id'];
                $course_code        = $row['course_code'];
                $course_key         = $row['course_key'];
                $course_desc        = $row['course_desc'];
                $course_dmo_vdo     = $row['course_dmo_vdo'];
                $course_fbLink      = $row['course_fbLink'];
                $t_id               = $row['t_id'];
            }
	}


?>
<?php 
    if (empty($courseID)) {
        echo '<div class="alert alert-warning mb-5" style="width: 600px;margin: 0 auto; margin-top: 100px;border-radius: 10px;">No! Course Selected</div>';
    }
    else{
?>
	<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#CourseDET" aria-controls="home" role="tab" data-toggle="tab">Course Content</a></li>
                                    <li role="presentation"><a href="#upCourse" aria-controls="settings" role="tab" data-toggle="tab">Update Course Content</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="CourseDET">
                                    	
                                        <div class="panel panel-default panel-post">
                                        	<div class="panel-heading">
                                                <div >
			                            			<h2 class="col-teal">Course Details Here</h2>
			                            		</div>
                                            </div>
                                            <div class="panel-body">
			                            		<div style="padding-top: 5px;">
			                                    	<div class="col-md-4 col-sm-6 col-xs-12">
			                                    		<h4>Course ID</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $course_id; ?></h5>
			                                		</div>
			                                		<div class="col-md-4 col-sm-6 col-xs-12">
			                                    		<h4>Course Code</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $course_code; ?></h5>
			                                		</div>
			                                		<div class="col-md-4 col-sm-6 col-xs-12">
			                                    		<h4>Course Key</h4>
				                                    	<h5 class="col-blue-grey"><?php echo $course_key; ?></h5>
			                                		</div>
			                                	</div>
                                            </div>
                                            <hr>
                                            <div class="panel-body">
			                            		<div style="padding-top: 5px;">
			                                    	<div class="col-md-12">
			                                    		<h4>Course Overview <small>(Description)</small></h4>
				                                    	<h5 class="col-blue-grey"><?php echo $course_desc; ?></h5>
			                                		</div>
			                                	</div>
                                            </div>
                                            <hr>
                                            <div class="panel-body">
			                            		<div style="padding-top: 5px;">
			                                    	<div class="col-md-6 col-sm-6 col-xs-12">
			                                    		<h4>Course Orientation Video Link <small></small> </h4>
			                                    		<a target="_blank" href="<?php echo $course_dmo_vdo; ?>">
				                                    	<h5 class="col-blue-grey">Click Here</h5></a>
			                                		</div>
			                                		<div class="col-md-6 col-sm-6 col-xs-12">
			                                    		<h4>Hidden Fb Group Link: </h4>
			                                    		<a target="_blank" href="<?php echo $course_fbLink; ?>">
				                                    	<h5 class="col-blue-grey"><span class="material-icons">facebook</span></h5></a>
			                                		</div>
			                                	</div>
                                            </div>
                                            <hr>
                                            <div class="panel-body">
			                            		<div style="padding-top: 5px;">
			                                    	<div class="col-md-12">
			                                    		<h4>Enroll Students <small>(Of this course)</small></h4>
			                                    		<table class="table table-hover dashboard-task-infos">
						                                    <thead>
						                                        <tr>
						                                            <th>#</th>
						                                            <th>Student Name</th>
						                                            <th>Student ID</th>
						                                            <th>Email</th>
						                                            <th>Phone</th>
						                                            <th>Action</th>
						                                        </tr>
						                                    </thead>
						                                    <tbody>
						        <?php 
                                    $query = "SELECT DISTINCT * FROM courses,assign,students WHERE courses.course_id = '$courseID' AND  assign.course_id = courses.course_id AND assign.s_id = students.s_id";
                                    $select_course = mysqli_query($connection, $query);
                                    $i = 0;
                                    while ( $row = mysqli_fetch_array($select_course) )
                                    {
                                        $s_id         = $row['s_id'];
                                        $s_fname      = $row['s_fname'];
                                        $s_lname      = $row['s_lname'];
                                        $s_email      = $row['s_email'];
                                        $s_phone      = $row['s_phone'];
                                        $i++;
                                        ?>
						                                    	<tr>
						                                            <td><?php echo $i; ?></td>
						                                            <td><?php echo $s_fname.' '.$s_lname; ?></td>
						                                            <td><?php echo $s_id; ?></td>
						                                            <td><a href="mailto:"><?php echo $s_email; ?></a></td>
						                                            <td><a href="tel:"><?php echo $s_phone; ?></a></td>
						                                            <td> <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#complainSTU_crs" onclick="stuID(<?php echo $s_id; ?>,'<?php echo $s_fname; ?>','<?php echo $s_lname; ?>')">Manage</a> </td>
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
                                    <div role="tabpanel" class="tab-pane fade in" id="upCourse">
                                        <form class="form-horizontal" method="POST">
                                        	<!-- Not work this input -->
                                        	<div>
                                        		<input type="text" class="form-control sr-only" id="Course ID" name="crs_id" required value="<?php echo $course_id; ?>">
                                        	</div>
                                            <div class="form-group">
                                                <label for="CourseKey" class="col-sm-2 control-label">Course Key</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="CourseKey" required name="ucrs_key" value="<?php echo $course_key; ?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_bio" class="col-sm-2 control-label">Course Overview</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea required class="form-control" id="Tea_bio" name="ucrs_desc" rows="10" placeholder="Write Description or Overview About this course." ><?php echo $course_desc;?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_dmoVdo" class="col-sm-2 control-label">Orientation Video Link</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" required name="ucrs_dmoVdo" placeholder="Input your video link. (Any Topic in your subject)" id="Tea_dmoVdo" value="<?php echo $course_dmo_vdo; ?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Tea_fblink" class="col-sm-2 control-label">Hidden Fb Group Link</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" required name="ucrs_fbgrp" id="Tea_fblink" value="<?php echo $course_fbLink; ?>" class="form-control form-control-line ps-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" name="crs_update" class="btn btn-danger">UPDATE</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="text-right">
                                        	<div class="">
                                        		<h5 ><a class="col-pink" href="" data-toggle="modal" data-target="#deleteCRS">Delete This Course</a></h5>
                                        	</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

    <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="deleteCRS" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalCenterTitle">Are you sure, you want to DELETE this course?</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <div class="form-row">
                    <div class="col-md-2">
                      
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="DEL_crs_id" class="form-control sr-only" placeholder="Enter key Here" required readonly value="<?php echo $course_id; ?>">
                      <input type="text" required name="DEL_course" class="form-control" placeholder="Enter key Here" >
                    </div>
                    <div class="col-md-2 text-right">
                      <input type="submit" required name="crsDEL" value="DELETE " class="btn btn-danger">
                    </div>
                    <div class="col-md-2">
                      
                    </div>
                  </div><br>
                  <div class="row">
                  	<div class="col-md-12 text-center">
                  		<p class="col-pink">If you<b> DELETE </b> this is course before finish this course module and if students write a complaint against you. Authority will take action.</p>
                  	</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="complainSTU_crs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <script type="text/javascript">
                  function stuID(x,y,z){
                        document.getElementById("p1").value = x;
                        document.getElementById("stuid").innerHTML = x;
                        document.getElementById("idSTU1").innerHTML = y;
                        document.getElementById("idSTU2").innerHTML = z;
                  }
              </script>
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalCenterTitle">
                    You can write any kinds of complains against </h6>
                    <span class="student_infoInCom"> 
                        <span id="idSTU1"> </span>&nbsp;
                        <span id="idSTU2"> </span>
                        (<small id="stuid"> </small>)
                    </span>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <div class="form-row">
                    <div class="col-md-2">
                      
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="stuId_com" class="form-control sr-only" placeholder="Enter key Here" required readonly value="<?php echo  $stuid; ?>" id="p1" >
                      <input type="text" name="stuComCrsID" class="form-control sr-only" placeholder="Enter key Here" required readonly value="<?php echo  $course_id; ?>">
                      <input type="text" name="stuComCrsCode" class="form-control sr-only" placeholder="Enter key Here" required readonly value="<?php echo  $course_code; ?>">
                      <input type="text" name="stuComCrsKey" class="form-control sr-only" placeholder="Enter key Here" required readonly value="<?php echo  $course_key; ?>">
                      <textarea class="form-control" name="stu_comp" cols="32" placeholder="Write Complain Here" required></textarea>
                    </div>
                    <div class="col-md-2 text-right">
                      <input type="submit" required name="stu_complain" value="Send" class="btn btn-danger compainBTN">
                    </div>
                    <div class="col-md-2">
                      
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="col-pink">If your<b> COMPLAIN </b> will wrong against this student, Then you will get penalty by authority.</p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>



<?php include "inc/footer.php"; ?>
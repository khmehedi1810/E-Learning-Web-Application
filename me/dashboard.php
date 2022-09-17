<?php include "inc/header.php" ?>

<?php 
    $sesson_email = $_SESSION['s_email'];
    $query = "SELECT * FROM students WHERE s_email = '$sesson_email' ";

        $selectStu = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($selectStu) ) {
            
            $log_id           = $row['s_id'];
            $log_fnam         = $row['s_fname'];
            $log_lnam         = $row['s_lname'];
            $log_eamil        = $row['s_email'];
            $log_phone        = $row['s_phone'];
            $log_pass         = $row['s_password'];
            $log_gender       = $row['s_gender'];
            $log_ins          = $row['s_institute'];
            $log_securityQ    = $row['s_securityQ'];
            $log_securityA    = $row['s_securityA'];
            $log_pp           = $row['s_pp'];
            $log_add          = $row['s_adress'];
            $log_guardian     = $row['s_gardian'];
            $log_guardianPh   = $row['s_gardianPhone'];
            $log_fblink       = $row['s_fbProfile'];

        }

?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                    </div>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                
                <!-- Sales chart -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="assets/images/background/profile-bg.jpg"
                                alt="Card image cap">
                            <div class="card-body little-profile text-center">
                                <div class="pro-img"><img width="128" src="img/<?php 

                                  if( !$log_pp ){
                                    echo 'title_logo.png';
                                  }
                                  else{
                                    echo $log_pp;
                                  }


                                 ?>" alt="user"></div>
                                <h3 class="mb-0"><?php echo $log_fnam." ".$log_lnam; ?></h3>
                                <p><?php echo $_SESSION['s_email']; ?></p>
                                <div class="row text-center mt-3">
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <a href="enrolecourses.php" class="btn btn-primary btn-sm">Enroll Courses</a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        
                    </div>
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab " role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home"
                                        role="tab">TO DO List</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile"
                                        role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings"
                                        role="tab">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="header todoList">
                                            <div><h4>To Do List</h4></div>
                                            <div><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addToDostu">ADD</a></div>
                                        </div><br>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-hover dashboard-task-infos">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Work</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $todO = "SELECT * FROM todolist WHERE todo_owner = '$log_id' ORDER BY todo_id DESC";
                                                        $selectTodo = mysqli_query($connection, $todO);
                                                        $serTodo=0;
                                                        while ($row = mysqli_fetch_array($selectTodo) ) {
                                                            $todo_id          = $row['todo_id'];
                                                            $todo_work        = $row['todo_work'];
                                                            $serTodo++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $serTodo; ?></td>
                                                            <td><?php echo $todo_work; ?></td>
                                                            <td><a href="dashboard.php?del_todo=<?php echo $todo_id; ?>" ><i class="mdi mdi-delete" style="font-size: 18px;"></i></a></td>
                                                        </tr>
                                                    
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $log_fnam." ".$log_lnam; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Student ID</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['s_id']; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $log_phone; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['s_email']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Institute</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $log_ins; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Gender</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $log_gender; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Gurdian</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $log_guardian; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Gurdian Contact</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $log_guardianPh; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6 b-r"> <strong>Security Question</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $log_securityQ; ?></p>
                                                <p>Ans: <span><?php echo $log_securityA; ?></span> </p>
                                            </div>
                                            <div class="col-md-6 col-xs-6"> <strong>Address</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $log_add; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class=""> <strong>Your Facebook Profile link</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $log_fblink; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material mx-2" method="POST" action="" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">First Name</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="u_s_fname" value="<?php echo $log_fnam; ?>" 
                                                                class="form-control form-control-line ps-0" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Last Name</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="u_s_lname" value="<?php echo $log_lnam; ?>" 
                                                                class="form-control form-control-line ps-0" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Students ID</label>
                                                        <div class="col-md-12">
                                                            <input style="background: #ddd; padding-left: 5px !important;" type="text" name="u_s_id" value="<?php echo $_SESSION['s_id']; ?>" class="form-control form-control-line ps-0" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Phone No</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="u_s_phone" value="<?php echo $log_phone; ?>"
                                                                class="form-control form-control-line ps-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Profile Photo</label>
                                                <div class="col-md-12">
                                                    <input type="file" name="u_s_pp" class="form-control form-control-line ps-0">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Institute</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="u_s_institute" value="<?php echo $log_ins; ?>" class="form-control form-control-line ps-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Gender</label>
                                                        <div class="col-md-12">
                                                            <label class="radio inline"> 
                                                                <input type="radio" name="u_s_gender" value="Male" checked>
                                                                <span> Male </span> 
                                                            </label>
                                                            <label class="radio inline"> 
                                                                <input type="radio" name="u_s_gender" value="Female">
                                                                <span>Female </span> 
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Gurdian</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="u_s_gardian" value="<?php echo $log_guardian; ?>" class="form-control form-control-line ps-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Gurdian Contact</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="u_s_gardianPhone" value="<?php echo $log_guardianPh; ?>" class="form-control form-control-line ps-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Facebook Profile Link</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="u_s_fbProfile" value="<?php echo $log_fblink; ?>" class="form-control form-control-line ps-0">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Address</label>
                                                <div class="col-md-12">
                                                    <textarea name="u_s_adress" class="form-control form-control-line ps-0" ><?php echo $log_add; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white" name="s_update">Update Profile</button>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <a href="" class="text-danger" data-toggle="modal" data-target="#delownAcc"><b>Delete Account</b></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Container fluid  -->
    <!-- Button trigger modal -->
        <!-- Todo List -->
        <div class="modal fade" id="addToDostu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content student_todo">
              <div class="modal-header">
                <h4 >Add TO DO List.</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                    <div class="col-md-12">
                      <textarea name="tdoList" required class="form-control" placeholder="Write Your work" rows="3"></textarea>
                    </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12 text-right">
                        <input style="margin-right: 15px;" type="submit" required name="addtodoLst" value="Add " class="btn btn-info">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

    <!-- Modal Delete Account -->
    <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="delownAcc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Are you sure? You want to <b>DELETE</b> your Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <div class="form-row">
                    <div class="col-2">
                      
                    </div>
                    <div class="col-6">
                      <input type="text" name="delStu_id" class="form-control sr-only" placeholder="Enter key Here" required value="<?php echo $_SESSION['s_id'];?>">
                      <input type="password" required name="delStu_pass" class="form-control" placeholder="Enter Password" >
                    </div>
                    <div class="col">
                      <input type="submit" name="delAcc" value="DELETE" class="btn btn-danger">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer text-center">
                <p class="modal-title" id="exampleModalCenterTitle"><span class="text-danger">Once you <b>DELETE</b> your account, you can not learn from this platform.</span></p>
              </div>
            </div>
          </div>
        </div>


<?php
    if (isset($_POST['addtodoLst'])) {
        $tdoList    = mysqli_real_escape_string($connection, $_POST['tdoList']);
        $query = "INSERT INTO todolist (todo_owner, todo_work) VALUES ( '$log_id', '$tdoList' )";

        $addtoDo = mysqli_query($connection, $query);

        if ( !$addtoDo ){
            die("Query Failed ". mysqli_error($connection));
        }
        else{
            header("Location: dashboard.php");
        }
    }
?>

<?php
    if (isset($_GET['del_todo'])) {
        $id_del_todo    = $_GET['del_todo'];
        $deltodoLst = "DELETE FROM todolist WHERE todo_id = '$id_del_todo' ";

        $delListfrmTodo = mysqli_query($connection, $deltodoLst);

        if ( !$delListfrmTodo ){
              die("Query Failed ". mysqli_error($connection));
        }
        else{
              header("Location: dashboard.php");
        }
    }

?>

<?php
    if (isset($_POST['delAcc'])) {
        $delStu_id      = $_POST['delStu_id'];
        $delStu_pass    = sha1($_POST['delStu_pass']);
        if ($log_pass != $delStu_pass) {
            echo '<div class="alert alert-warning">WRONG! Password.</div>';
        }
        else{
            $query = "DELETE FROM students WHERE s_id='$delStu_id'";

            $delete_studentAcc = mysqli_query($connection, $query);

            if ( !$delete_studentAcc ){
                die("Query Failed ". mysqli_error($connection));
            }
            else{
                header("Location: inc/logout.php");
            }
        }
    }

?>
        
<?php include "inc/footer.php" ?>
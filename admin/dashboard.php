<?php include "inc/header.php"; ?>



    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL COURSES</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_crs; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL STUDENTS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_stu; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_review; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card ">
                        <div class="header todoList">
                            <div><h2>To Do List</h2></div>
                            <div><a href="" class="btn btn-primary" data-toggle="modal" data-target="#addToDo">ADD</a></div>
                        </div>
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
                                        $todO = "SELECT * FROM todolist WHERE todo_owner = '$teach_sea_id' ORDER BY todo_id DESC";
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
                                            <td><a href="dashboard.php?del_todo=<?php echo $todo_id; ?>"><i class="material-icons">delete_outline</i></a></td>
                                        </tr>
                                    
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>Messages From Authority</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <?php 
                                        $authoMsg = "SELECT DISTINCT * FROM teachermsg WHERE t_id = '$teach_sea_id' ORDER BY tMsg_id DESC";
                                        $selectMsg = mysqli_query($connection, $authoMsg);
                                        $i = 0;
                                        while ( $row = mysqli_fetch_array($selectMsg) )
                                        {
                                            $tMsg_id   = $row['tMsg_id'];
                                            $tMsg_msg  = $row['tMsg_msg'];
                                            $t_id      = $row['t_id'];
                                            $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $tMsg_msg; ?></td>
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
    <!-- Button trigger modal -->
        <!-- Todo List -->
        <div class="modal fade" id="addToDo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
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
<?php
    if (isset($_POST['addtodoLst'])) {
        $tdoList    = mysqli_real_escape_string($connection, $_POST['tdoList']);
        $query = "INSERT INTO todolist (todo_owner, todo_work) VALUES ( '$teach_sea_id', '$tdoList' )";

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

<?php include "inc/footer.php"; ?>

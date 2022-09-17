<?php include "inc/header.php" ?>

<?php $sessionID = $_SESSION['s_id']; ?>

<div class="page-wrapper">

	<!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Privecy</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privecy</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
            </div>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->
  	<div class="container-fluid">
	  	<div class="row">
	  		<div class="col-md-6">
				<div class="card-body">
	                <form class="form-horizontal form-material mx-2" method="POST" action="" >
	                    <?php 

	                       $old_pass_form = '<div class="form-group">
	                        <label class="col-md-8"><h4>Update Password</h4></label>
	                        <div class="col-md-8">
	                            <input type="password" placeholder="Enter Old Password" name="old_pass" value="" class="form-control form-control-line ps-0">
	                        </div>
	                    </div>';
	                    echo $old_pass_form;

	                    ?>
	                    <div class="form-group">
	                        <div class="col-sm-8">
	                            <button class="btn btn-success text-white" name="enter_oldPass">Enter</button>
	                        </div>
	                    </div>
						<?php 

	                    	if (isset($_POST['enter_oldPass'])) {
	                    		$old_pass = sha1($_POST['old_pass']);

	                    		if ($old_pass == $_SESSION['s_password']) {
	                    			echo '<div class="form-group">
					                        <div class="col-md-8">
					                            <input type="password" placeholder="Enter New Password" name="s_new_pass1" class="form-control form-control-line ps-0">
					                        </div>
					                      </div> 
					                      <div class="form-group">
					                        <div class="col-md-8">
					                            <input type="password" placeholder="Re-type Password" name="s_new_pass2" class="form-control form-control-line ps-0">
					                        </div>
					                      </div> 
					                      <div class="form-group">
					                        <div class="col-sm-8">
					                            <button class="btn btn-success text-white" name="s_up_Pass">Update Password</button>
					                        </div>
					                    </div>
					                ';
	                    		}
	                    		else{
	                    			echo '<div class="alert alert-danger" role="alert">
										  <strong>Wrong! Password</strong>
										</div>';
	                    		}
	                    	}

	                    ?>
	                    

	                </form>
	            </div>

			<?php 

	  			if (isset($_POST['s_up_Pass'])) {
	  				 $new_p1 = $_POST['s_new_pass1'];
	  				 $new_p2 = $_POST['s_new_pass2'];

	  				 if ($new_p1 == $new_p2) {

	  				 	$hashpass = sha1($new_p2);

	  				 	$query = "UPDATE students SET s_password ='$hashpass' WHERE s_id= '$sessionID'";

					    $updatePass = mysqli_query($connection, $query);

					    if ( !$updatePass ){
					      die ("Query Failed. " . mysqli_error($connection));
					    }
					    else{
					      echo '<div class="alert alert-success" role="alert">
							  <strong>Successfully Update your Password!</strong>
							</div>';
					    }
	  				 }
	  				 else{
	  				 	echo '<div class="alert alert-danger" role="alert">
							  <strong>Not Match!</strong>
							</div>';
	  				 }
	  			}

	  		?>


	  		</div>
	  		<div class="col-md-6">
	  			<div class="card-body">
	                <form class="form-horizontal form-material mx-2" method="POST" action="" enctype="multipart/form-data">
	                    <div class="form-group">
	                        <label class="col-md-8"><h4>Update Email Address</h4></label>
	                        <div class="col-md-8">
	                            <input type="email" name="old_email" placeholder="Enter Old Email " class="form-control form-control-line ps-0">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-8">
	                            <button class="btn btn-success text-white" name="s_oldEM">Enter</button>
	                        </div>
	                    </div>
	                    <?php 

	                    	if (isset($_POST['s_oldEM'])) {
	                    		$old_email  =  $_POST['old_email'];
	                    		if ($old_email == $_SESSION['s_email']) {
	                    			echo '<div class="form-group">
					                        <div class="col-md-8">
					                            <input type="email" placeholder="Enter New Email" name="s_upEM" class="form-control form-control-line ps-0">
					                        </div>
					                      </div> 
					                      <div class="form-group">
					                        <div class="col-sm-8">
					                            <button class="btn btn-success text-white" name="s_upEbtn">Update Email</button>
					                        </div>
					                    </div>
					                ';
	                    		}
	                    		else{
	                    			echo '<div class="alert alert-danger" role="alert">
									  <strong>Not Match!</strong>
									</div>';
	                    		}
	                    	}

	                    ?>
	                </form>
	            </div>


<?php 

	if (isset($_POST['s_upEbtn'])) {
		$s_upEM = $_POST['s_upEM'];

		$upEMquery = "UPDATE students SET s_email ='$s_upEM' WHERE s_id= '$sessionID'";

	    $upEmail = mysqli_query($connection, $upEMquery);
	    if ( !$upEmail ){
	      die ("Query Failed. " . mysqli_error($connection));
	    }
	    else{
	      header("Location: inc/logout.php");
	    }
	}

?>


	  		</div>
	  	</div>
  	</div>

<?php include "inc/footer.php" ?>
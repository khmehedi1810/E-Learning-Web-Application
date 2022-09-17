<?php include "../inc/header.php" ?>
<section class="container text-center">
  <h1 class="display-4 py-4 font-weight-bold">Forgot Password?</h1>
</section>

  <div class="container register mb-5">
  	<center>
	  	<form class="form" method="POST">
		  	<div class="form-group mt-3 mx-sm-3 mb-2 w-50">
			    <input name="t_forEm" type="email" class="form-control"  placeholder="Your Email Adddress">
		  	</div>
		  	<div class="form-group mt-3 mx-sm-3 mb-2 w-50">
                <select name="t_forSQ" class="form-control">
                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                    <option value="What is your Birthdate?">What is your Birthdate?</option>
                    <option value="What is Your old Phone Number?">What is Your old Phone Number?</option>
                    <option value="What is your Pet Name?">What is your Pet Name?</option>
                    <option value="What is your favourite food?">What is your favourite food?</option>
                    <option value="What is your favourite Movie?">What is your favourite Movie?</option>
                </select>
            </div>
            <div class="form-group mt-3 mx-sm-3 mb-2 w-50">
			    <input name="t_forSA" type="text" class="form-control"  placeholder="Your Ans">
		  	</div>
		  <button type="submit" name="t_forbtn" class="btn btn-success my-2">Send</button>

<?php 

if (isset($_POST['t_forbtn'])) {
	$t_forEm = $_POST['t_forEm'];
	$t_forSQ = $_POST['t_forSQ'];
	$t_forSA = $_POST['t_forSA'];

	$query = "SELECT t_email, t_SecurityQ, t_SecurityA  FROM teachers WHERE t_email = '$t_forEm' ";
	$selectTeacForPass = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($selectTeacForPass) ) {
            
            $src_eamil        = $row['t_email'];
            $src_securityQ    = $row['t_SecurityQ'];
            $src_securityA    = $row['t_SecurityA'];
        }


	    if (!empty($src_eamil)) {
	  	  	if ($t_forEm  ==  $src_eamil  &&  $t_forSQ  ==  $src_securityQ  &&  $t_forSA  ==  $src_securityA) { ?>
	  	  		<div class="form-group">
		            <div class="col-md-6">
		                <input type="text"  placeholder="Email" name="em_again" value="<?php echo $src_eamil; ?>" class="form-control sr-only form-control-line ps-0" readonly>
		            </div>
		        </div>
	  	  		<div class="form-group">
		            <div class="col-md-6">
		                <input type="password" placeholder="Enter New Password" name="en_new_pass1" class="form-control form-control-line ps-0">
		            </div>
		        </div> 
		        <div class="form-group">
		            <div class="col-md-6">
		                <input type="password" placeholder="Re-type Password" name="en_new_pass2" class="form-control form-control-line ps-0">
		            </div>
		        </div> 
		        <div class="form-group">
		            <div class="col-sm-6">
		                <button class="btn btn-success text-white" name="en_up_Pass">Update Password</button>
		            </div>
		        </div>
	  	  		 
	  	  	<?php }
	  	  	else{
				echo '<br> <br> <center> <div class="alert alert-danger py-1 w-25" role="alert">
				  Not! Match. 
				</div> </center>';
	  	  	}
	    }
	    else{
	  	    echo '<br> <br> <center> <div class="alert alert-danger py-1 w-25" role="alert">
				  Not! Match. 
				</div> </center>';
	    }

}

?>

		</form>

<?php 

  if (isset($_POST['en_up_Pass'])) {
  	 $en_new_pass1 	= $_POST['en_new_pass1'];
  	 $en_new_pass2 	= $_POST['en_new_pass2'];
  	 $enEMM			= $_POST['em_again'];

  	 if ($en_new_pass1 == $en_new_pass2) {
  	 	$hashpass  = sha1($en_new_pass2);
  	 	$query = "UPDATE teachers SET t_password ='$hashpass' WHERE t_email = '$enEMM'";

	    $updatePass = mysqli_query($connection, $query);

	    if ( !$updatePass ){
	      die ("Query Failed. " . mysqli_error($connection));
	    }
	    else{
	    	echo '<br> <center> <div class="alert alert-success py-1 w-25" role="alert">
				  Successfully Update your Password!!  
				  <a href="index.php" class="btn btn-sm btn-primary mx-2"> Login </a>
				</div> </center>';
	    }
  	 }
  	 else{
	 	echo '<br><div class="alert alert-danger py-1 w-25" role="alert">
		  Password! Not Match!
		</div>';
	 }
  }

?>
	</center>
  </div>

<?php include "../inc/footer.php" ?>
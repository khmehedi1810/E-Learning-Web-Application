<?php include "../inc/header.php" ?>

<section class="container text-center">
  <h1 class="display-4 py-4 font-weight-bold">Forgot Password?</h1>
</section>

  <div class="container register mb-4">
  	<center>
	  	<form class="form" method="POST">
		  	<div class="form-group mt-3 mx-sm-3 mb-2 w-50">
			    <input name="en_EM" type="email" class="form-control"  placeholder="Your Email Adddress">
		  	</div>
		  	<div class="form-group mt-3 mx-sm-3 mb-2 w-50">
                <select name="en_SQ" class="form-control">
                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                    <option value="What is your Birthdate?">What is your Birthdate?</option>
                    <option value="What is Your old Phone Number?">What is Your old Phone Number?</option>
                    <option value="What is your Pet Name?">What is your Pet Name?</option>
                    <option value="What is your favourite food?">What is your favourite food?</option>
                    <option value="What is your favourite Movie?">What is your favourite Movie?</option>
                </select>
            </div>
            <div class="form-group mt-3 mx-sm-3 mb-2 w-50">
			    <input name="en_SA" type="text" class="form-control"  placeholder="Your Email Adddress">
		  	</div>
		  <button type="submit" name="en_snd" class="btn btn-success my-2">Send</button>

<?php 

if (isset($_POST['en_snd'])) {
	$en_EM = $_POST['en_EM'];
	$en_SQ = $_POST['en_SQ'];
	$en_SA = $_POST['en_SA'];

	$query = "SELECT s_email, s_securityQ, s_securityA  FROM students WHERE s_email = '$en_EM' ";
	$selectSrcEM = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($selectSrcEM) ) {
            
            $src_eamil        = $row['s_email'];
            $src_securityQ    = $row['s_securityQ'];
            $src_securityA    = $row['s_securityA'];
        }


	    if (!empty($src_eamil)) {
	  	  	if ($en_EM  ==  $src_eamil  &&  $en_SQ  ==  $src_securityQ  &&  $en_SA  ==  $src_securityA) { ?>
	  	  		<div class="form-group">
		            <div class="col-md-6">
		                <input type="text" placeholder="Enter New Password" name="em_again" value="<?php echo $src_eamil; ?>" class="form-control sr-only form-control-line ps-0" readonly>
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
  	 	$query = "UPDATE students SET s_password ='$hashpass' WHERE s_email = '$enEMM'";

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
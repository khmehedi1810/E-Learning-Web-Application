<?php include "../inc/header.php" ?>
<?php

	if (isset($_GET['tprovisit'])) {
		$tprovisit 	= $_GET['tprovisit'];
		$query = "SELECT * FROM teachers WHERE t_id = '$tprovisit' ";
		$selectTea = mysqli_query($connection, $query);
   		while ($row = mysqli_fetch_array($selectTea) ) {
            $t_id             = $row['t_id'];
            $t_fname          = $row['t_fname'];
            $t_lname          = $row['t_lname'];
            $t_bio            = $row['t_bio'];
            $t_email          = $row['t_email'];
            $t_phone          = $row['t_phone'];
            $t_hometwn        = $row['t_hometwn'];
            $t_presentAdd     = $row['t_presentAdd'];
            $t_ppic           = $row['t_ppic'];
            $t_demoVdo        = $row['t_demoVdo'];
            $t_gender         = $row['t_gender'];
            $t_proffession    = $row['t_proffession'];
            $t_eduQua         = $row['t_eduQua'];
            $t_institute      = $row['t_institute'];
            $t_experience     = $row['t_experience'];
            $t_fblink         = $row['t_fblink'];

        }
	}

?>
<?php
if (empty($tprovisit)) {
	echo '<div class="alert alert-warning mb-5" style="width: 600px;margin: 0 auto; margin-top: 100px;border-radius: 10px;">No! Profile Selected</div>';
}
else{ ?>


<div class="container shadow-lg p-3 my-5 py-5  bg-white rounded">
	<center ><h1>Teacher's Profile</h1></center>
	<hr>
	<center><img src="img/<?php echo $t_ppic;?>" class="img-fluid mb-4 img-thumbnail rounded " style="width: 350px; height: 200px;"></center>
	<table class="table table-dark w-50 ml-auto mr-auto">
	  <tbody>
	    <tr>
	      <td>Teacher's ID</td>
	      <td><?php echo $t_id; ?></td>
	    </tr>
	    <tr>
	      <td>Name</td>
	      <td><?php echo $t_fname.' '. $t_lname; ?></td>
	    </tr>
	    <tr>
	      <td>BIO</td>
	      <td><?php echo $t_bio; ?></td>
	    </tr>
	    <tr>
	      <td>Email</td>
	      <td><a href="mailto:"><?php echo $t_email; ?></a></td>
	    </tr>
	    <tr>
	      <td>Phone</td>
	      <td><a href="mailto:"><?php echo $t_phone; ?></a></td>
	    </tr>
	    <tr>
	      <td>Gender</td>
	      <td><?php echo $t_gender; ?></td>
	    </tr>
	    <tr>
	      <td>Permanent Address</td>
	      <td><?php echo $t_hometwn; ?></td>
	    </tr>
	    <tr>
	      <td>Present Address</td>
	      <td><?php echo $t_presentAdd; ?></td>
	    </tr>
	    <tr>
	      <td>Profession</td>
	      <td><?php echo $t_proffession; ?></td>
	    </tr>
	    <tr>
	      <td>Qualification</td>
	      <td><?php echo $t_eduQua; ?></td>
	    </tr>
	    <tr>
	      <td>Institute</td>
	      <td><?php echo $t_institute; ?></td>
	    </tr>
	    <tr>
	      <td>Experience</td>
	      <td><?php echo $t_experience; ?></td>
	    </tr>
	    <tr>
	      <td>Video Resume</td>
	      <td><a target="_blank" href="<?php echo $t_demoVdo; ?>">Click Here</a></td>
	    </tr>
	    <tr>
	      <td>Facebook Profile</td>
	      <td><a target="_blank" href="<?php echo $t_fblink; ?>">FB Profile</a></td>
	    </tr>
	  </tbody>

	</table>
	<form method="POST" class="w-50 ml-auto mr-auto my-4">
		<div class="form-group">
			<textarea placeholder="Write Something About This teacher." required class="form-control border-top-0 border-right-0 border-left-0 border-warning" name="revTeaMsg" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		<div class="text-right">
			<input type="submit" name="revTea" value="Send" class="btn btn-info text-right" >
		</div>
	</form> 
	<?php
		if (isset($_POST['revTea'])) {
			$revTeaMsg 	= $_POST['revTeaMsg'];
			if ( empty($revTeaMsg) )
	  		{
	  			echo '<div class="alert alert-warning">Please Fillup the field Correctly</div>';
	  		}
	  		else{

	  			$query = "INSERT INTO reviewteacher (rv_mesg, t_id) VALUES ( '$revTeaMsg', '$tprovisit' )";

	  			$sndReviewTea = mysqli_query($connection, $query);

	  			if ( !$sndReviewTea ){
	  				die("Query Failed ". mysqli_error($connection));
	  			}
	  			else{
	  				echo '<div class="alert alert-success">Successfully Send Your Message</div>';
	  			}
			  }
		}

	?>
</div>

<?php }

?>

<?php include "../inc/footer.php" ?>
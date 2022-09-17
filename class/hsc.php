<?php include "../inc/header.php" ?>
<section id="page-id-10">

<div class="jumbotron jumbotron-fluid ">
  <div class="container">
    <h1 class="display-4">Class - HSC(Special)</h1>
  </div>
</div>

	<div class="container mt-4 ">
	  <center><h1>Teachers</h1></center>
	</div>

	<div class="container pt-2 pb-5"> 
	    <div class="accordion" id="accordionExample">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h2 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Bangla
		        </button>
		      </h2>
		    </div>

		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
		      <div class="card-body">
		      	<center> <div class=""> <img src="img/9 bangla.PNG" class="img-fluid shadow p-1 mb-2 bg-white rounded" width="20%"> </div></center>
		            <section class="teachers mb-5" >
				      <div class="container mt-5 px-5">
				        <div class="row px-5 d-flex justify-content-center">
				        <?php 
				        	$sevTea = "SELECT DISTINCT * FROM courses,teachers WHERE course_code = 'CLS_11_BAN' AND courses.t_id = teachers.t_id";
			              	$sevTeaList = mysqli_query($connection, $sevTea);
			              	while ($row = mysqli_fetch_array($sevTeaList) ) {
			                  $t_id             = $row['t_id'];
			                  $t_fname          = $row['t_fname'];
			                  $t_lname          = $row['t_lname'];
			                  $t_ppic           = $row['t_ppic'];

				        ?>
					        <div class="col-md-3 teacher text-center">
					            <center><img style="width: 70px; height: 60px;" src="../admin/img/<?php echo $t_ppic; ?>" class="img-fluid d-block rounded-circle" > </center>
					            <p class="pt-2"> <a href="../admin/teacherprofile.php?tprovisit=<?php echo $t_id; ?>"><?php echo $t_fname.' '. $t_lname; ?></a> </p>
					        </div>
					    <?php } ?>
				        </div>
				      </div>
				    </section>
		      </div>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h2 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          English
		        </button>
		      </h2>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body">
		      	<center> <h3>English</h3></center>
		        <section class="teachers mb-5" >
				      <div class="container mt-5 px-5">
				        <div class="row px-5 d-flex justify-content-center">
				        <?php 
				        	$sevTea = "SELECT DISTINCT * FROM courses,teachers WHERE course_code = 'CLS_11_ENG' AND courses.t_id = teachers.t_id";
			              	$sevTeaList = mysqli_query($connection, $sevTea);
			              	while ($row = mysqli_fetch_array($sevTeaList) ) {
			                  $t_id             = $row['t_id'];
			                  $t_fname          = $row['t_fname'];
			                  $t_lname          = $row['t_lname'];
			                  $t_ppic           = $row['t_ppic'];

				        ?>
					        <div class="col-md-3 teacher text-center">
					            <center><img style="width: 70px; height: 60px;" src="../admin/img/<?php echo $t_ppic; ?>" class="img-fluid d-block rounded-circle" > </center>
					            <p class="pt-2"> <a href="../admin/teacherprofile.php?tprovisit=<?php echo $t_id; ?>"><?php echo $t_fname.' '. $t_lname; ?></a> </p>
					        </div>
					    <?php } ?>
				        </div>
				      </div>
				</section>
		      </div>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h2 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Mathmatics
		        </button>
		      </h2>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body">
		      	<center> <h3>Math</h3></center>
		        <section class="teachers mb-5" >
				      <div class="container mt-5 px-5">
				        <div class="row px-5 d-flex justify-content-center">
				        <?php 
				        	$sevTea = "SELECT DISTINCT * FROM courses,teachers WHERE course_code = 'CLS_11_MAT' AND courses.t_id = teachers.t_id";
			              	$sevTeaList = mysqli_query($connection, $sevTea);
			              	while ($row = mysqli_fetch_array($sevTeaList) ) {
			                  $t_id             = $row['t_id'];
			                  $t_fname          = $row['t_fname'];
			                  $t_lname          = $row['t_lname'];
			                  $t_ppic           = $row['t_ppic'];

				        ?>
					        <div class="col-md-3 teacher text-center">
					            <center><img style="width: 70px; height: 60px;" src="../admin/img/<?php echo $t_ppic; ?>" class="img-fluid d-block rounded-circle" > </center>
					            <p class="pt-2"> <a href="../admin/teacherprofile.php?tprovisit=<?php echo $t_id; ?>"><?php echo $t_fname.' '. $t_lname; ?></a> </p>
					        </div>
					    <?php } ?>
				        </div>
				      </div>
				</section>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</section>
<?php include "../inc/footer.php" ?>


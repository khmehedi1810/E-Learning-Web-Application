<?php include "inc/header.php" ?>

<div class="container shadow-lg p-3 my-5 py-5  bg-white rounded">
	<center><h2 class="py-4 global-heading-col">Contact & Help Center</h2></center>
	<div class="row pb-4">
		<div class="col-md-3 d-none d-md-block"></div>
		<div class="col-md-3">
		  <div class="contactpage-card text-center global-logo-bg-dark"> 
			<h4 class="pb-2">Address</h4>
			<div class="contact-page-contact-lineheight">
				<p><a href="https://goo.gl/maps/o3FxX1BM7VJf25w88" target="_blank"  class="pb-0">Sector-1, Block-H</a></p>
                <p><a href="https://goo.gl/maps/o3FxX1BM7VJf25w88" target="_blank" class="pb-0">Mirpur-1, Dhaka 1216</a></p>
			</div>
		  </div>
		</div>
		<div class="col-md-3">
		  <div class="contactpage-card text-center"> 
			<h4 class="pb-2">Contact US</h4>
			<div class="contact-page-contact-lineheight">
				<p><a href="#"  class="pb-0">01620-564288</a></p>
                <p><a href="mailto:" class="pb-0">mehedi15-1810@diu.edu.bd</a></p>
			</div>
		  </div>
		</div>
	</div>
		<center class="w-50 w-md-75 ml-auto mr-auto">
			<h5 class="pb-2 global-heading-col">Drop Your Problem & Complains</h5>
			<form class="contat-page-form" action="" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="report-subject" placeholder="Problem Subject">
				</div>
				<div class="form-group">
					<textarea name="report-message" placeholder="Write your Problem, report & complaints" class="form-control"></textarea>
				</div>
				<input type="submit" class="btn btn-logo-col" name="report-btn"  value="Send"/>
			</form>
		</center>
</div>

<?php include "inc/footer.php" ?>
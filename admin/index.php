<?php include "../inc/header.php" ?>
<?php include "inc/functions.php"; ?>

    <section class="container text-center">
      <h1 class="display-4 py-4 font-weight-bold">For Teachers</h1>
    </section>

<div class="container register mb-5">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>Join with Us. Learn & Earn.</p>
            <a class="register-left" href="http://localhost/EasyTutorS.com/rules.php">See Rules</a><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Teachers Login Here</h3>
                    <div class="register-form">
                    	<center>
	                    	<form action="inc/login.php" method="POST">
                                <div class="form-group w-75">
                                    <input type="text" class="form-control" name="t_lseKey" placeholder="Teacher's Security Key *" />
                                </div>
                                <div class="form-group w-75">
                                    <input type="email" class="form-control" name="t_lem" placeholder="Teacher's Email *" />
                                </div>
                                <div class="form-group w-75">
                                    <input type="password" class="form-control" name="t_lpass" placeholder="Teacher's Password *"/>
                                </div>
                                <div class="w-75">
                                    <a class="" href="forgetpasstea.php">Forgot Password?</a>
                                    <input type="submit" class="btnRegister btn-logo-col" name="t_log"  value="Login"/>
                                </div>      
                            </form>
                        </center>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Register As a Teacher</h3>
                    <form class="" action="" method="POST">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="t_fnam" class="form-control" placeholder="First Name *"  />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_lnam" class="form-control" placeholder="Last Name *"  />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="t_email" class="form-control" placeholder="Email *"  />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_phn" maxlength="15" minlength="10" class="form-control" placeholder="Phone *"  />
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" name="t_pass" class="form-control" placeholder="Password *"  />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="t_secu_key" class="form-control" placeholder="Security Key *"  />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="t_securityQ">
                                        <option class="hidden"  selected readonly>Please select your Sequrity Question</option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                        <option>What is your favourite food?</option>
                                        <option>What is your favourite Movie?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="t_securityA" placeholder="Answer *"  />
                                </div>
                                <input type="submit" class="btnRegister btn-logo-col" name="t_register"  value="Register"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "../inc/footer.php" ?>
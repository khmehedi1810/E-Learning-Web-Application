<?php include "../inc/header.php"; ?>
<?php include "inc/functions.php"; ?>


    <section class="container text-center">
      <h1 class="display-4 py-4 font-weight-bold">For Students</h1>
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
                    <h3 class="register-heading">Student Login Here</h3>
                    <div class="register-form">
                    	<center>
	                    	<form action="inc/login.php" method="POST">
                                <div class="form-group w-75">
                                    <input type="email" name="s_email" class="form-control" placeholder="Student's Email *" value="" />
                                </div>
                                <div class="form-group w-75">
                                    <input type="password" name="s_password" class="form-control" placeholder="Student's Password *" value="" />
                                </div>
                                <div class="w-75">
                                    <a class="" href="forgetpassstu.php">Forgot Password?</a>
                                    <input type="submit" name="s_login" class="btnRegister btn-logo-col"  value="Login"/>
                                </div>      
                            </form>
                        </center>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Register As a Student</h3>
                    <form action="" method="POST">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" name="s_fname" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" name="s_lname" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" name="s_pass" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Institute *" name="s_ins" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="s_gender" value="Male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="s_gender" value="Female">
                                            <span>Female </span> 
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="s_email" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="s_phone" class="form-control" placeholder="Your Phone *"  />
                                </div>
                                <div class="form-group">
                                    <select name="s_securityQ" class="form-control">
                                        <option class="hidden"  selected readonly>Please select your Sequrity Question</option>
                                        <option value="What is your Birthdate?">What is your Birthdate?</option>
                                        <option value="What is Your old Phone Number?">What is Your old Phone Number?</option>
                                        <option value="What is your Pet Name?">What is your Pet Name?</option>
                                        <option value="What is your favourite food?">What is your favourite food?</option>
                                        <option value="What is your favourite Movie?">What is your favourite Movie?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Answer *" name="s_securityA" />
                                </div>
                                <input type="submit" name="stu_register" class="btnRegister btn-logo-col"  value="Register"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include "../inc/footer.php" ?>
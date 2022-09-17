<?php include "inc/header.php" ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
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
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row mb-5 notifications">
                    <div class="col-3">
                        <div class="card border-left-success shadow h-100 py-2">
                        <a href="submitted-profiles.php">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Profile</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $deactv_tea; ?></div>
                                </div>
                                <div class="col-auto text-secondary">
                                  <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-left-success shadow h-100 py-2">
                        <a href="report.php">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">System Report</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cnt_systen_report; ?></div>
                                </div>
                                <div class="col-auto text-secondary">
                                  <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-left-success shadow h-100 py-2">
                        <a href="conplainstudents.php">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Student Complain</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $stuComCnt; ?></div>
                                </div>
                                <div class="col-auto text-secondary">
                                  <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-left-success shadow h-100 py-2">
                        <a href="reviewteacher.php">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Teacher's Review</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $reviewTea; ?></div>
                                </div>
                                <div class="col-auto text-secondary">
                                  <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="img/cover.png"
                                alt="Card image cap">
                            <div class="card-body little-profile text-center">
                                <div class="pro-img"><img src="img/title_logo.png" alt="user"></div>
                                <h3 class="mb-0">মাস্টার বাড়ি</h3>
                                <p>Learning &amp; Earning Platform.</p>
                                <a href="https://www.facebook.com/" target="_blank" 
                                    class="mt-2 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Like</a>
                                <div class="row text-center mt-3">
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h3 class="mb-0 font-light"><?php echo $cnt_AlStu; ?></h3><small>Students</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h3 class="mb-0 font-light"><?php echo $countAct_tea+$deactv_tea; ?></h3><small>Teachers</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h3 class="mb-0 font-light"><?php echo $contAllCrs; ?></h3><small>Courses</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home"
                                        role="tab">Activity</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline border-start-0">
                                            <div class="sl-item">
                                                <iframe width="680" height="250" src="https://www.youtube.com/embed/-RT6_6rmA_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.1885561242277!2d90.34652445806239!3d23.805185496140616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1711c7452d7%3A0x7eb1fe73b57af533!2sGiardino%20di%20Nahar!5e0!3m2!1sen!2sbd!4v1618425866889!5m2!1sen!2sbd" width="680" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->

                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
<?php include "inc/footer.php" ?>
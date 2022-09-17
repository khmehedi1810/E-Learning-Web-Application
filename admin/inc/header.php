
<?php 

  include "../inc/db.php"; 
  include "functions.php";
  ob_start();
  session_start();

  if ( !$_SESSION['t_email'] ){
    header("Location: index.php");
    session_unset();
    session_destroy();
  }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>MasterBari - Teachers </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->

    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->

    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php  
    $sesson_email = $_SESSION['t_email'];
    $teach_sea_id = $_SESSION['t_id'];
    $teacher_permissiom = $_SESSION['t_permission'];
    $query = "SELECT * FROM teachers WHERE t_email = '$sesson_email' ";
    $selectTea = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($selectTea) ) {
            $t_id             = $row['t_id'];
            $t_fname          = $row['t_fname'];
            $t_lname          = $row['t_lname'];
            $t_bio            = $row['t_bio'];
            $t_email          = $row['t_email'];
            $t_phone          = $row['t_phone'];
            $t_password       = $row['t_password'];
            $t_security_key   = $row['t_security_key'];
            $t_nid            = $row['t_nid'];
            $t_dob            = $row['t_dob'];
            $t_hometwn        = $row['t_hometwn'];
            $t_presentAdd     = $row['t_presentAdd'];
            $t_ppic           = $row['t_ppic'];
            $t_demoVdo        = $row['t_demoVdo'];
            $t_gender         = $row['t_gender'];
            $t_proffession    = $row['t_proffession'];
            $t_eduQua         = $row['t_eduQua'];
            $t_institute      = $row['t_institute'];
            $t_experience     = $row['t_experience'];
            $t_SecurityQ      = $row['t_SecurityQ'];
            $t_SecurityA      = $row['t_SecurityA'];
            $t_fblink         = $row['t_fblink'];
            $t_permission     = $row['t_permission'];

        }

?>

<body class="theme-red">
    <!-- Page Loader -->
   <!--  <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard.php"><strong> মাস্টার বাড়ি </strong></a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="img/<?php 
                      if( !$t_ppic ){
                        echo 'title_logo.png';
                      }
                      else{
                        echo $t_ppic;
                      }
                     ?>"  width="48" height="48" alt="User">
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $t_fname." ".$t_lname; ?></div>
                    <div class="email"><?php echo $sesson_email; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="students.php"><i class="material-icons">group</i>Students</a></li>
                            <li><a href="comments.php"><i class="material-icons">favorite</i>Comments</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a class="custom-logout" href="" data-toggle="modal" data-target="#logoutModal"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="">
                        <a href="dashboard.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="courses.php">
                            <i class="material-icons">text_fields</i>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="students.php">
                            <i class="material-icons">group</i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li class="sr-only"> 
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 <a href="javascript:void(0);">মাস্টার বাড়ি</a> <span> <strong>By Debug21</strong> </span>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

<section style="display: none;">
    <?php 
      $teacher_sessonID = $_SESSION['t_id'];
        $query = "SELECT * FROM courses WHERE t_id = '$teacher_sessonID'";
        $select_course = mysqli_query($connection, $query);
        $count_crs = 0;
        while ( $row = mysqli_fetch_array($select_course) )
        {
            $course_id          = $row['course_id'];
            $count_crs++;
        }
    ?>

    <?php 
        $query = "SELECT DISTINCT * FROM courses,assign,students,teachers WHERE assign.course_id = courses.course_id AND assign.s_id = students.s_id AND courses.t_id = '$teach_sea_id' group by assign.s_id";
        $select_course = mysqli_query($connection, $query);
        $count_stu = 0;
        while ( $row = mysqli_fetch_array($select_course) )
        {
            $s_id         = $row['s_id'];
            $count_stu++;
        }
    ?>

    <?php 
        $selTeaRV = "SELECT * FROM reviewteacher WHERE t_id = '$teach_sea_id'";
        $selectTeaReview = mysqli_query($connection, $selTeaRV);
        $count_review = 0;
        while ( $row = mysqli_fetch_assoc($selectTeaReview) )
        {
            $rvT_id        = $row['rvT_id'];
            $count_review++;
        }
    ?>
</section>
            

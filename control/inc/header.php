<?php 

  include "../inc/db.php"; 
  include "functions.php";
  ob_start();

  session_start();

  if ( !$_SESSION['con_security_email'] ){
    header("Location: index.php");
    session_unset();
    session_destroy();
  }

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>মাস্টার বাড়ি - Control Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="">
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                           <h2 class="text-white pt-2">মাস্টার বাড়ি</h2>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-3">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown con-logout">
                            <a class="custom-logout" href="inc/logout.php"><i
                                class="mdi mdi-power"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="courseenrole.php" aria-expanded="false"><i
                                    class="mdi me-2 mdi-book-open-variant"></i><span class="hide-menu">All Courses</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="students.php" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Students</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="conplainstudents.php" aria-expanded="false">
                                <i class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Complain Student</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="teachers.php" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Teachers</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="reviewteacher.php" aria-expanded="false">
                                <i class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Review Teacher</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="submitted-profiles.php" aria-expanded="false"><i
                                    class="mdi me-2 mdi-book-open-variant"></i><span class="hide-menu">Submitted Profiles</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="report.php" aria-expanded="false"><i
                                    class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Syatem Complains</span></a></li>
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="inc/logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  courseenrole.php -->
        <!-- ============================================================== -->

<!-- This section cannot visible to uses -->
<section class="sr-only">
    <!-- Count Teachers Active -->
    <?php 
    
        $find_tea = "SELECT * FROM teachers WHERE t_permission = 'YES'";
        $selectAct_tea = mysqli_query($connection, $find_tea);
        $countAct_tea = 0;
        while ( $row = mysqli_fetch_assoc($selectAct_tea) )
        {
            $t_id    = $row['t_id'];
            $countAct_tea++;
            ?>
            <?php
        }
    ?>
    <!-- Count Teacher Deactive -->
    <?php 
    
        $find_tea = "SELECT * FROM teachers WHERE t_permission = 'NO' OR t_permission = ' '";
        $selectDeacti_tea = mysqli_query($connection, $find_tea);
        $deactv_tea = 0;
        while ( $row = mysqli_fetch_assoc($selectDeacti_tea) )
        {
            $t_id    = $row['t_id'];
            $deactv_tea++;
            ?>
            <?php
        }
    ?>
    <!-- Count system related Complain -->
    <?php
        $query = "SELECT * FROM complain";
        $slect_sytem_com = mysqli_query($connection, $query);
        $cnt_systen_report = 0;
        while ( $row = mysqli_fetch_assoc($slect_sytem_com) )
        {
        $id        = $row['id'];
        $cnt_systen_report++;
    }
    ?>

    <!-- Count all students -->
    <?php
        $query = "SELECT * FROM students";
        $selectAlStu = mysqli_query($connection, $query);
        $cnt_AlStu = 0;
        while ( $row = mysqli_fetch_assoc($selectAlStu) )
        {
        $id        = $row['id'];
        $cnt_AlStu++;
    }
    ?>

        <!-- Count all courses -->
    <?php
        $query = "SELECT * FROM courses";
        $selectAlCrs = mysqli_query($connection, $query);
        $contAllCrs = 0;
        while ( $row = mysqli_fetch_assoc($selectAlCrs) )
        {
        $id        = $row['id'];
        $contAllCrs++;
    }
    ?>
    <?php
        $selStuCom = "SELECT * FROM student_complain";
        $selectStuCom = mysqli_query($connection, $selStuCom);
        $stuComCnt = 0;
        while ( $row = mysqli_fetch_assoc($selectStuCom) )
        {
            $stu_com_id         = $row['stu_com_id'];
            $stuComCnt++;
        }

    ?>
    <?php
        $selReviewTea = "SELECT * FROM reviewteacher";
        $reviewReaSel = mysqli_query($connection, $selReviewTea);
        $reviewTea = 0;
        while ( $row = mysqli_fetch_assoc($reviewReaSel) )
        {
            $rvT_id        = $row['rvT_id'];
            $reviewTea++;
        }

    ?>


</section>
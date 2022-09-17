<?php 

  include "db.php"; 
  include "functions.php"; 
  ob_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EasyTutorS.com - Education for all</title>
    <!-- Bootstrap CSS -->
    <link rel="icon"  href="img/title_logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <div class="container-fluid py-3 px-5 text-center text-md-left">
        <div class="row">
          <div class="col-md-4">
            <a href="http://localhost/EasyTutorS.com"><img src="img/title_logo.png" class="img-fluid" width="140"></a>
          </div>
          <div class="col-md-4 py-2 py-md-1 text-center head-title">
            <h1 class="font-weight-bold">মাস্টার বাড়ি </h1>
            <h2>শিক্ষার জন্যই শিক্ষা</h2>
          </div> 
          <!-- .d-md-flex -->
          <div class="col-md-4 d-flex justify-content-center justify-content-md-end ">
            <div class="float-left ">
              <a class="btn btn-logo-col btn-sm mb-2 mt-2 mt-md-3" href="http://localhost/EasyTutorS.com/me/" >Log-In Student</a>  <br>
              <a class="btn btn-logo-col-1 btn-sm" href="http://localhost/EasyTutorS.com/admin/">Log-In Teacher</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-custom ">
      <button class="navbar-toggler ml-auto mr-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color: #000;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-distribute-vertical" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 1.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5zm0 13a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5z"/><path d="M2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z"/></svg></span>
      </button>
      <div class="collapse navbar-collapse custom-nav" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/EasyTutorS.com/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/EasyTutorS.com/about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/EasyTutorS.com/rules.php">নিয়মাবলী</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/EasyTutorS.com/faq.php">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/EasyTutorS.com/help.php">Help</a>
          </li>
        </ul>
      </div>
    </nav>


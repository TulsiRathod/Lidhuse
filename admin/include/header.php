<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Lidhu
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.min.css" rel="stylesheet" />
  <!-- Alterify -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  
  <style>
    .form-control{
      border: 1px solid #b3a1a1 !important;
      padding: 8px 10px;
    }
    .form-select{
      border: 1px solid #b3a1a1 !important;
      padding: 8px 10px;
    }
    
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">  
<?php include('sidebar.php'); ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<?php include('navbar.php'); ?>

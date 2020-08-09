<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    OADRS | Landing Page
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' /> -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/material/iconfont/material-icons.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/roboto.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/font-awesome.min.css'); ?>">
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/css/material-dashboard.min.css'); ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('assets/demo/demo.css'); ?>" rel="stylesheet" />
  <style media="screen">
    .hidden{
      display: none;
    }
  </style>
</head>

<body class="off-canvas-sidebar">

  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
   <div class="container">
     <div class="navbar-wrapper">
       <?php
        echo ($mainContent == 'landingPage/index') ? '<p class="navbar-brand">HOW TO REGISTER </p>' : '';
        echo ($mainContent == 'landingPage/howToRequestFile') ? '<p class="navbar-brand">HOW TO REQUEST FILE </p>': '';
        echo ($mainContent == 'landingPage/login') ? '<p class="navbar-brand">LOGIN PAGE</p>' : '' ;
       ?>
     </div>
     <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
       <span class="sr-only">Toggle navigation</span>
       <span class="navbar-toggler-icon icon-bar"></span>
       <span class="navbar-toggler-icon icon-bar"></span>
       <span class="navbar-toggler-icon icon-bar"></span>
     </button>
     <div class="collapse navbar-collapse justify-content-end">
       <ul class="navbar-nav">
         <li class="nav-item <?php echo ($mainContent == 'landingPage/index') ? 'active': '' ; ?>">
           <a href="<?php echo base_url(); ?>" class="nav-link">
             <i class="material-icons">person_add</i>How To Register
           </a>
         </li>
         <li class="nav-item  <?php echo ($mainContent == 'landingPage/howToRequestFile') ? 'active': '' ; ?>">
           <a href="<?php echo base_url('howToRequestFile'); ?>" class="nav-link">
             <i class="material-icons">scatter_plot</i> How To Request Files
           </a>
         </li>
         <li class="nav-item <?php echo ($mainContent == 'landingPage/login') ? 'active': '' ; ?> ">
           <a href="<?php echo base_url('login'); ?>" class="nav-link">
             <i class="material-icons">fingerprint</i> Login
           </a>
         </li>
         <!-- <li class="nav-item ">
           <a href="lock.html" class="nav-link">
             <i class="material-icons">lock_open</i> Lock
           </a>
         </li> -->
       </ul>
     </div>
   </div>
 </nav>
  <!-- End Navbar -->

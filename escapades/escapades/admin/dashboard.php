<?php 
    require('inc/essentials.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">



 <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class="mb-0">ESCAPADES</h3>
    <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
 </div>
 <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2 text-light">ADMIN PANEL</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Settings</a>
            </li>
        </ul>
    </div>
  </nav>
 </div>
     



 <?php require('inc/scripts.php') ?>
</body>
</html>
<?php
session_start();

    // if(!isset($_SESSION['id'])) {
    //     header("Location:login.php");
    // }

require_once("header.php")
?>
<div class="row ">
    <div class="col-md-2 hvh-100 col-12 ps-5 pt-3 pe-0 bg-white position-fixed">
           <a href="index.php" class="logo fs-4 fw-bold"><span class="text-primary">T</span>eamy</a>
           <div class="d-flex align-items-center mt-5">
               <img src="assets/images/img.jpg" alt="image" class="img-rounded ">
               <div class="ms-2">
                   <h3 class="fs-3 fw-bold mb-0 text-dark">Ayoub Br</h3>
                   <p class="text-secondary mb-0">Project Manager</p>
               </div>
           </div>
           <p class="text-secondary mt-4">
               Today
           </p>
           <h1 class="fs-1 text-secondary fw-bold">
                <?php echo date("H:i") ?>
           </h1>
           <ul class="dashboard-links">
               <li class="my-5">
                   <a href="dashboard.php" class="link align-items-center d-flex">
                        <i class="ri-dashboard-line"></i>  
                        <span class="ms-4">Dashboard</span>
                    </a>
               </li>
               <li class="mb-5">
                   <a href="projects.php" class="link align-items-center d-flex">
                        <i class="ri-task-line"></i>  
                        <span class="ms-4">Projects</span>
                   </a>
               </li>
               <li class="mb-5">
                   <a href="message.php" class="link align-items-center d-flex">
                       <i class="ri-chat-1-line"></i> 
                       <span class="ms-4">Messages</span>
                   </a>
               </li>
               <li class="mb-5">
                   <a href="users.php" class="link align-items-center d-flex">
                       <i class="ri-user-line"></i>
                         <span class="ms-4">Users</span>
                    </a>
              </li>
               <li class="mb-5">
                    <a href="overview.php" class="link align-items-center d-flex">
                        <i class="ri-profile-line"></i> 
                        <span class="ms-4">Profile</span>     
                    </a>
               </li>
           </ul>
    </div>

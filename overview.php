<?php 
 require_once("includes/header.php"); 
 require_once("includes/sidebar.php") 

?>
<body style="background-color: #f6f9ff;">

<div class="ms-auto col-md-10">
      <div class="d-flex align-items-center pt-3 justify-content-between">
        <div class="text-dark fw-bold text-uppercase">
          Dashboard
        </div>
        <div class="d-flex align-items-center">
          <div class="position-relative">
            <input type="text" placeholder="Search" class="form-control">
            <i class="search-icon ri-search-line position-absolute"></i>
          </div> <a href="settings.php"><i class="ri-settings-2-line ms-3"></i></a>
          <a href=""></a><i class="ri-notification-line ms-3"></i>
        </div>
      </div><hr>
  <section class="section profile">
    <div class="row card-center">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="assets/images/profile-img.jpg" alt="Profile" class="rounded-circle">
            <h2>IZI OUSSAMA</h2>
            <h3>Web Develepment</h3>
            <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-6">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <a href="overview.php" class="nav-link active" >Overview</a>
              </li>

              <li class="nav-item">
              <a href="profile.php" class="nav-link" >Edit Profile</a>
              </li>

              <li class="nav-item">
                <a href="settings.php" class="nav-link" >Settings</a>
              </li>

            </ul>
            <div class="tab-content pt-2">
<div class="  profile-overview" id="profile-overview">
               

               <h5 class="card-title pt-3 pb-2">Profile Details</h5>

               <div class="row">
                 <div class="col-lg-3 col-md-4 label ">Full Name</div>
                 <div class="col-lg-9 col-md-8">IZI OUSSAMA</div>
               </div>

               <div class="row">
                 <div class="col-lg-3 col-md-4 label">Job</div>
                 <div class="col-lg-9 col-md-8">Web Develepment</div>
               </div>

               <div class="row">
                 <div class="col-lg-3 col-md-4 label">Phone</div>
                 <div class="col-lg-9 col-md-8">(212) 622296917</div>
               </div>

               <div class="row">
                 <div class="col-lg-3 col-md-4 label">Email</div>
                 <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
               </div>

             </div>
             </div><!-- End Bordered Tabs -->

</div>
</div>

</div>
</div>
</section>

</main><!-- End #main -->



<?php require_once("includes/footer.php") ?>
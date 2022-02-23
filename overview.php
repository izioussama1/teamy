<?php 
 require_once("includes/header.php"); 
 require_once("includes/sidebar.php") 

?>
<body class="bg-light">

<div class="col-md-10 col-12 bg-light ms-auto">
    <div class="container-fluid">
      <div class="d-flex align-items-center pt-3 justify-content-between">
        <div class="text-dark fw-bold text-uppercase">
          Dashboard
        </div>
        <div class="d-flex align-items-center">
          <div class="position-relative">
            <input type="text" placeholder="Search" class="form-control">
            <i class="ri-search-line position-absolute search-icon"></i>
          </div>
          <a href="settings.php" ><i class="ri-settings-2-line ms-3"></i></a>
          <i class="ri-notification-line ms-3"></i>
        </div>
      </div>
      <hr />
      
  <section class="section profile">
    <div class="row card-center">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="assets/images/profile-img.jpg" alt="Profile" class="rounded-circle">
            <h2>IZI OUSSAMA</h2>
            <h3>Web Develepment</h3>
            <div class="social-links mt-2">
              <a href="https://telegram.org/#" class="twitter" target="_blank"><i class="bi bi-telegram"></i></a>
              <a href="https://facebook.com/#" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/#" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://linkedin.com/#" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a> 
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
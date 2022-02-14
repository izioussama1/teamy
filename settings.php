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
          </div> <a href="settings.php#profile-settings"><i class="ri-settings-2-line ms-3"></i></a>
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
                <a href="overview.php" class="nav-link" >Overview</a>
              </li>

              <li class="nav-item">
              <a href="profile.php" class="nav-link" >Edit Profile</a>
              </li>

              <li class="nav-item">
                <a href="settings.php" class="nav-link active" >Settings</a>
              </li>

            </ul>
            <div class="tab-content pt-2">
              <div class=" pt-3 profile-overview" id="profile-settings">
                <!-- Settings Form -->
                <form>
                <h5 class="card-title pt-3 pb-2">Change Password</h5>
                <form>

                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-6">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-6">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-6">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>
                  </form><!-- End Change Password Form -->


                  <div class="row mb-3">
                    <h2 for="fullName" class="card-title col-md-4 col-lg-3 col-form-label">Email Notifications</h2>
                    <div class="col-md-8 col-lg-9">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="changesMade" checked>
                        <label class="form-check-label" for="changesMade">
                          Changes made to your account
                        </label>
                      </div>
                     
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                        <label class="form-check-label" for="securityNotify">
                          Security alerts
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form><!-- End settings Form -->
              </div>
            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->



<?php require_once("includes/footer.php") ?>

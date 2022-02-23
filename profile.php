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
                <a href="overview.php" class="nav-link" >Overview</a>
              </li>

              <li class="nav-item">
              <a href="profile.php" class="nav-link active" >Edit Profile</a>
              </li>

              <li class="nav-item">
                <a href="settings.php" class="nav-link" >Settings</a>
              </li>

            </ul>
            <div class="tab-content pt-2">
<div class=" profile-edit pt-3" id="profile-edit">

<!-- Profile Edit Form -->
<form>
  <div class="row mb-3">
    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
    <div class="col-md-8 col-lg-9">
      <img src="assets/images/profile-img.jpg" alt="Profile">
      <div class="pt-2">
        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
    <div class="col-md-8 col-lg-6">
      <input name="fullName" type="text" class="form-control" id="fullName" value="IZI OUSSAMA">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
    <div class="col-md-8 col-lg-6">
      <input name="job" type="text" class="form-control" id="Job" value="Web Develepment">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
    <div class="col-md-8 col-lg-6">
      <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
    <div class="col-md-8 col-lg-6">
      <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
    <div class="col-md-8 col-lg-6">
      <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
    <div class="col-md-8 col-lg-6">
      <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
    <div class="col-md-8 col-lg-6">
      <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Telegram" class="col-md-4 col-lg-3 col-form-label">Telegram Profile</label>
    <div class="col-md-8 col-lg-6">
      <input name="Telegram" type="text" class="form-control" id="Twitter" value="https://telegram.org/#">
    </div>
  </div>


  <div class="text-center">
    <button type="submit" class="btn btn-primary">Save Changes</button>
  </div>
</form><!-- End Profile Edit Form -->
</div>
</div><!-- End Bordered Tabs -->

</div>
</div>

</div>
</div>
</section>

</main><!-- End #main -->



<?php require_once("includes/footer.php") ?>
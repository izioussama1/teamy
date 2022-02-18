<?php
  require_once("includes/sidebar.php")
?>
<body class="bg-light ">
<div class="col-md-10 col-12 bg-light ms-auto">
        <div class="d-flex align-items-center pt-3 justify-content-between">
          <div class="text-dark fw-bold text-uppercase">
            Details
          </div>
          <div class="d-flex align-items-center">
            <div class="position-relative">
              <input type="text" placeholder="Search" class="form-control">
              <i class="ri-search-line position-absolute search-icon"></i>
            </div>
            <a href="settings.php"><i class="ri-settings-2-line ms-3"></i></a>
            <i class="ri-notification-line ms-3"></i>
          </div>
        </div>
  </div>

  <div class="col-md-10 col-12 bg-light ms-auto">
    <div class="container-fluid">
        <hr/>
        <div class="col-md-7 col-sm-3 col-12 mb-5">
              <div class="bg-white p-4">
                  <div class="d-flex justify-content-between align-items-center">
                      <div>
                          <span class="text-dark fw-bold">Status</span>
                          <h6 class="fs-6 text-warning fw-bold pt-2 lh-base w-80">In Progress</h6>
                      </div>
                      <div>
                          <span class="text-dark fw-bold">Created By</span>
                          <h6 class="fs-6 text-black fw-bold d-flex align-items-center justify-content-between pt-2 lh-base w-90"><img src="assets/images/img.jpg" class="picprofile me-2"> Izi & Ayoub </h6>
                      </div>
                      <div>
                          <span class="text-dark fw-bold">Creation Date</span>
                          <h6 class="fs-6 text-black fw-bold pt-2 lh-base w-80">Feb 14</h6>
                      </div>
                      <div class="rounded-circle text-orange w-5 m-2">
                          <i class="ri-check-line" data-width="100" data-height="100"></i>
                      </div>
                  </div>
                
              </div>
        </div>

        <div class="col-md-7 col-sm-3 col-12 mb-5">
              <div class="bg-white p-4">
                  <div class="d-flex justify-content-between align-items-center">
                      <div>
                          <span class="fs-4 text-black fw-bolder">Subtasks</span> 
                      </div>
                    <a href="create-subtask.php" class="btn btn-primary">+ Create Subtask</a>
                  </div>

                  <div class="mt-3 fs-5 d-flex justify-content-between">
                    <div>
                      <input type="checkbox" class="text-dark fw-bold me-3">Functionality development (php)</input>
                    </div>
                    <span class="text-red fs-6 ">Not finished</span>
                  </div>

                  <div class="mt-3 fs-5 d-flex justify-content-between">
                  <div>
                    <input type="checkbox" class="text-dark fw-bold me-3">Functionality development (php)</input>
                  </div>
                  <span class="text-warning fs-6 ">Waits for approval</span>
                  </div>

                <div class="mt-3 fs-5 d-flex justify-content-between">
                  <div>
                      <input type="checkbox" class="text-dark fw-bold me-3">Functionality development (php)</input>
                  </div>
                      <div class="d-flex align-items-center text-green">
                        <i class="ri-check-line" data-width="100" data-height="100"></i>
                        <span class=" fs-6 text-green">Approved</span>
                      </div>
                </div>
              </div>
        </div>

        <div class="col-md-7 col-sm-3 col-12 mb-5">
              <div class="bg-white p-4">
                  <div>
                    <span class="fs-4 text-black fw-bolder me-2">Task Details</span> 
                    <a href="#" class="text-gray fw-bold">Edit</a>
                  </div>
                  <div>
                    <h6 class="mt-5 fs-6 text-secondary ">Task Description</h6>
                    <label class="text-black mt-2 " type="text" name="task-description" id="task-description" value="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat dolor vel risus viverra, eget pulvinar nibh rhoncus. Mauris iaculis laoreet viverra. Vestibulum laoreet placerat quam, vitae mollis mauris pulvinar tempus. Integer eleifend metus ac augue consequat interdum. Vivamus sollicitudin eros eget nisi vehicula convallis. Etiam eget vehicula tortor, at interdum neque. Proin nisl nisi, vestibulum nec cursus fermentum, tristique sit amet eros.</label>
                  </div>
                  <div>
                    <h6 class="mt-5 fs-6 text-secondary">Files Attached <a href="#" class="text-gray fw-bold ms-1">Download All</a></h6>
                  </div>

                <div class="row">  
                    <div class="d-flex align-items-center col-4" id="images">
                      <img class="f-attach m-2" src="assets/images/hero-img.png" alt="attached image">
                      <div>
                      <h6 id="img-name">Image.png</h6>
                      <h6 id="img-size">36.8 KB</h6>
                      </div>
                    </div>
                    <div class="d-flex align-items-center col-4" id="images">
                      <img class="f-attach m-2" src="assets/images/hero-img.png" alt="attached image">
                      <div>
                      <h6 id="img-name">Image.png</h6>
                      <h6 id="img-size">36.8 KB</h6>
                      </div>
                    </div>
                    <div class="d-flex align-items-center col-4" id="images">
                      <img class="f-attach m-2" src="assets/images/hero-img.png" alt="attached image">
                      <div>
                      <h6 id="img-name">Image.png</h6>
                      <h6 id="img-size">36.8 KB</h6>
                      </div>
                    </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <h6 class="mt-2 fs-6 text-primary fw-bolder">Show All(41)</h6><i class="ri-arrow-down-s-line fs-6 text-primary fw-bolder"></i>
                    </div>
                    <div class="row col-12">
                        <h6 class="mt-4 fs-6 text-secondary col-6">Categories</h6>
                        <h6 class="mt-4 fs-6 text-secondary col-6">Deadline</h6>
                    </div>
                    <div class="row col-12">
                        <h6 class="mt-4 fs-6 fw-bold text-primary col-6">Design, Frontend</h6>
                        <h6 class="mt-4 fs-6 fw-bold text-black col-6">28 Jul</h6>
                    </div>  
                  <div class="mt-4">
                    <span class="fs-4 text-black fw-bolder me-2">Management</span> 
                    <a href="#" class="text-gray fw-bold">Edit</a>
                  </div>
                  <div>
                    <h6 class="mt-3 fs-6 text-secondary">Assigned to</h6>

                    <div class="row">
                    <h6 class="fs-6 text-black fw-bold d-flex align-items-center pt-2 lh-base w-90 col-4"><img src="assets/images/img.jpg" class="picprofile me-2"> Izi & Ayoub </h6>
                    <h6 class="fs-6 text-black fw-bold d-flex align-items-center pt-2 lh-base w-90 col-4"><img src="assets/images/img.jpg" class="picprofile me-2"> Izi & Ayoub </h6>
                    <h6 class="fs-6 text-black fw-bold d-flex align-items-center pt-2 lh-base w-90 col-4"><img src="assets/images/img.jpg" class="picprofile me-2"> Izi & Ayoub </h6>
                    </div>
                  </div>
              </div>
        </div>
      </div> 
    </div>
  </div>
</body>
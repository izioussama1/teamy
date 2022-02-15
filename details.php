<?php
  require_once("includes/sidebar.php")
?>
<body class="bg-light ">
    

  <div class="col-md-10 col-12 bg-light ms-auto">
    <div class="container-fluid">
      <div class="d-flex align-items-center pt-3 justify-content-between">
        <div class="text-dark fw-bold text-uppercase">
          Details
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
                        <span class="fs-5 text-dark fw-bolder">Subtasks</span> 
                    </div>
                  <a href="create.php" class="btn btn-primary">+ Create Subtask</a>
                   
                </div>
               
            </div>
      </div>
















    </div>
  </div>   
</body>
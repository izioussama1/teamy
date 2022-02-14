<?php
  require_once("includes/sidebar.php")
?>
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
          <i class="ri-settings-2-line ms-3"></i>
          <i class="ri-notification-line ms-3"></i>
        </div>
      </div>
      <hr />
      <div class="row mt-4 align-items-center">
        <div class="col-md-3 col-sm-6 col-12">
          <p class="fw-bold text-capitalize text-dark mb-1">tasks</p>
          <div class="rounded card  mt-3">
              <div class="d-flex p-4 align-items-center justify-content-between">
                <div class="rounded-circle border circle">
                    <i class="ri-loader-2-line fs-1 text-info"></i>
                </div>
                <div class="statistiques">
                  <h2 class="fs-2 fw-bold mb-0">
                    718+
                  </h2>
                  <p class="text-info mb-0">+11% more</p>
                    <p class="text-secondary">
                      than last month
                    </p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
        <p class="fw-bold text-capitalize text-dark mb-1">Project Done</p>
          <div class="rounded card  mt-3">
              <div class="d-flex p-4 align-items-center justify-content-between">
                <div class="rounded-circle border circle">
                    <i class="ri-loader-2-line fs-1 text-success"></i>
                </div>
                <div class="statistiques">
                  <h2 class="fs-2 fw-bold mb-0">
                    718+
                  </h2>
                  <p class="text-success mb-0">+11% more</p>
                    <p class="text-secondary">
                      than last month
                    </p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
        <p class="fw-bold text-capitalize text-dark mb-1">Company Files</p>
          <div class="rounded card  mt-3">
              <div class="d-flex p-4 align-items-center justify-content-between">
                <div class="rounded-circle border circle">
                    <i class="ri-loader-2-line fs-1 text-warning"></i>
                </div>
                <div class="statistiques">
                  <h2 class="fs-2 fw-bold mb-0">
                    718+
                  </h2>
                  <p class="text-warning mb-0">+11% more</p>
                    <p class="text-secondary">
                      than last month
                    </p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
        <p class="fw-bold text-capitalize text-dark mb-1">Company Members </p>
          <div class="rounded card  mt-3">
              <div class="d-flex p-4 align-items-center justify-content-between">
                <div class="rounded-circle border circle">
                    <i class="ri-loader-2-line fs-1 text-orange"></i>
                </div>
                <div class="statistiques">
                  <h2 class="fs-2 fw-bold mb-0">
                    718+
                  </h2>
                  <p class="text-orange mb-0">+11% more</p>
                    <p class="text-secondary">
                      than last month
                    </p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm-9 col-12">
          <p class="fw-bold text-capitalize text-dark mt-5">Tasks Done</p>
          <canvas id="myChart"></canvas>
        </div>
        <div class="col-sm-3 col-12">
          <p class="fw-bold text-capitalize text-dark mt-5">Current Project</p>
          <div class="bg-white shadow-none text-dark p-3 w-100 mt-5">
            <div class="d-flex align-items-center justify-content-between  mx-auto mt-4">
              <div class="mb-0">
                <?php echo date("M d Y") ?>
              </div>
              <div class="fs-4 mb-0">
                <i class="ri-menu-line"></i>
              </div>
            </div>
            <div class="mt-5 text-center">
              <h1 class="fs-1">Mobile App</h1>
              <h5 class="text-secondary fs-5"> Team Manage </h5>
            </div>
            <div class="my-5">
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-bold fs-6">Progress</h6>
                <p class="mb-0"> 50% </p> 
              </div>
              <div class="d-flex align-items-center mt-3">
                <div class="progress-bar">
                  <div class="bg-orange"></div>
                </div>
              </div>
            </div>
            <hr />
            <div class="d-flex align-items-center justify-content-between mt-5 pb-4">
                <div class="avatars">
                   <div class="avatar"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>  
                   <div class="avatar"><img src="assets/images/hero-bg.png" class="rounded-circle img-fluid" /></div>
                   <div class="avatar"><img src="assets/images/hero-img.png" class="rounded-circle img-fluid" /></div>
                   <div class="avatar d-flex align-items-center justify-content-center text-center"> <i class="ri-add-circle-line fs-2 w-100 img-fluid"></i></div>
                </div>
                <div class="bg-light-darker text-white rounded p-1 px-2">
                  3 Week Left
                </div>
            </div>
          </div>
         </div>
        </div>
        <p class="fw-bold text-capitalize text-dark mt-5">Teams</p>
        <div class="bg-white mt-5 shadow-none p-4">
        <table class="table  datatable ">
                    <thead>
                      <tr>
                        <th scope="col">Team</th>
                        <th scope="col">Members</th>
                        <th scope="col">Current Project</th>
                        <th scope="col">Files Uploaded</th>
                        <th scope="col">Project Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>A</td>
                        <td> 
                          <div class="avatars">
                            <div class="avatar mt-0"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>  
                            <div class="avatar mt-0"><img src="assets/images/hero-bg.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0"><img src="assets/images/hero-img.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0 d-flex align-items-center justify-content-center text-center"> <i class="ri-add-circle-line fs-2 w-100 img-fluid"></i></div>
                          </div>
                        </td>
                        <td >
                          <a href="#">Team Manage </a>
                          <span class="mb-0 ms-3"> 50% </span> 
                        </td>
                        <td>158</td>
                        <td><span class="badge bg-success">Reviewed</span></td>
                      </tr>
                      <tr>
                        <td>B</td>
                        <td> 
                          <div class="avatars">
                            <div class="avatar mt-0"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>  
                            <div class="avatar mt-0"><img src="assets/images/hero-bg.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0"><img src="assets/images/hero-img.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0 d-flex align-items-center justify-content-center text-center"> <i class="ri-add-circle-line fs-2 w-100 img-fluid"></i></div>
                          </div>
                        </td>
                        <td >
                          <a href="#">Team Manage </a>
                          <span class="mb-0 ms-3"> 50% </span> 
                        </td>
                        <td>158</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <td>C</td>
                        <td> 
                          <div class="avatars">
                            <div class="avatar mt-0"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>  
                            <div class="avatar mt-0"><img src="assets/images/hero-bg.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0"><img src="assets/images/hero-img.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0 d-flex align-items-center justify-content-center text-center"> <i class="ri-add-circle-line fs-2 w-100 img-fluid"></i></div>
                          </div>
                        </td>
                        <td >
                          <a href="#">Team Manage </a>
                          <span class="mb-0 ms-3"> 50% </span> 
                        </td>
                        <td>158</td>
                        <td><span class="badge bg-success">Reviewed</span></td>
                      </tr>
                      <tr>
                        <td>D</td>
                        <td> 
                          <div class="avatars">
                            <div class="avatar mt-0"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>  
                            <div class="avatar mt-0"><img src="assets/images/hero-bg.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0"><img src="assets/images/hero-img.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0 d-flex align-items-center justify-content-center text-center"> <i class="ri-add-circle-line fs-2 w-100 img-fluid"></i></div>
                          </div>
                        </td>
                        <td >
                          <a href="#">Team Manage </a>
                          <span class="mb-0 ms-3"> 50% </span> 
                        </td>
                        <td>158</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <td>E</td>
                        <td> 
                          <div class="avatars">
                            <div class="avatar mt-0"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>  
                            <div class="avatar mt-0"><img src="assets/images/hero-bg.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0"><img src="assets/images/hero-img.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0 d-flex align-items-center justify-content-center text-center"> <i class="ri-add-circle-line fs-2 w-100 img-fluid"></i></div>
                          </div>
                        </td>
                        <td >
                          <a href="#">Team Manage </a>
                          <span class="mb-0 ms-3"> 50% </span> 
                        </td>
                        <td>158</td>
                        <td><span class="badge bg-success">Reviewed</span></td>
                      </tr>
                    </tbody>
                  </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
 require_once("includes/footer.php")
?>
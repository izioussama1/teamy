<?php
  require_once("includes/sidebar.php")
?>
  <div class="col-md-10 col-12 bg-light ms-auto">
    <div class="container-fluid">
      <div class="d-flex align-items-center pt-3 justify-content-between">
        <div class="text-dark fw-bold text-uppercase">
          Files
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
      <div class="row ">
        <div class="col-sm-6 col-12">
          <p class="fw-bold text-capitalize text-dark mt-5">Recent Files</p>
          <div class="bg-white mt-3 shadow-none p-4">
        <table class="table  datatable ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">File Name</th>
                        <th scope="col">Date Uploaded</th>
                        <th></th>
                        <th></th>
                        <th scope="col ms-auto">File Size</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            <div class="avatars">
                                <div class="avatar mt-0"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>
                            </div>
                        </td>
                        <td >
                          <span> brief.doc </span> <br>
                        </td>
                        <td>
                            <span class="mb-0"> 2022/02/15 </span> 
                        </td>
                        <td></td>
                        <td></td>
                        <td class="ms-auto">5MB</td>
                      </tr>
                      <tr>
                        <td>
                            <div class="avatars">
                                <div class="avatar mt-0"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>
                            </div>
                        </td>
                        <td >
                          <span> brief.doc </span> <br>
                        </td>
                        <td>
                            <span class="mb-0"> 2022/02/15 </span> 
                        </td>
                        <td></td>
                        <td></td>
                        <td class="ms-auto">5MB</td>
                      </tr>
                      <tr>
                        <td>
                            <div class="avatars">
                                <div class="avatar mt-0"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>
                            </div>
                        </td>
                        <td >
                          <span> brief.doc </span> <br>
                        </td>
                        <td>
                            <span class="mb-0"> 2022/02/15 </span> 
                        </td>
                        <td></td>
                        <td></td>
                        <td class="ms-auto">5MB</td>
                      </tr>
                      <tr>
                        <td>
                            <div class="avatars">
                                <div class="avatar mt-0"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>
                            </div>
                        </td>
                        <td >
                          <span> brief.doc </span> <br>
                        </td>
                        <td>
                            <span class="mb-0"> 2022/02/15 </span> 
                        </td>
                        <td></td>
                        <td></td>
                        <td class="ms-auto">5MB</td>
                      </tr>
                    </tbody>
                  </table>
        </div>
        </div>
        <div class="col-sm-6 col-12">
          <p class="fw-bold text-capitalize text-dark mt-5">Files</p>
          <div class="bg-white shadow-none text-dark p-3 w-100 mt-3">
            <canvas class="h-100" id="myChart2"></canvas>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
 require_once("includes/footer.php")
?>
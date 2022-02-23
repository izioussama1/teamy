<?php
  require_once("config/db.php");
  require_once("includes/sidebar.php");

  $task = "SELECT * FROM `tasks`";
  $result1 = mysqli_query($conn , $task);

  $project = "SELECT * FROM `projects` WHERE `status` = 'Done'";
  $result2 = mysqli_query($conn , $project);

  $users = "SELECT * FROM `users`";
  $result3 = mysqli_query($conn , $users);

  $file = "SELECT * FROM `files`";
  $result4 = mysqli_query($conn , $file);

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
                  <i class="ri-task-line fs-1 text-info"></i>
                </div>
                <div class="statistiques">
                  <h2 class="fs-2 fw-bold mb-0">
                    <?php echo mysqli_num_rows($result1) ?>
                  </h2>
                  <p class="text-info mb-0">+5% more</p>
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
                  <?php echo mysqli_num_rows($result2) ?>
                  </h2>
                  <p class="text-success mb-0">-12% more</p>
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
                    <i class="ri-file-line fs-1 text-warning"></i>
                </div>
                <div class="statistiques">
                  <h2 class="fs-2 fw-bold mb-0">
                      <?php echo mysqli_num_rows($result4) ?>
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
                    <i class="ri-user-line fs-1 text-orange"></i>
                </div>
                <div class="statistiques">
                  <h2 class="fs-2 fw-bold mb-0">
                     <?php echo mysqli_num_rows($result3) ?>
                  </h2>
                  <p class="text-orange mb-0">+2% more</p>
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
              <?php 
                $project = "SELECT * FROM `projects` ORDER BY `id` DESC LIMIT 1";
                $last = mysqli_query($conn , $project);
                while ($row = mysqli_fetch_assoc($last)) {
                  $date= date_create($row["deadline"]);
              ?>
                  <div class="bg-white shadow-none text-dark p-3 w-100 mt-5">
                    <div class="d-flex align-items-center justify-content-between  mx-auto mt-4">
                      <div class="mb-0">
                        <?php echo date_format( $date ,"M d Y")  ?>
                      </div>
                      <div class="fs-4 mb-0">
                        <i class="ri-menu-line"></i>
                      </div>
                    </div>
                    <div class="mt-5 text-center">
                      <h1 class="fs-1"><?php echo $row['client'] ?></h1>
                      <h5 class="text-secondary fs-5 text-capitalize"> <?php echo $row['title'] ?> </h5>
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
                          <div class="avatar d-flex align-items-center justify-content-center text-center fw-bold"> 34 </div>
                        </div>
                        <div class="bg-light-darker text-white rounded p-1 px-2">
                          3 Week Left
                        </div>
                    </div>
                  </div>
             <?php } ?>
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
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $team = "SELECT * FROM `team`";
                        $result6 = mysqli_query($conn , $team);
                        while ($row = mysqli_fetch_assoc($result6)) {
                          $id = $row['id'];
                          $name =$row['name'];
                      ?>
                      <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td> 
                          <div class="avatars">
                            <?php 
                              $avatar = "SELECT * FROM `users` WHERE `team_id` = '$id' LIMIT 3";
                              $result6 = mysqli_query($conn , $avatar);
                              while ($row2 = mysqli_fetch_assoc($result6)) { ?>
                                <div class="avatar mt-0"><img src="<?php echo $row2["image"] ?>" class="rounded-circle img-fluid" /></div>  
                              <?php } ?>
                              <div class="avatar mt-0 d-flex align-items-center justify-content-center text-center fw-bold"> <?php echo mysqli_num_rows($result6) ?> </div>
                          </div>
                        </td>
                        <td >
                        <?php 
                              $projects = "SELECT * FROM `projects` WHERE `assigned_to` = '$name' ORDER BY `id` DESC LIMIT 1";
                              $result5 = mysqli_query($conn , $projects);
                              while ($row3 = mysqli_fetch_assoc($result5)) { ?>
                                <a href="#"><?php echo $row3['title']  ?></a>
                                <span class="mb-0 ms-3"> 50% </span>  
                         <?php } ?>
                        </td>
                        <td>
                          <?php 
                            $files = "SELECT * FROM `files` WHERE `team_id` = '$id'";
                            $result7 = mysqli_query($conn , $files);   ?>
                              <span class="mb-0 ms-3"> <?php echo mysqli_num_rows($result7) ?> </span>  
                          </td>
                     </tr>
                     <?php } ?>
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
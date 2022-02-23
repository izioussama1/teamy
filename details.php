<?php
  require_once("config/db.php");

  $id = $_GET['id'];
  $sql = "SELECT * FROM `tasks` WHERE `id` = '$id'";
  $result = mysqli_query($conn , $sql);

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
    <hr class="mt-2"/>
       <?php while ($row = mysqli_fetch_assoc($result)) { 
          $project_id = $row['project_id'];
          $date = date_create($row["Creation"]);
          $date2 = date_create($row["deadline"]);
       ?>
           <div class="container-fluid row">
              <div class="col-sm-7 col-12 mb-5">
                    <div class="bg-white shadow-sm p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-dark fw-bold">Status</span>
                                <?php 
                                    if( $row["status"] == "Not Started") {
                                            echo "<h6 class='text-danger fs-6 pt-2 lh-base w-80 fw-bold'>
                                            Not Started</h6>";
                                    } elseif ($row["status"] == "In Progress") {
                                            echo "<h6 class='text-warning fs-6 pt-2 lh-base w-80 fw-bold'>
                                            In Progress</h6>";
                                    } elseif ($row["status"] == "Done") {
                                            echo "<h6 class='text-success fs-6 pt-2 lh-base w-80 fw-bold'>
                                            Done</h6>";
                                    } else {
                                            echo "<h6 class='text-primary fs-6 pt-2 lh-base w-80 fw-bold'>
                                            Paused</h6>";
                                    }
                                ?>
                            </div>
                            <div>
                              <?php 
                               
                                $sql2 = "SELECT * FROM `projects` WHERE `id` = '$project_id'";
                                $result2 = mysqli_query($conn , $sql2);  
                                while ($row2 = mysqli_fetch_assoc($result2)) { 
                                  $assignedTo = $row2['assigned_to'];
                                  $sql3 = "SELECT * FROM `team` WHERE `id` = '$assignedTo'";
                                  $result3 = mysqli_query($conn , $sql3);  
                                  while ($row3 = mysqli_fetch_assoc($result3)) {  ?>
                                  <span class="text-dark fw-bold">Assigned To</span>
                                  <h6 class="fs-6 text-black fw-bold d-flex align-items-center justify-content-between pt-2 lh-base w-90"><img src="<?php echo $row3['image'] ?>" class="picprofile me-2"> <?php echo $row3['name'] ?> </h6>
                                <?php }} ?>
                            </div>
                            <div>
                                <span class="text-dark fw-bold">Creation Date</span>
                                <h6 class="fs-6 text-black fw-bold pt-2 lh-base w-80"> <?php echo date_format( $date ,"M d")  ?> </h6>
                            </div>
                            <div class="rounded-circle text-orange w-5 m-2">
                                <?php 
                                      if( $row["status"] == "Not Started") {
                                          echo "<div class='rounded-circle w-5 b-danger'><i class='ri-close-line text-danger'></i> </div>";
                                      } elseif ($row["status"] == "In Progress") {
                                          echo " <div class='rounded-circle w-5 b-warning'><i class='ri-loader-4-fill text-warning'></i> </div>";
                                      } elseif ($row["status"] == "Done") {
                                          echo "<div class='rounded-circle w-5 b-success'><i class='ri-check-line text-success'></i> </div>";
                                      } else {
                                          echo "<div class='rounded-circle w-5 b-pause'><i class='ri-pause-line text-primary'></i> </div>";
                                      }
                                ?>
                            </div>
                        </div>
                      </div>
                    
                    <div class="bg-white shadow-sm p-4 mt-5">
                      <div class="d-flex justify-content-between align-items-center">
                          <div>
                              <span class="fs-4 text-black fw-bolder">Subtasks</span> 
                          </div>
                          <a href="create-subtask.php?task_id=<?php echo $id ?>&team_id=<?php      
                            $sql4 = "SELECT * FROM `projects` WHERE `id` = '$project_id'";
                            $result4 = mysqli_query($conn , $sql4);  
                                while ($row4 = mysqli_fetch_assoc($result4)) { 
                                  $assignedTo = $row4['assigned_to'];
                                  echo $assignedTo;
                                }
                          ?>"
                           class="btn btn-primary">+ Create Subtask</a>
                        </div>
                        
                        
                        <?php 
                            $sql5 = "SELECT * FROM `subtask` WHERE `task_id` = '$id'";
                            $result5 = mysqli_query($conn , $sql5);  
                                while ($row5 = mysqli_fetch_assoc($result5)) { 
                                  ?>
                            <div class="mt-3 fs-5 d-flex justify-content-between">
                                <div>
                                  <input type="checkbox" class="text-dark fw-bold me-3"><?php echo $row5['title'] ?></input>
                                </div>
                                <span class="text-warning fs-6 "><?php echo $row5['status'] ?></span>
                            </div>
                        <?php 
                                }
                        ?>
                        </div>
                  <div class="bg-white shadow-sm p-4 mt-5">
                      <div>
                        <span class="fs-4 text-black fw-bolder me-2">Task Details</span> 
                        <a href="#" class="text-secondary fw-bold">Edit</a>
                      </div>
                      <div>
                        <h6 class="mt-5 fs-6 text-secondary ">Task Description</h6>
                        <p class="text-black mt-2 fw-bold"  id="task-description" >
                            <?php echo $row['details'] ?>          
                        </p>
                      </div>
                      <div>
                        <h6 class="mt-5 fs-6 text-secondary">Files Attached <a href="#" class="text-secondary fw-bold ms-1">Download All</a></h6>
                      </div>
                      
                      <div class="row">  
                        <?php 
                          $sql6 = "SELECT * FROM `files` WHERE `task_id` = '$id' LIMIT 6";
                          $result6 = mysqli_query($conn , $sql6);  
                              while ($row6 = mysqli_fetch_assoc($result6)) { 
                               
                        ?>
                        <div class="d-flex align-items-center col-sm-2 col-12" id="images">
                          <img class="f-attach m-2" src="<?php echo $row6['name'] ?>" alt="attached image">
                          <div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                    <!-- <div class="d-flex align-items-center">
                      <h6 class="mt-2 fs-6 text-primary fw-bolder cursor">Show All (41) </h6><i class="ri-arrow-down-s-line fs-6 text-primary fw-bolder"></i>
                    </div> -->
                    <div class="row col-12">
                      <h6 class="mt-4 fs-6 text-secondary col-6">Categories</h6>
                      <h6 class="mt-4 fs-6 text-secondary col-6">Deadline</h6>
                    </div>
                    <div class="row col-12">
                      <h6 class="mt-4 fs-6 fw-bold text-primary col-6"><?php echo $row['category'] ?></h6>
                      <h6 class="mt-4 fs-6 fw-bold text-black col-6"><?php echo date_format( $date2 ,"M d")  ?></h6>
                    </div>  
                    <div class="mt-4">
                      <span class="fs-4 text-black fw-bolder me-2">Management</span> 
                      <a href="#" class="text-secondary fw-bold">Edit</a>
                    </div>
                    <div>
                      <h6 class="mt-3 fs-6 text-secondary">Assigned to</h6>
                      
                      <div class="row">
                        <?php 
                         $sql8 = "SELECT * FROM `projects` WHERE `id` = '$project_id'";
                         $result8 = mysqli_query($conn , $sql8);  
                          while ($row8 = mysqli_fetch_assoc($result8)) { 
                            $assignedTo = $row8['assigned_to'];
                            $sql7 = "SELECT * FROM `users` WHERE `team_id` = '$assignedTo'";
                            $result7 = mysqli_query($conn , $sql7);  
                             while ($row7 = mysqli_fetch_assoc($result7)) { ?>
                                <h6 class="fs-6 text-black fw-bold d-flex align-items-center pt-2 lh-base w-90 col-4"><img src="<?php echo $row7['image'] ?>" class="picprofile me-2"> <?php echo $row7['username'] ?> </h6>
                          <?php }} ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <div class="col-sm-4 col-12">
                <div class="bg-white shadow-sm p-4">
                  <div>
                    <span class="text-dark fw-bold">Discussions</span>
                  </div>
                        <div class="mt-4">
                          <input class="form-control" type="text" placeholder="Write a comments..." >
                        </div> 
                        <div class="d-flex align-items-center">
                          <h6 class="fs-6 text-black fw-bold d-flex align-items-center pt-2 lh-base w-90 col-4"><img src="assets/images/img.jpg" class="picprofile me-2"> Izi & Ayoub  </h6><span >2 Days ago</span>
                        </div>                        
                        <p>Everything is clear, thank you very much </p>
                      </div>
                    </div>
                  </div>   
                </div>
              </div>
</body>
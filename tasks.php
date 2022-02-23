<?php
  require_once("config/db.php");
  $id = $_GET['id'];
  $sql = "SELECT * FROM `tasks` WHERE `project_id` = '$id'";
  $result = mysqli_query($conn , $sql);
  require_once("includes/sidebar.php");
?>
  <div class="col-md-10 col-12 bg-light ms-auto">
    <div class="container-fluid">
      <div class="d-flex align-items-center pt-3 justify-content-between">
        <div class="text-dark fw-bold text-uppercase">
         All Tasks
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
      <div class="bg-white w-100 p-3 shadow-none">
            <div class="d-flex align-items-center justify-content-between">
                <div class="ms-2 d-flex align-items-center">
                    <a href="#" class="text-dark d-flex align-items-center me-4">Status <span class="fw-bold d-flex align-items-center ms-2">Any <i class="ri-arrow-down-s-line "></i></span></a>
                    <a href="#" class="text-dark d-flex align-items-center me-4">Asigned to <span class="fw-bold d-flex align-items-center ms-2">Anyone <i class="ri-arrow-down-s-line "></i></span></a>
                    <a href="#" class="text-dark d-flex align-items-center me-4">Sort by<span class="fw-bold d-flex align-items-center ms-2"> Creation Date <i class="ri-arrow-down-s-line "></i></span></a>
                </div>
                <a href="create-task.php?project_id=<?php echo $id ?>" class="btn btn-primary">+ Create New Task</a>
            </div>
      </div>
    <div class="d-flex mt-5 align-items-center justify-content-between pb-5">
        <h6 class="fw-bold text-secondary"><?php echo mysqli_num_rows($result) ?> Tasks in result</h6>
        <div class="d-flex text-dark fw-bold align-items-center">
            <p class="mb-0 me-4">
                Views 
            </p>
            <div class="align-items-center text-primary d-flex me-4" >
                <i class="ri-microsoft-line"></i>
               <span class="pb-0 ps-1">Cards</span> 
            </div>
            <div class="align-items-center text-info d-flex " >
            <i class="ri-list-unordered"></i>
               <span class="pb-0 ps-1">List</span> 
            </div>
        </div>
    </div>

    <div class="row">
    <?php
         while ($row = mysqli_fetch_assoc($result)) { 
           $date=date_create($row["deadline"]);
    ?>
        <div class="col-md-4 col-sm-3 col-12 mb-5">
            <div class="bg-white shadow-sm p-4">
                <div class="d-flex justify-content-between">
                    <div>
                    <?php 
                        if( $row["status"] == "Not Started") {
                                echo "<span class='text-danger fw-bold'>
                                Not Started</span>";
                        } elseif ($row["status"] == "In Progress") {
                                echo "<span class='text-warning fw-bold'>
                                In Progress</span>";
                        } elseif ($row["status"] == "Done") {
                                echo "<span class='text-success fw-bold'>
                                Done</span>";
                        } else {
                                 echo "<span class='text-primary fw-bold'>
                                Paused</span>";
                        }
                    ?>
                    <a href="details.php?id=<?php echo $row['id'] ?>" class="fs-6 d-block text-dark fw-bold pt-2 lh-base text-capitalize"><?php echo $row["title"] ?></a>
                    </div>
                   
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
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                            <span> <?php echo date_format( $date ,"M d")  ?> </span>
                               <div class="d-flex align-items-center ms-2">
                                 <i class="ri-chat-2-line"></i>
                                 <p class="mb-0 ms-1">19</p>
                             </div>
                    </div>
                    <div class="me-10">
                        <div class="avatars">
                            <div class="avatar mt-0 top-12"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>  
                            <div class="avatar mt-0 top-12"><img src="assets/images/hero-bg.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0 top-12"><img src="assets/images/hero-img.png" class="rounded-circle img-fluid" /></div>
                            <div class="avatar mt-0 top-12 d-flex align-items-center justify-content-center text-center fw-bold">9</div>
                        </div>
                    </div>
                </div>
                <span name="sub" class="text-primary d-flex align-items-center cursor fw-bold">View Subtasks (1) <i class="ri-arrow-down-s-line"></i> </span>
            </div>
         </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php
 require_once("includes/footer.php")
?>
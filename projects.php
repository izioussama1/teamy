<?php
  require_once("config/db.php");
  require_once("includes/sidebar.php");
  $sql = "SELECT * FROM `projects`";
  $result = mysqli_query($conn , $sql);
?>
  <div class="col-md-10 col-12 bg-light ms-auto">
    <div class="container-fluid">
      <div class="d-flex align-items-center pt-3 justify-content-between">
        <div class="text-dark fw-bold text-uppercase">
         All Projects
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
                <a href="create.php" class="btn btn-primary">+ Create New Project</a>
            </div>
      </div>
    <div class="d-flex mt-5 align-items-center justify-content-between pb-5">
        <h6 class="fw-bold text-secondary"><?php echo mysqli_num_rows($result) ?> projects in result</h6>
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
                                    <span class="text-warning fw-bold"><?php echo $row["status"] ?></span>
                                    <a href="tasks.php?id=<?php echo $row['id'] ?>" class="fs-6 d-block text-dark fw-bold pt-2 lh-base text-capitalize"><?php echo $row["title"] ?></a>
                                    <h6 class="fs-6 fw-bold pt-2 lh-base text-capitalize"><?php echo $row["client"] ?></h6>
                                </div>
                                <span> <?php echo date_format( $date ,"M d")  ?> </span>
                            </div>
                        <div class="me-10">
                            <div class="avatars">
                                    <div class="avatar mt-0 top-12"><img src="assets/images/img.jpg" class="rounded-circle img-fluid" /></div>  
                                    <div class="avatar mt-0 top-12"><img src="assets/images/hero-bg.png" class="rounded-circle img-fluid" /></div>
                                    <div class="avatar mt-0 top-12"><img src="assets/images/hero-img.png" class="rounded-circle img-fluid" /></div>
                                    <div class="avatar mt-0 top-12 d-flex align-items-center justify-content-center text-center fw-bold">12</div>
                            </div>
                        </div>
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
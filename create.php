    <?php

        require_once("config/db.php");
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
         
                          $title = $_POST['title'];
                          $client = $_POST['Client'];
                          $deadline = $_POST['deadline'];
                          $assignedto = $_POST['assignedto'];
                          $note = $_POST['note'];
                          $activated = $_POST['active'];

                        //   echo $activated;

                        //   if(isset($_POST['active'])) {
                        //       echo $active;
                        //   }
                          
                        //   $project = "INSERT INTO projects  (`title` , `deadline` , `status`) VALUES ('$title' , '$deadline' , '$active' )";
                        //      if (mysqli_query($conn , $project)) {
                        //           header("Location:projects.php");
                        //     } else {
                        //             echo "fucked up";
                        //     }
          }

    require_once("includes/sidebar.php");
    ?>
    <div class="col-md-10 col-12 bg-light ms-auto">
        <div class="container-fluid">
                <div class="d-flex align-items-center pt-3 justify-content-between">
                    <div class="text-dark fw-bold text-uppercase">Create New Project</div>
                    <div class="d-flex align-items-center">
                    <div class="position-relative">
                        <input type="text" placeholder="Search" class="form-control">
                        <i class="ri-search-line position-absolute search-icon"></i>
                    </div>
                    <i class="ri-settings-2-line ms-3"></i>
                    <i class="ri-notification-line ms-3"></i>
                </div>
            </div>
        </div>
        <hr /> 
            <div class="bg-white p-4 shadow-sm row">
                <h1 class="fs-1 fw-bold my-2 text-dark ">Add New Project</h1>
                <hr />
                    <form method="POST"  class="row">
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center">
                                <span class="rounde text-primary fw-bold"> 1 </span> 
                                <h5 class="fs-5 fw-bold text-primary ms-2 my-4">  Projects Details</h5>
                            </div>
                            <div class="mb-4">
                                <label for="Title" class="form-label text-dark fw-bold"> Title</label>
                                <input type="text" class="form-control" name="title" id="Title" placeholder="e . g Website Design">
                            </div>
                           
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <label for="deadlin" class="form-label text-dark fw-bold">Deadline Date</label>
                                    <input type="date" class="form-control" name="deadline" id="deadlin" >
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="Client" class="form-label text-dark fw-bold">Client</label>
                                    <input type="text" class="form-control" name="Client" id="Client" placeholder="Client">
                                </div>
                            </div>
                            <h5 class="fs-5 text-dark fw-bold mt-5">Attached Files</h5>
                            <label class="custom-file-upload mt-4 bg-light d-flex text-center align-items-center justify-content-center">
                                <input type="file" name="create"/>
                                <div class="input-file-content ">
                                    <i class="ri-upload-cloud-line fs-1"></i>
                                    <p class="fw-bold mb-0 fs-5">Drop Files Here Or Click To Select</p>
                                    <p class="mb-0">Up To 5Mb</p>
                                </div>
                            </label>
                            <input type="file" name="file" id="file">
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center ">
                                <span class="rounde text-primary fw-bold"> 2 </span> 
                                <h5 class="fs-5 fw-bold text-primary ms-2 my-4">  Management</h5>
                            </div>
                            <div class="mb-4">
                                <label  class="form-label text-dark fw-bold">Status</label>
                                <div class="row">
                                    <div class="col-sm-3 col-6">
                                        <input type="button" value="Not Started" id="not-started" class="w-100 n-active btn btn-outline-danger " />
                                    </div>
                                    <div class="col-sm-3 col-6">
                                        <input type="button"  value="Paused" id="paused" class="w-100 n-active btn btn-outline-primary">
                                    </div>
                                    <div class="col-sm-3 col-6">
                                        <input type="button"  value="In Progress" id="progress" class="w-100 n-active btn btn-outline-warning">
                                    </div>
                                    <div class="col-sm-3 col-6">
                                        <input type="button"  value="Done" id="done" class="w-100 n-active btn btn-outline-success">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="Asigned" class="form-label text-dark fw-bold"> Assigned To</label>
                                <select name="assignedto" class="form-control" id="assignedto">
                                    <?php 
                                        $query = "SELECT * FROM `team`";
                                        $result1 = mysqli_query($conn , $query);
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                    ?>
                                            <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="notes" class="form-label text-dark fw-bold">Notes</label>
                                <textarea class="form-control" id="notes" rows="4" name="note" placeholder="e . g Add Your Note" style="resize: none;"></textarea>
                            </div>
                            <div class="mb-4">
                                <a href="projects.php" class="btn btn-dark me-3">Cancel</a>
                                <button type="submit" class="btn btn-primary" name="submit">Proceed</button>
                            </div>
                        </div>
                    </form>
            </div>
    </div>
    </div>
    <?php
    require_once("includes/footer.php")
    ?>
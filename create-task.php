<?php
 require_once("config/db.php");
        
 // Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {
     $target_dir = "uploads/";
     $target_file = $target_dir . basename($_FILES["create"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     // Check file size
     if ($_FILES["create"]["size"] > 5000000) {
         echo "Sorry, your file is too large.";
         $uploadOk = 0;
         }

             // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
           echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
      } else {
               if (move_uploaded_file($_FILES["create"]["tmp_name"], $target_file)) {
                   $title = $_POST['title'];
                   $client = $_POST['Client'];
                   $deadline = $_POST['deadline'];
                   $assignedto = $_POST['assignedto'];
                   $note = $_POST['note'];

                   if(isset($_POST['active'])) {
                       $active = $_POST['active'];
                       echo $active;
                   }
                   
                 //   $project = "INSERT INTO projects  (`title` , `deadline` , `status`) VALUES ('$title' , '$deadline' , '$active' )";
                 //      if (mysqli_query($conn , $project)) {
                 //           header("Location:projects.php");
                 //     } else {
                 //             echo "fucked up";
                 //     }
                } else {
                     echo "Sorry, there was an error uploading your file.";
                }
      }
   }

    require_once("includes/sidebar.php")
    ?>
    <div class="col-md-10 col-12 bg-light ms-auto">
        <div class="container-fluid">
                <div class="d-flex align-items-center pt-3 justify-content-between">
                    <div class="text-dark fw-bold text-uppercase">Create New Task</div>
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
                <h1 class="fs-1 fw-bold my-2 text-dark ">Add New Task</h1>
                <hr />
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center">
                                <span class="rounde text-primary fw-bold"> 1 </span> 
                                <h5 class="fs-5 fw-bold text-primary ms-2 my-4">  Task Details</h5>
                            </div>
                            <div class="mb-4">
                                <label for="Title" class="form-label text-dark fw-bold"> Title</label>
                                <input type="text" class="form-control" id="Title" placeholder="e . g Website Design">
                            </div>
                            <div class="mb-4">
                                <label for="details" class="form-label text-dark fw-bold">Task Details</label>
                                <textarea class="form-control" id="details" rows="4" placeholder="e . g Describe the Task to all members" style="resize: none;"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <label for="deadlin" class="form-label text-dark fw-bold">Deadline Date</label>
                                    <input type="text" class="form-control" id="deadlin" placeholder="_ _ / _ _ / _ _">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="Category" class="form-label text-dark fw-bold">Category</label>
                                    <input type="text" class="form-control" id="Category" placeholder="Category">
                                </div>
                            </div>
                            <h5 class="fs-5 text-dark fw-bold mt-5">Attached Files</h5>
                            <label class="custom-file-upload mt-4 bg-light d-flex text-center align-items-center justify-content-center">
                                <input type="file"/>
                                <div class="input-file-content ">
                                    <i class="ri-upload-cloud-line fs-1"></i>
                                    <p class="fw-bold mb-0 fs-5">Drop Files Here Or Click To Select</p>
                                    <p class="mb-0">Up To 3Mb</p>

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
                                        <button class="w-100 btn btn-orange text-white ">Not Started</button>
                                    </div>
                                    <div class="col-sm-3 col-6">
                                        <button class="w-100 btn btn-primary text-white">Paused</button>
                                    </div>
                                    <div class="col-sm-3 col-6">
                                        <button class="w-100 btn btn-warning text-white">In Progress</button>
                                    </div>
                                    <div class="col-sm-3 col-6">
                                        <button class="w-100 btn btn-success text-white">Done</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="Asigned" class="form-label text-dark fw-bold"> Assigned To</label>
                                <select name="assignedto" class="form-control" id="assignedto">
                                    <option value="Izi Oussama">Izi Oussama</option>
                                    <option value="Ayoub Berouijel">Ayoub Berouijel</option>
                                    <option value="Mouad Weld L9af">Mouad Weld L9af</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="notes" class="form-label text-dark fw-bold">Notes</label>
                                <textarea class="form-control" id="notes" rows="4" placeholder="e . g Add Your Note" style="resize: none;"></textarea>
                            </div>
                            <div class="mb-4">
                                <button class="btn btn-dark me-3">Cancel</button>
                                <button class="btn btn-primary">Proceed</button>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
    </div>
    <?php
    require_once("includes/footer.php")
    ?>
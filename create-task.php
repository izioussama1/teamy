<?php
 require_once("config/db.php");

 $id = $_GET['project_id'];
        
 // Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {
     $target_dir = "uploads/tasks/";
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
                   $details = $_POST['details'];
                   $deadline = $_POST['deadline'];
                   $category = $_POST['category'];
                   $status = $_POST['Status'];
                   $note = $_POST['note'];

                   
                   $task = "INSERT INTO tasks (`title` , `details` , `deadline` , `category` , `file` , `status`  , `note` , `project_id`) VALUES ('$title' , '$details' , '$deadline' , '$category' , '$target_file' , '$status'  , '$note' , '$id')";
                   if (mysqli_query($conn , $task)) {
                        header("Location:tasks.php?id=" . $id);
                  } 
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
            <form method="POST" enctype="multipart/form-data" class="bg-white p-4 shadow-sm row">
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
                                <input type="text" name="title" class="form-control" id="Title" placeholder="e . g Website Design">
                            </div>
                           
                            <div class="row">
                            <div class="col-sm-6 col-12">
                                    <label for="deadlin" class="form-label text-dark fw-bold">Deadline Date</label>
                                    <input type="date" class="form-control" name="deadline" id="deadlin" >
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="Category" class="form-label text-dark fw-bold">Category</label>
                                    <input type="text" class="form-control" name="category" id="Category" placeholder="Category">
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
                                <label for="Status" class="form-label text-dark fw-bold"> Status</label>
                                <select name="Status" class="form-control" id="Status">
                                    <option value="Not Started">Not Started</option>
                                    <option value="Paused">Paused</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Done">Done</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="details" class="form-label text-dark fw-bold">Task Details</label>
                                <textarea class="form-control" name="details" id="details" rows="4" placeholder="e . g Describe the Task to all members" style="resize: none;"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="notes" class="form-label text-dark fw-bold">Notes</label>
                                <textarea class="form-control" id="notes" name="note" rows="4" placeholder="e . g Add Your Note" style="resize: none;"></textarea>
                            </div>
                            <div class="mb-4">
                                <a href="tasks.php?id=<?php echo $id ?>" class="btn btn-dark me-3">Cancel</a>
                                <button type="submit" name="submit" class="btn btn-primary">Proceed</button>
                            </div>
                        </div>
                    </div>
            </form>
         </div>
    </div>
    <?php
    require_once("includes/footer.php")
    ?>
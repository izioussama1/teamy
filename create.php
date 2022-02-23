    <?php

        require_once("config/db.php");
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
             $title = $_POST['title'];
             $client = $_POST['Client'];
             $deadline = $_POST['deadline'];
             $assignedto = $_POST['assignedto'];
             $note = $_POST['note'];
             $status = $_POST['Status'];    
            
             $project = "INSERT INTO projects (`title` , `deadline` , `status` , `client` , `assigned_to` , `note`) VALUES ('$title' , '$deadline' , '$status' , '$client' , '$assignedto' , '$note' )";
                if (mysqli_query($conn , $project)) {
                     header("Location:projects.php");
               } 
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
                           
                            <div class="row mb-4">
                                <div class="col-sm-6 col-12">
                                    <label for="deadlin" class="form-label text-dark fw-bold">Deadline Date</label>
                                    <input type="date" class="form-control" name="deadline" id="deadlin" >
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label for="Client" class="form-label text-dark fw-bold">Client</label>
                                    <input type="text" class="form-control" name="Client" id="Client" placeholder="Client">
                                </div>
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
                                <label for="assignedto" class="form-label text-dark fw-bold"> Assigned To</label>
                                <select name="assignedto" class="form-control" id="assignedto">
                                    <?php 
                                        $query = "SELECT * FROM `team`";
                                        $result1 = mysqli_query($conn , $query);
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                    ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                          
                        </div>
                    </form>
            </div>
    </div>
    </div>
    <?php
    require_once("includes/footer.php")
    ?>
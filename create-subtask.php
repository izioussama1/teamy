<?php
    require_once("config/db.php");

    
    $task_id = $_GET['task_id'];
    $team_id = $_GET['team_id'];

    if(isset($_POST['submit'])) {
        $status = $_POST['Status'];
        $title = $_POST['title'];
        $assignedto = $_POST['assignedto'];
        
        $sql = "INSERT INTO `subtask`  (`title` , `status` , `assigned-to` ) VALUES ('$title'  , '$status' , '$assignedto') ";
        
        if(mysqli_query($conn , $sql)) {
            header("Location:details.php?id=$task_id");
        }
    }
        
    require_once("includes/sidebar.php");


    ?>
    <div class="col-md-10 col-12 bg-light ms-auto">
        <div class="container-fluid">
                <div class="d-flex align-items-center pt-3 justify-content-between">
                    <div class="text-dark fw-bold text-uppercase">Create New SubTask</div>
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
            <form method="POST">
                    <div class="row">
                        <div class="col-sm-6 col-12 bg-white p-4 shadow-sm ms-4">
                            <div class="d-flex align-items-center">
                                <span class="rounde text-primary fw-bold"> 1 </span> 
                                <h5 class="fs-5 fw-bold text-primary ms-2 my-4">  SubTask Details</h5>
                            </div>
                            <div class="mb-4">
                                <label for="Title" class="form-label text-dark fw-bold"> Title</label>
                                <input type="text" name="title" class="form-control" id="Title" placeholder="e . g Website Design">
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
                                        $sql1 = "SELECT * FROM `users` WHERE `admin` = 'false' AND `team_id` = '$team_id'";
                                        $result1 = mysqli_query($conn , $sql1);
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                    ?>
                                            <option value="<?php echo $row['username'] ?>"><?php echo $row['username'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <a href="details.php?id=<?php echo $task_id ?>" class="btn btn-dark me-3">Cancel</a>
                                <button type="submit" name="submit" class="btn btn-primary">Proceed</button>
                            </div>
                        </div>              
                    </div>
                 </form>
            </div>
        </div>
    </div>
    <?php
    require_once("includes/footer.php")
    ?>
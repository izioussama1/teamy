<?php
    require_once("config/db.php");
    require_once("includes/sidebar.php");

    $user = "SELECT * FROM `users`";
    $result = mysqli_query($conn , $user);
    ?>
    <div class="col-md-10 col-12 bg-light ms-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center pt-3 justify-content-between">
                <div class="text-dark fw-bold text-uppercase">
                Users
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
            <p class="fw-bold text-capitalize text-dark mt-2">Users</p>
            <div class="bg-white mt-2 shadow-none p-4">
                <table class="table fw-bold datatable ">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">team</th>
                            <th scope="col">Tasks Done</th>
                            <th scope="col">Files Uploaded</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row = mysqli_fetch_assoc($result)) {
                                    $t = $row['team_id']
                            ?>
                             <tr class="height">
                                <td><?php echo $row["username"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td>
                                    <?php
                                     $team = "SELECT * FROM `team` WHERE `id` = '$t'";
                                     $res = mysqli_query($conn , $team);
                                     while ($row2 = mysqli_fetch_assoc($res)) {
                                         echo $row2["name"];   
                                     }
                                    ?>
                                </td>
                                <td >
                                Nothing Found
                                </td>
                                <td>0</td>
                                <td>
                                    <span class="badge bg-warning">Pending</span> 
                                </td>
                                <td>
                                    <button class="btn btn-primary p-0 px-1  text-white">Approve</button> 
                                    <button class="btn btn-danger p-0 px-1  text-white">Reject</button>
                                </td>
                           </tr>
                        <?php } ?> 
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
<?php
    require_once("includes/footer.php")
?>
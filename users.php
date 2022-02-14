<?php
    require_once("includes/sidebar.php")
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
                        <tr class="height">
                            <td>Ayoub Berouijel</td>
                            <td>berouijelayoub@gmail.com</td>
                            <td>A</td>
                            <td >316</td>
                            <td>158</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td></td>
                        </tr>
                        <tr class="height">
                            <td>Mouad Belghazi</td>
                            <td>MouadBlg@gmail.com</td>
                            <td>No Team Yet</td>
                            <td >
                               Nothing Found
                            </td>
                            <td>0</td>
                            <td><span class="badge bg-danger">Rejected</span></td>
                            <td></td>
                        </tr>
                        <tr class="height">
                            <td>nadi Kanadi</td>
                            <td>nadikanadi@gmail.com</td>
                            <td>No Team Yet</td>
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
                        <tr class="height">
                            <td>izi Pizi</td>
                            <td>izipizi@gmail.com</td>
                            <td>A</td>
                            <td >216</td>
                            <td>158</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td></td>
                        </tr>
                        <tr class="height">
                            <td>KSI JJ</td>
                            <td>KSIJJ@gmail.com</td>
                            <td>Sideman</td>
                            <td>182</td>
                            <td>12</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
<?php
    require_once("includes/footer.php")
?>
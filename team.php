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
                <a href="settings.php"><i class="ri-settings-2-line ms-3"></i></a>
                <i class="ri-notification-line ms-3"></i>
                </div>
            </div>
             <hr />
            <p class="fw-bold text-capitalize text-dark mt-2">Teams</p>
            <div class="bg-white mt-2 shadow-none p-4">
                <table class="table fw-bold datatable ">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">team</th>
                            <th scope="col">Tasks Done</th>
                            <th scope="col">Files Uploaded</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="height">
                            <td>Ayoub Berouijel</td>
                            <td>berouijelayoub@gmail.com</td>
                            <td>A</td>
                            <td >316</td>
                            <td>158</td>          
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

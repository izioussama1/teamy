<?php
    require_once("includes/sidebar.php")
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
            <div class=" row">
                    <div class="row">
                        <div class="col-sm-6 col-12 bg-white p-4 shadow-sm ms-4">
                            <div class="d-flex align-items-center">
                                <span class="rounde text-primary fw-bold"> 1 </span> 
                                <h5 class="fs-5 fw-bold text-primary ms-2 my-4">  SubTask Details</h5>
                            </div>
                            <div class="mb-4">
                                <label for="Title" class="form-label text-dark fw-bold"> Title</label>
                                <input type="text" class="form-control" id="Title" placeholder="e . g Website Design">
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
    </div>
    <?php
    require_once("includes/footer.php")
    ?>
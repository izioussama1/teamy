<?php  
   require_once("includes/header.php");
?>
      <div class="row w-100">
          <div class="col-sm-6 col-12 bg-white">
              <div class="w-75 mx-auto py-4">
                <a href="index.php" class="logo fs-4 fw-bold text-dark"><span class="text-primary">T</span>eamy</a>
                <div class="mt-3">
                    <h1 class="fs-2 fw-bold mb-3">
                        Register 🖕
                    </h1>
                    <p class="text-dark f-montserat text-capitalize fw-bold">
                        use youre preffered login methods below.
                    </p>
                    <button class="btn d-block  w-100 my-4 button  text-secondary ">Sign In With Google</button>
                    <button class="btn text-secondary d-block w-100 button  ">Sign In With Facebook </button>
                    <div class="d-flex align-items-center my-3">
                        <hr class="w-50">
                        <p class="mb-0 w-50 ps-4 text-secondary f-montserat">or Sign Up With  Email</p> 
                        <hr class="w-50">
                    </div>
                    <div class="form-group mb-3">
                        <label for="name" class="mb-1">UserName</label>
                        <input type="text" id="name" placeholder="Username" class="form-control ">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="mb-1">Email</label>
                        <input type="text" id="email" placeholder="Email" class="form-control ">
                    </div>
                    <div class="form-group mb-3">
                        <label for="pass" class="mb-1">Password</label>
                        <input type="password" id="pass" placeholder="Password" class="form-control ">
                    </div>
                    <div class="form-group mb-3">
                        <label for="cpass" class="mb-1">Confirm Password</label>
                        <input type="password" id="cpass" placeholder="Confirm Password" class="form-control ">
                    </div>
                   
                    <button class="btn d-block w-100 mt-5 btn-primary fw-bold">Register </button>
                    <div class="fw-bold mt-4">
                        <p class="text-capitalize">Already Have An Account ? <a href="login.php"> Login</a></p>
                    </div>
                    <p class="mt-4 text-secondary">&copy; 2021 All Right Reserved , Designed By Digital Fountaine</p>
                </div>
            </div>
        </div>
            <div class="col-sm-6 col-12">
                <img src="assets/images/img.jpg" class="img-fluid  hvh-100" alt="image">
            </div>
        </div>
<?php  
   require_once("includes/footer.php");
?>
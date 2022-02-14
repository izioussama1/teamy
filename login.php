<?php  
   require_once("includes/header.php");
?>
      <div class="row w-100 text-dark">
          <div class="col-sm-6 col-12 bg-white">
              <div class="w-75 mx-auto py-5">
                <a href="index.php" class="logo fs-4 fw-bold"><span class="text-primary">T</span>eamy</a>
                <div class="mt-5">
                    <h1 class="fs-2 fw-bold mb-3">
                        Login 🖕
                    </h1>
                    <p class="f-montserat text-capitalize fw-bold">
                        use youre preffered login methods below.
                    </p>
                    <button class="btn d-block  w-100 my-4 button  text-secondary ">Sign In With Google</button>
                    <button class="btn text-secondary d-block w-100 button  ">Sign In With Facebook </button>
                    <div class="d-flex align-items-center my-5">
                        <hr class="w-50">
                        <p class="mb-0 w-50 ps-4 text-secondary f-montserat">or Sign in With  Email</p> 
                        <hr class="w-50">
                    </div>
                    <div class="form-group">
                        <label for="email" class="mb-1">Email</label>
                        <input type="text" id="email" class="form-control ">
                    </div>
                    <div class="form-group mt-3">
                        <label for="pass" class="mb-1">Password</label>
                        <input type="password" id="pass" class="form-control ">
                    </div>
                    <div class="d-flex align-items-center justify-content-between ">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Remember Me
                            </label>
                        </div>
                        <a href="#" >Forgote Your Password</a>
                    </div>
                    <button class="btn d-block w-100 mt-5 btn-primary fw-bold">Login </button>
                    <div class="fw-bold mt-4">
                        <p class="text-capitalize">Not Registered Yet ? <a href="register.php"> Create An Account</a></p>
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
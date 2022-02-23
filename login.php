<?php  
   require_once("config/db.php");
   
    // init the variables
    $passerr = $emailerr = $email = "";
    
    if(isset($_POST["login"])) {
         // security check
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

       // email validation
        if (empty($_POST["email"])) {
              $emailerr = "email is required";
        } 
        // password validation
        elseif (empty($_POST["pass"])) {
            $passerr = "password is required";
        }
        elseif (!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)) {
              $emailerr = "Invalid email format";
        }
        else {
             $email = test_input($_POST["email"]);
              $password = test_input($_POST['pass']);
            //   select with just the email
              $sql = "SELECT * FROM `users` WHERE `email` = '$email'  ";
              $result = mysqli_query($conn , $sql);
              $count = mysqli_num_rows($result);
              if($count >= 1){  
                  while ($row = mysqli_fetch_assoc($result)) {
                      if(password_verify($password , $row["password"])){
                          $_SESSION["id"] = $row['id'];
                          $admin = $row['admin'];
                        //   check is admin or not 
                          if($admin == "true") {
                              header("Location : dashboard.php") ; 
                          } else {
                            //   header("Location:index.php") ; 
                            echo "Good Good Ayoub";
                          }
                      } else {
                          $passerr = "Password Not Correct";
                      }
                  }
              }  
          }
    }

    require_once("includes/header.php");
?>
      <div class="row w-100 text-dark">
          <form method="POST" class="col-sm-6 col-12 bg-white shadow-none">
              <div class="w-75 mx-auto py-5">
                <a href="index.php" class="logo fs-4 fw-bold"><span class="text-primary">T</span>eamy</a>
                <div class="mt-5">
                    <h1 class="fs-2 fw-bold mb-3">
                        Login 🖕
                    </h1>
                    <div class="d-flex align-items-center my-5">
                        <hr class="w-50">
                        <p class="mb-0 w-50 ps-5 text-secondary f-montserat"> Sign in With  Email</p> 
                        <hr class="w-50">
                    </div>
                    <div class="form-group">
                        <label for="email" class="mb-1">Email</label>
                        <input type="text" id="email" name="email" value="<?php echo $email ?>" class="form-control ">
                        <small class="text-danger fw-bold"> <?php echo $emailerr ;  ?></small>
                    </div>
                    <div class="form-group mt-3">
                        <label for="pass" class="mb-1">Password</label>
                        <input type="password" id="pass" name="pass" class="form-control ">
                        <small class="text-danger fw-bold"> <?php echo $passerr ;  ?></small>
                    </div>
                    <div class="d-flex align-items-center justify-content-between ">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox"  id="flex" checked>
                            <label class="form-check-label" for="flex">
                                Remember Me
                            </label>
                        </div>
                        <a href="#" >Forgote Your Password</a>
                    </div>
                    <button name="login" type="submit" class="btn d-block w-100 mt-5 btn-primary fw-bold">Login </button>
                    <div class="fw-bold mt-4">
                        <p class="text-capitalize">Not Registered Yet ? <a href="register.php"> Create An Account</a></p>
                    </div>
                    <p class="mt-4 text-secondary">&copy; 2021 All Right Reserved , Designed By Digital Fountaine</p>
                </div>
            </div>
        </form>
            <div class="col-sm-6 col-12">
                <img src="assets/images/img.jpg" class="img-fluid  hvh-100" alt="image">
            </div>
        </div>
<?php  
   require_once("includes/footer.php");
?>
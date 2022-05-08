<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT id FROM users WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: landingpage.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
    }
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Form</title>
    <!-- css boostrap 5 cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- fontawesome link -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>
    <div class="container mt-5 w-50">
        <form class="shadow p-4 m-4" action="landingpage.php" method="POST">
            <label for="back"><a href="index.php"><i class="bi bi-house"></i></a></label>
                <h4 class="text-center">Sign In Form</h4> <hr>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Email address:</label>
                    <input type="email" class="form-control" name="email"  placeholder="Enter Your Email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password:</label>
                    <input type="password"  name="pass" class="form-control" placeholder="Enter Your Password">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">
                        User Type:
                    </label>
                        <select name="option" class="form-select">
                            <option value="#">-- Choose --</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                            <option value="business">Business</option>
                        <select>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remeber me!</label>
                </div>
                
                <button type="submit" name="login" class="btn btn-primary">Login</button>

                <div class="mt-5">
                    <p>If you haven't an account?
                        <a href="users.php">Sign Up here!</a>
                    </p>
            </div> 
        </form>
    </div>
</body>
</html>
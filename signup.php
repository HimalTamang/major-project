<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Singup Form</title>
        <!-- css boostrap 5 cdn link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        
        <!-- fontawesome link -->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container mt-5">

            <form class="shadow-lg p-5 m-5 bg-white rounded" action="insertion.php" method="POST" enctype="multipart/form-data">
            <label for="back"><a href="index.php"><i class="bi bi-house"></i></a></label>
                <h4 class="text-center mb-4">Registration Form For Users</h4>
                <hr>
                <div class="mb-3">
                    <label for="username" class="form-label">Profile Name:</label>
                    <input type="text" autocomplete="false" name="uname" class="form-control" placeholder="Enter Your Profile Name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address:</label>
                    <input type="email" class="form-control" name="email" autocomplete="false" placeholder="Enter Your Email Address"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" name="uname" class="form-label">Password:</label>
                    <input type="password" autocomplete="false" name="pass" class="form-control" placeholder="Create New Password" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Conform Password:</label>
                    <input type="password" class="form-control" name="cpass" placeholder="Re-Enter Your Password" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address/Location:</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Your Address" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact:</label>
                    <input type="number" class="form-control" name="contact" placeholder="Enter Your Contact Number" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date Of Birth:</label>
                    <input type="number" class="form-control" name="dob" placeholder="Enter Your Date Of Birth" required>
                </div>
                <div class="mb-3">
                    <label for="photos" class="form-label">Upload Photo:</label>
                    <input type="file" name="photo" class="form-control" required>
                </div>
                <div>
                    <label for="gender" class="form-label">Gender:</label>
                    <div class="form-check">
                        <input class="form-check-input" name="gender" value="1" type="radio" checked>
                        <label class="form-check-label">
                            Female
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="gender" value="2" type="radio">
                        <label class="form-check-label">
                            Male
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me!</label>
                </div>
                <button type="submit" value ="submit" name="submit" class="btn btn-primary">Sign up</button>
                <div class="mt-5">
                    <p>If you have an account?
                        <a href="signin.php">Sign In here!</a>
                    </p>
                </div>
            </form>
        </div>
    </body>

</html>

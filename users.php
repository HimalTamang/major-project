<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Choose users</title>
        <!-- css boostrap 5 cdn link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- fontawesome link -->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <style>
        .btn {
            margin-top: 10px;
            width: 200px;
        }

        .div-wrapper {
            display: flex;
            margin: 0 auto;
        }
        label a{
            text-decoration: none;
        }

        </style>
    </head>

    <body>
        <div class=" div-wrapper d-flex justify-content-center">
            <form class="shadow px-5 py-3 mt-5" method="POST" action="check.php">
            <label for="back"><a href="index.php">Back</a></label><br><br>
                <select name="usertype" id="" class="form-select">
                    <option value="#"> -- Choose --</option>
                    <option value="user"><a href="signup.php"></a> User Register</option>
                    <option value="business"><a href="signup_for_business.php"></a> Business Register</option>
                </select>
                <input type="submit" class="btn btn-outline-success" value="Next" name="submit">
            </form>
        </div>
    </body>

</html>

<?php 
include 'connection.php';
if(isset($_POST['submit'])){
    echo "you clicked submit button";
    $ownername = $_REQUEST['owner'];
    $businessname = $_REQUEST['businessname'];
    $description = $_REQUEST['comment'];
    $pictures = $_REQUEST['photos'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];
    $cpassword = $_REQUEST['cpass'];
    $contact = $_REQUEST['contact'];
    $businesstype = $_REQUEST['selection'];
    $address = $_REQUEST['address'];
    $facilities = $_REQUEST['checkboxvalue'];
    $menu = $_REQUEST['price'];

    $checkboxvalues = implode(",", $facilities);
    echo "$checkboxvalues <br>";
    if($password == $cpassword){
            $sql = "INSERT INTO business(owner, businessname, description, photo, email, password, cpassword, contact, businesstype,address, facility, menu ) VALUES('$ownername', '$businessname', '$description', '$pictures', '$email', '$password','$cpassword','$contact', '$businesstype',  '$address','$checkboxvalues', '$menu')";
            $query = mysqli_query($conn, $sql);
            if($query){
                echo "inserted sucessfully!";
                header('location: signin.php');
            }
            else{
                echo " failed to insert !". mysqli_error($conn);
            }
    }
    else{
        echo "your password is not match";
    }
}

?>

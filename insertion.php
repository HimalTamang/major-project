<?php
    require 'connection.php'; 
    if (isset($_POST['submit'])){
        echo "you click submit button;";
       // Taking all the values from the form input
       $username =  $_REQUEST['uname'];
       $email = $_REQUEST['email'];
       $password =  $_REQUEST['pass'];
       $cpassword = $_REQUEST['cpass'];
       $address = $_REQUEST['address'];
       $contact = $_REQUEST['contact'];
       $dob = $_REQUEST['dob'];
       $picture = $_REQUEST['photo'];
       $gender = $_REQUEST['gender'];

       // Now inserting the form data into the table users of the database findnepal. 
       //check if password is matches or not.
        if($password == $cpassword){

            $sql = "INSERT INTO users( name, email, password, confirmpass, address, contact, dob, photo, gender) VALUES ('$username', '$email','$password','$cpassword','$address', '$contact', '$dob', '$picture', '$gender')";
            $query = mysqli_query($conn, $sql);
            if($query){
                echo "inserted successfully!";
                header('location: signup.php');
            }
            else{
                echo "    ; fail to insert the data". mysqli_errno($conn);
            }
        }
        else{
            echo "Your password are not matching !";
        }
        
    }
?>
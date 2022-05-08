<?php 
include 'connection.php';
    session_start();
    if(isset($_POST['login'])){
        $useremail = $_REQUEST['email'];
        $userpass = $_REQUEST['pass'];
        $user_role = $_REQUEST['option'];
        
        $check = mysqli_query($conn, "SELECT * FROM users where email = '$useremail' AND password = '$userpass' "); 
        if(mysqli_num_rows($check)>0){
            $userdata = mysqli_fetch_array($check);
            $business = mysqli_query($conn, "SELECT * FROM business"); 
            $businessdata = mysqli_fetch_all($business,MYSQLI_ASSOC);

            $_SESSION['userdata'] = $userdata; 
            $_SESSION['business'] = $businessdata; 
        

            echo '
                <script>
                    window.location = "../api/landingpage.php";
                </script>
            ';
        }
        else{
            echo "error occured!"; 
        }

    }
?>
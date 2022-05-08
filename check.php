
<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['usertype']))
        {
            if($_POST['usertype'] == "business"){
               header("location: signup_for_business.php");
                // header("location: signup_for_business.php");
            }
            elseif($_POST['usertype'] == 'user'){
                header("location: signup.php");
            }
            else{
                header("location: index.php");
            }
        }
    }
?>
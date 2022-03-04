<?php
     function data_cleaner($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

$fn = $ln = $email = $subject = $pass = $compass = "";
$fnerr = $lnerr = $emailerr = $passerr = $compasserr = $generr=  "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["first_name"])){
        $fnerr = "required";
    } else {
        $fn = data_cleaner($_POST["first_name"]);
    }

    if(empty($_POST["last_name"])){
        $lnerr = "required";
    } else {
        $ln = data_cleaner($_POST["last_name"]);
    }    
    if(empty($_POST["email"])){
        $emailerr = "required";
    } else {
        $email = data_cleaner($_POST["email"]);
    }
    if(empty($_POST["password"])){
        $passerr = "required";
    } else {
        $pass = data_cleaner($_POST["password"]);
    }
    if(empty($_POST["confirm_password"])){
        $compasserr = "required";
    } else {
        $compass = data_cleaner($_POST["confirm_password"]);
    }


    //on click

    if(isset($_POST["email"]) &&
     isset($_POST["password"])&& 
     isset($_POST["first_name"])&& 
     isset($_POST["confirm_password"])&&
      isset($_POST["last_name"])&& 
      $ln != "" ||
       $fn != "" ||
        $email != "" || 
        $pass != "" || 
        $compasserr != ""){

        if($pass != $compass) {
            $generr = "Please enter matching passwords";
        }else {
            $generr = "Successful registration";
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Musk - Sign Up</title>
</head>
<body>
    <div class = "header">
        <div id = "">
            <div><a class = "header_links"href="/test/sign_in.php">Home</a></div>
        </div>
        <div id = "">
            <div><a class = "header_links"href="#">About</a></div>
        </div>
        <div id = "">
            <div><a class = "header_links"href="#">Services</a></div>
        </div>
        <div id = "">
            <div><a class = "header_links"href="#">Career</a></div>
        </div>
        <div id = "">
            <div><a class = "header_links"href="#">Contact</a></div>
        </div>

    </div>
    <div class = "container">
        <form action = "#" class = "sign_up_form" method = "POST">
            <div class = "names">
                <div  id = "first_name">
                    <label id = "error" for = "first_name"><?php echo $fnerr ?></label>
                    <input type="text" class ="fName" name="first_name" placeholder="First Name">
                </div>
                <div  id = "last_name">
                    <label id = "error" for = "last_name"><?php echo $lnerr ?></label>
                    <input type="text" class = "fName" name="last_name" placeholder="Last Name">
                </div>
            </div>
            <div id = "email">
                <label id = "error" for = "email"><?php echo $emailerr ?></label>
                <input class="form-control" type = "text" name="email" placeholder="Enter your Email Address">
            </div>
            <div id = "password">
                <label id = "error" for = "password"><?php echo $passerr ?></label>
                <input class = "form-control" type = "password" name="password" placeholder="Enter your password">
            </div>
            <div id = "confirm_password" name="confirm_password">
                <label id = "error" for = "password"><?php echo $compasserr ?></label>
                <input class = "form-control" type = "password" name="password" placeholder="Confirm Password">
            </div>
            <div class = "register">
                <button class="form-control btn_register" name="register">Register</button>
            </div>
            <div class = "existing_account">
                <div id = "existing"> Already have an account? Sign In</div>
            </div>



        </div>
    </div>

    
</body>
</html>
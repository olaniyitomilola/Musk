<?php 

    $email = $password = "";
    $emailerr = "";
    $passerr = "";

    $screen = "";

    $hardcoded_email = "testing@gmail.com";
    $hardcoded_password = "password";

    //data cleaning
     function data_cleaner($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    //on click
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["email"])){
            $emailerr = "Please enter a valid email address";
        } else {
            $email = data_cleaner($_POST["email"]);
        }
        if(empty($_POST["password"])){
            $passerr = "Please enter your password";
        } else {
            $password = data_cleaner($_POST["password"]);
        }

        if(isset($_POST["email"]) && isset($_POST["password"]) && $email != "" && $password != ""){

            $screen = data_cleaner("dashboard.php");

        }
        if ($email != $hardcoded_email && $password != $hardcoded_password){
            $accerr = "Account does not exist";
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
    <title>Musk | Sign In</title>
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
            <div><a class = "header_links"href="#">Careers</a></div>
        </div>
        <div id = "">
            <div><a class = "header_links"href="#">Contacts</a></div>
        </div>

    </div>
    <div class = "container">
        <form action = " <?php echo "$screen"; ?>"  method = "post" class = "sign_up_form">
            <div class = "sign_header">
                Sign In
            </div>
            <div id = "email">
                <label id="error" for="email"><?php echo $emailerr ?></label>
                <input class="form-control" type = "text" name="email" placeholder="Email Address" value = "<?php echo $email; ?>">
            </div>
            <div id = "password">
                <label id="error" for="password"><?php echo $passerr ?></label>
                <input class = "form-control" type = "password" name="password" placeholder="Password" value = "<?php echo $password; ?>">
            </div>
            <div class = "register">
                <button class="form-control btn_register" name="log_in">Login</button>
            </div>
            <div class = "existing_account">
                <div id = "existing"><a class= "sign_navigator" href="sign_up.php">Not Registered? Sign up!</a></div>
            </div>
            <div class = "forgotpassword">
                <div id = "forgotpassword"><a class= "sign_navigator" href="#">Forgot Password?</a> </div>
            </div>
            <div id = "error"> <?php echo $accerr ;?></div>

        </form>
    </div>

    
</body>
</html>
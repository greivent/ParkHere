<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        
        
        $query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password){
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "Wrong username or password";
    }else{
        echo "Wrong username or password";
    }
}



?>

<style>
<?php include "style.css";?>
</style>

<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>

    <div class="center">

      <h1>Login</h1>

        <form method="post">

            <div class="txt_field">
            <input id="text" type="text" name="user_name" required>
            <span></span>
            <label>Username</label>
            </div>

            <div class="txt_field">
            <input id="text" type="password" name="password" required>
            <span></span>
            <label>Password</label>
            </div>

            <div class="pass">Forgot Password?</div>

            <input id="button" type="submit" value="Sign in">

            <div class="signup_link">
            Not a member? <a href="signup.php">Signup</a>
            </div>

        </form>
    </div>
</body>

</html>
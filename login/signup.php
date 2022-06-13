<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        }else{
            echo "Please enter some valid information";
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
    <title>Signup</title>
</head>
<body>

    <div class="center">

      <h1>Signup</h1>

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

            <input id="button" type="submit" value="Signup">

            <div class="signup_link">
            Back to login <a href="login.php">Login</a>
            </div>

        </form>
    </div>
</body>

</html>
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
    <!-- <style type="text/css">
    #text{

    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
    }

    #button{

    padding: 10px;
    width: 100px;
    color: white;
    background-color: lightblue;
    border: none;
    }

    #box{

    background-color: grey;
    margin: auto;
    width: 300px;
    padding: 20px;
    }

 
    </style>

    <div id="box">

        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: white;" >Login</div>
           
            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="login"><br><br>

            <a href="signup.php">Click to Signup</a><br><br>
        
        </form>
    </div> -->

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
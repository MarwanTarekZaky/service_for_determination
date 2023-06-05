<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "password";
$database = 'project';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
}

if (isset($_POST['signin'])) {

    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $check = 0;

    $sql = "SELECT * FROM user_info WHERE name='$name' AND pass='$pass' ";

    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT * FROM doctor_info WHERE name='$name' AND pass='$pass' ";

    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "SELECT * FROM admin_info WHERE name='$name' AND pass='$pass' ";

    $result3 = mysqli_query($conn, $sql3);


    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['name'] === $name && $row['pass'] === $pass) {

            echo "<h1>Logged in!</h1>";

            $_SESSION['name'] = $row['name'];

            $_SESSION['id'] = $row['id'];

            $check = 1;
            header("Location: ../user/home/index.php");

            exit();

        }
    }

    if (mysqli_num_rows($result2) === 1) {

        $row = mysqli_fetch_assoc($result2);

        if ($row['name'] === $name && $row['pass'] === $pass) {

            echo "<h1>Logged in!</h1>";

            $_SESSION['name'] = $row['name'];

            $_SESSION['id'] = $row['id'];

            $check = 1;
            header("Location: ../doctor/home/index.php");

            exit();

        }
    }
    if (mysqli_num_rows($result3) === 1) {

        $row = mysqli_fetch_assoc($result3);

        if ($row['name'] === $name && $row['pass'] === $pass) {

            echo "<h1>Logged in!</h1>";

            $_SESSION['name'] = $row['name'];

            $_SESSION['id'] = $row['id'];

            $check = 1;
            header("Location: ../admin/home/index.php");

            exit();

        }
    }
     if($check==0){

        echo "<h1>Incorect User name or password</h1>";
         //header("Location: login.php?error=Incorect User name or password");

        //exit();

    }





}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <h1 style=""><a href="signup.php" class="signup-image-link" style="text-decoration: none; color: aqua; font-size: xx-large;">Register</a></h1>
                        <h1 style=""><a href="../user/home/contact.php" class="signup-image-link" style="text-decoration: none; color: slateblue; font-size: x-large;">forget password?</a></h1>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="User name" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit"
                                    value="Login" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
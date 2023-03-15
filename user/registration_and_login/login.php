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


    $sql = "SELECT * FROM user_info WHERE name='$name' AND pass='$pass' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['name'] === $name && $row['pass'] === $pass) {

            echo "<h1>Logged in!</h1>";

            $_SESSION['name'] = $row['name'];

            $_SESSION['id'] = $row['id'];

            header("Location: ../home/index.php");

            exit();

        } else {

            echo "<h1>Incorect User name or password</h1>";
            // header("Location: index.php?error=Incorect User name or password");

            exit();

        }
    } else {

        echo "<h1>Incorect User name or password</h1>";
        //header("Location: index.php?error=Incorect User name or password");

        exit();

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
    <title>تسجيل الدخول</title>

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
                        <h1 style=""><a href="signup.php" class="signup-image-link" style="text-decoration: none; color: aqua; font-size: xx-large;">انشاء حساب</a></h1>
                        <a href="../../doctor/registration_and_login/login.php" class="signup-image-link" style="text-decoration: none; color: darkred; font-size: large;"> التسجيل الدخول كطبيب</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">تسجيل الدخول</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="اسم المستخدم" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="الرقم السري" required />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me"
                                    class="label-agree-term"><span><span></span></span>تذكرني</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit"
                                    value="تسجيل الدخول" />
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
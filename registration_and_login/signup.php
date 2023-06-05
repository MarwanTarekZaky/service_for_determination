<?php

$servername = "localhost";
$username = "root";
$password = "password";
$database = 'project';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
//echo "Connected successfully";
}

    if(isset($_POST['signup'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $number = $_POST['number'];
        $disease_type = $_POST['disease_type'];


        $sql = "INSERT INTO user_info (name, email, pass, number, disease_type)
        VALUES ('$name', '$email', '$pass', $number, $disease_type)";
        
        if ($conn->query($sql) === TRUE) {
          echo "<h1>New Account created successfully</h1>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Create user</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title"> Create new user</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Name" required minlength="4" maxlength="25"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="password" required />
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><strong>disease_type</strong></label>
                                
                                <div class="form-group">
                                    <label for="number"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="number" id="number" placeholder="phone number" required/>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <select name="disease_type" class="form-control form-control-lg" id="exampleFormControlSelect1">
                                    <option value="">please select </option>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Create" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <h1 style=""><a href="login.php" class="signup-image-link" style="text-decoration: none; color: aqua; font-size: xx-large;">Alerady user</a></h1>
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
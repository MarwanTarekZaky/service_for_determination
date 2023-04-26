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
    //echo "Connected successfully";
}

if (isset($_POST['delete'])) {

    $name = $_POST['name'];
    
    $sql = "DELETE FROM doctor_info WHERE name='$name'";

    if (mysqli_query($conn, $sql)) {
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
      

      $sql2 = "SELECT * FROM doctor_info WHERE name='$name'";

      $result = mysqli_query($conn, $sql2);
  
      if (mysqli_num_rows($result) === 1) {
  
          $row = mysqli_fetch_assoc($result);
  
          if ($row['name'] === $name) {
            echo "<h1>Record deleted successfully</h1>";
          } else {
              echo "<h1> doctor does not  </h1>";
              // header("Location: index.php?error=Incorect User name or password");
          }

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
    <title>حذف طبيب</title>

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
                      
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title"> حذف طبيب</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="اسم المستخدم" required />
                            </div>
                      
                            
                            <div class="form-group form-button">
                                <input type="submit" name="delete" id="signin" class="form-submit"
                                    value="حذف طبيب" />
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
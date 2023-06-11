<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

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

    $success_message = "";
    if (isset($_POST['set_grade'])) {

        $user_name = $_POST['user_name'];
        $lesson_name = $_POST['lesson_name'];
        $grade = $_POST['grade'];



        $sql = "INSERT INTO grades ( user_name, lesson_name, grade)
            VALUES ( '$user_name', '$lesson_name', $grade)";

        if ($conn->query($sql) === TRUE) {
            //echo "<h1>New grade set successfully</h1>";

             $success_message = "New grade set successfully";

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Speech specialist</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-primary">Speech specialist</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="../../registration_and_login/delete_user.php" class="nav-item nav-link">Delete User</a>        
                    <a href="logout.php" class="nav-item nav-link">LogOut</a>
                    <a href="blog.php" class="nav-item nav-link">Rehabilitation</a>
                    <a href="comments.php" class="nav-item nav-link">Comments</a>
                    <a href="assignment.php" class="nav-item nav-link">Assignments</a>
                    <a href="learning.php" class="nav-item nav-link">Learning</a>
                    <a href="index.php" class="nav-item nav-link">Home</a>
                </div>
               
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 150px">
                <h3 class="display-3 font-weight-bold text-white">Progress</h3>
                <div class="d-inline-flex text-white">
                </div>
            </div>
        </div>
    <!-- Header End -->


   

   
    <!-- main Start -->
    <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"><?php echo $success_message ?></h1>
                    <h2 class="mb-4">Rate and evaluate progress</h2>
                    <form method="post">
                        <div class="form-group">
                            <label for="user_name">Patient name</label>
                            <input name="user_name" type="text" class="form-control" id="user_name" placeholder="Patient name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="lesson_name">Lesson name</label>
                            <input name="lesson_name" type="text" class="form-control" id="lesson_name"
                                placeholder="Lesson ..." required>
                        </div>
                        <div class="form-group">
                            <label for="grade">Grades</label>
                            <input type="number" max="10" min="0" name="grade" id="grade"  class="form-control"
                                placeholder="Set patient grade.." required >
                        </div>
                        <div class="form-group mb-0">
                            <input name="set_grade" type="submit" value="Add grade" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <h2 class="mb-4">List previous grades</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="search_name" id="search_name" placeholder="Patient name">
                            <input name="list_grade" type="submit" value="View" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <?php if (isset($_POST['list_grade'])) {

                        $search_name = $_POST['search_name'];

                        $sql = "SELECT  user_name, lesson_name, grade FROM grades WHERE  user_name = '$search_name' ";


                        if ($res = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($res) > 0) {
                                echo "<div class='container'>";
                                echo "<table class='table table-striped'>";
                                echo "<tr>";
                                echo "<th scope='col'>Patient </th>";
                                echo "<th scope='col'>Lesson</th>";
                                echo "<th scope='col'>Grade</th>";
                                echo "</tr>";
                                while ($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['user_name'] . "</td>";
                                    echo "<td>" . $row['lesson_name'] . "</td>";
                                    echo "<td>" . $row['grade'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                echo "</div>";
                                mysqli_free_result($res);
                            } else {
                                echo "No Matching records are found.";
                            }
                        } else {
                            echo "ERROR: Could not able to execute $sql. "
                                . mysqli_error($link);
                        }
                        $conn->close();
                    }
                    ?>

                </div>
            </div>
        </div>



         <!-- remove all grades -->
         <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">

                <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"><?php echo $success_message ?></h1>
                    <h2 class="mb-4">Remove previous grades</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="search_name" id="search_name" placeholder="Patient name">
                            <input name="remove_grades" type="submit" value="Remove"
                                class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <?php if (isset($_POST['remove_grades'])) {

                            $search_name = $_POST['search_name'];

                        $sql = "DELETE FROM grades WHERE user_name = '$search_name'";
                        $sql2 ="SELECT * FROM grades WHERE user_name = '$search_name'";
                        $result = mysqli_query($conn, $sql2);

                        if (mysqli_num_rows($result) > 0) {
                    
                            if ($conn->query($sql) === TRUE) {
                                echo "<h1>All grades deleted successfully</h1>";
                
                                 $success_message = "All grades deleted successfully";
                
                            } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            $conn->close();
                        }else {
                            echo "<h1> Patient does not exist </h1>";
                            // header("Location: index.php?error=Incorect User name or password");
                        }

                    }

                    ?>
                </div>
            </div>
        </div>
        <!-- end remove all grades -->


    <!-- main End -->


    <!-- Footer Start -->
  
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<?php 

}else{

     header("Location: ../../registration_and_login/login.php");

     exit();

}

 ?>
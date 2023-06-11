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
        // echo "Connected successfully";
    }

    $success_message = "";

    if (isset($_POST['but_upload'])) {
        $maxsize = 5242880; // 5MB
        if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
            $name = $_FILES['file']['name'];
            $target_dir = "../../videos";
            $templol = "/";
            $target_file = $target_dir . $_FILES["file"]["name"];

            // Select file type
            $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

            // Check extension
            if (in_array($extension, $extensions_arr)) {

                // Check file size
                if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    $_SESSION['message'] = "File too large. File must be less than 5MB.";
                } else {
                    // Upload
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                        // Insert record
                        $query = "INSERT INTO videos(name,location) VALUES('" . $name . "','" . $target_file . "')";

                        mysqli_query($conn, $query);
                        $_SESSION['message'] = "Upload successfully.";
                        
                    }
                }

            } else {
                $_SESSION['message'] = "Invalid file extension.";
            }
        } else {
            $_SESSION['message'] = "Please select a file.";
        }
        $conn->close();
        header('location: index.php');
        exit;
    }




    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Events</title>
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
                    <a href="comments.php" class="nav-item nav-link">Comments</a>
                    <a href="assignment.php" class="nav-item nav-link">Assignments</a>
                    <a href="progress.php" class="nav-item nav-link">progress</a>
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
                <h3 class="display-3 font-weight-bold text-white">Rehabilitation</h3>
                <div class="d-inline-flex text-white">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Blog Start -->

        <!-- Upload response -->


        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>

        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"></h1>
                    <h2 class="mb-4">Add video</h2>
                    <form method="post" action="" enctype='multipart/form-data'>
                        <input type='file' name='file' />
                        <input type='submit' value='Upload' name='but_upload' class="btn btn-primary px-3">
                    </form>
                </div>
            </div>
        </div>
        <!-- Blog End -->



        <!-- remove start -->

        <!-- remove all notes -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">

                    <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"><?php echo $success_message ?></h1>
                    <h2 class="mb-4">Remove video</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="search_name" id="search_name" placeholder="Clip name">
                            <input name="remove_notes" type="submit" value="Remove" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end remove all notes -->



        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <?php if (isset($_POST['remove_notes'])) {

                        $search_name = $_POST['search_name'];

                        $sql = "DELETE FROM videos WHERE name = '$search_name'";

                        if ($conn->query($sql) === TRUE) {
                            echo "<h1>video successfully</h1>";

                            $success_message = "Video deleted successfully";

                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();

                    }

                    ?>
                </div>
            </div>
        </div>



        <!-- remove end -->


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


} else {

    header("Location: ../../registration_and_login/login.php");

    exit();

}

?>
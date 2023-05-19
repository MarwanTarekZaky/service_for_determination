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
    $success_message_image = "";
    $success_message_video = "";
    $success_message_audio = "";


    if (isset($_POST['but_upload'])) {
        $maxsize = 5242880; // 5MB
        if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
            $name = $_FILES['file']['name'];
            $target_dir = "../../videos";
            $templol = "/";
            $user_name = $_POST['user_name'];
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
                        $query = "INSERT INTO assignment_videos(user_name,name,location) VALUES('" . $user_name . "','" . $name . "','" . $target_file . "')";

                        mysqli_query($conn, $query);
                        $_SESSION['message'] = "Upload successfully.";
                        $success_message_video="تم الارسال بنجاح";

                    }
                }

            } else {
                $_SESSION['message'] = "Invalid file extension.";
            }
        } else {
            $_SESSION['message'] = "Please select a file.";
        }

        //header('location: index.php');
        //exit;
    }


    //uploading photos
    // File upload path
    if (isset($_POST["upload_image"])) {
        $targetDir = "../../assignment_images/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $user_name=$_POST["user_name"];
    }
    if (isset($_POST["upload_image"]) && !empty($_FILES["file"]["name"])) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
                $insert = $conn->query("INSERT into assignment_images (user_name,file_name, uploaded_on) VALUES ('" . $user_name . "','" . $fileName . "', NOW())");
                if ($insert) {
                    $success_message_image = "The file " . $fileName . " has been uploaded successfully.";
                    $success_message_image="تم الارسال بنجاح";
                    
                } else {
                    $success_message_image = "File upload failed, please try again.";
                }
            } else {
                $success_message_image = "Sorry, there was an error uploading your file.";
            }
        } else {
            $success_message_image = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
        // Display status message
    //echo $success_message_image;
    } else {
        $success_message_image = 'Please select a file to upload.';
    }

    
    if(isset($_POST['upload_audio']))
    {
        $file_name = $_FILES['audio_file']['name'];
        $user_name = $_POST['user_name'];
    
        if($_FILES['audio_file']['type']=='audio/mpeg' || $_FILES['audio_file']['type']=='audio/mpeg3' || $_FILES['audio_file']['type']=='audio/x-mpeg3' || $_FILES['audio_file']['type']=='audio/mp3' || $_FILES['audio_file']['type']=='audio/x-wav' || $_FILES['audio_file']['type']=='audio/wav'){

            $new_file_name=$_FILES['audio_file']['name'];
            // Where the file is going to be placed

            $target_path = "../../assignment_audios/".$new_file_name;
            //target path where u want to store file.

            //following function will move uploaded file to audios folder. 
            if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path)) {

            //insert query if u want to insert file
            $insert = $conn->query("INSERT into assignment_audios (user_name,file_name, uploaded_on) VALUES ('" . $user_name . "','" . $file_name . "', NOW())");
            if ($insert) {
                $success_message_audio = "The file " . $file_name . " has been uploaded successfully.";
                $success_message_audio="تم الارسال بنجاح";
                
            } else {
                $success_message_audio = "File upload failed, please try again.";
            }


            }
        }
        
    }


    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Speech specialist</title>
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
                    <a href="blog.php" class="nav-item nav-link">Rehabilitation</a>
                    <a href="single.php" class="nav-item nav-link">Events</a>
                    <a href="comments.php" class="nav-item nav-link">Commnets</a>
                    <a href="progress.php" class="nav-item nav-link">Progress</a>
                    <a href="learning.php" class="nav-item nav-link">Learning</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Other</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="about.php" class="dropdown-item">About Us</a>
                            <a href="class.php" class="dropdown-item">Classes</a>
                            <a href="team.php" class="dropdown-item">Our Team</a>
                            <a href="gallery.php" class="dropdown-item">Gallery</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                            <a href="examples.php" class="dropdown-item">Examples</a>
                            <a href="https://form.123formbuilder.com/6371643/auction-donation-form" class="dropdown-item">Donation</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="index.php" class="btn btn-primary px-4">Home</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">center for special education </h4>
                <h1 class="display-3 font-weight-bold text-white">Welcome to Our center</h1>
                <p class="text-white mb-4"></p>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/header.png" alt="">
            </div>
        </div>
    </div>
        <!-- Header End -->





        <!-- main Start -->


        <!-- Upload response -->


        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>


        <!-- start upload video -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"><?php echo $success_message_video ?></h1>
                    <h2 class="mb-4">اضف فيديو</h2>
                    <form method="post" action="" enctype='multipart/form-data'>
                        <input type='file' name='file'>
                        <input type="text" name="user_name" id="user_name" placeholder="اسم المستخدم" required>
                        <input type='submit' value='اضف' name='but_upload'>
                    </form>
                </div>
            </div>
        </div>

        <!-- End upload video -->


        <!-- Start upload photos -->

        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"><?php echo $success_message_image ?></h1>
                    <h2 class="mb-4">اضف صوره</h2>
                    <form method="post" action="" enctype='multipart/form-data'>
                        <input type='file' name='file'>
                        <input type="text" name="user_name" id="user_name" placeholder="اسم المستخدم" required>
                        <input type='submit' value='اضف' name='upload_image'>
                    </form>
                </div>
            </div>
        </div>


        <!-- End upload photos -->

          <!-- Start upload audio -->

          <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"><?php echo $success_message_audio ?></h1>
                    <h2 class="mb-4">اضف صوت</h2>
                    <form method="post" action="" enctype='multipart/form-data'>
                        <input type='file' name='audio_file' id="audio_file">
                        <input type="text" name="user_name" id="user_name" placeholder="اسم المستخدم" required>
                        <input type='submit' value='اضف' name='upload_audio'>
                    </form>
                </div>
            </div>
        </div>


        <!-- End upload audio -->

        <!-- End upload response -->
        <!-- main End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                    style="font-size: 40px; line-height: 40px;">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-white">For contact</span>
                </a>
                <p>The center's house is happy to communicate with you and follow all the students' activities through our social network</p>
                <div class="d-flex justify-content-start mt-4">

                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://www.facebook.com/Center.altahsse"><i
                            class="fab fa-facebook-f"></i></a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Keep in touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Adress</h5>
                        <p>Atfeh , Giza , Egypt</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>serviceDetermination@example.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Phone number</h5>
                        <p>+2001119584725</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Quick access</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home page</a>
                    <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About US</a>
                    <a class="text-white mb-2" href="class.php"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white mb-2" href="team.php"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                    <a class="text-white mb-2" href="donation.php"><i class="fa fa-angle-right mr-2"></i>Donation</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact US</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">

                </h3>

            </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="https://www.facebook.com/Center.altahsse">Speech specialist </a>
                All rights reserved to the Faculty of Computing and Artificial Intelligence,<a class="text-primary font-weight-bold" href="http://fcih.helwan.edu.eg/">Helwan University</a>
            </p>
        </div>
    </div>
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

    $conn->close();

} else {

    header("Location: ../../registration_and_login/login.php");

    exit();

}

?>
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
                    <a href="single.php" class="nav-item nav-link">Events</a>
                    <a href="comments.php" class="nav-item nav-link">Commnets</a>
                    <a href="assignment.php" class="nav-item nav-link">Assignment</a>
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
              
                <p class="text-white mb-4"></p>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
            
            </div>
        </div>
    </div>
        <!-- Header End -->

        <!-- main start -->


        <div class="container-fluid pt-5 pb-3">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="section-title px-5"><span class="px-2">pickers</span></p>
                    <h1 class="mb-4">Tutorial clips</h1>
                </div>
                <div class="row portfolio-container">
                    <?php
                    $fetchVideos = mysqli_query($conn, "SELECT * FROM videos ORDER BY id DESC");
                    while ($row = mysqli_fetch_assoc($fetchVideos)) {
                        $location = $row['location'];
                        $name = $row['name'];
                        echo "<div class='col-lg-4 col-md-6 mb-4 portfolio-item first'>
                            <div class='position-relative overflow-hidden mb-2'>
                            
                             <video src='" . $location . "' controls width='320px' height='320px' ></video>     
                             <br>
                            <span>" . $name . "</span>
                            </div>
                            </div>";
                    }
                    ?>


                </div>
            </div>
        </div>



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
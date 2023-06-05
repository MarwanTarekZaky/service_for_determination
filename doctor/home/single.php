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
}else{
//echo "Connected successfully";
}

if(isset($_POST['set_event'])){


    $para1 = $_POST['para1'];
    $para2 = $_POST['para2'];
    $h1 = $_POST['h1'];
    $bigpara1 = $_POST['bigpara1'];
    $h2 = $_POST['h2'];
    $bigpara2 = $_POST['bigpara2'];
    $author_name = $_POST['author_name'];
    $abbrev = $_POST['abbrev'];
    $plaintext = $_POST['plaintext'];
    $type_number = $_POST['type_number'];

    $sql = "INSERT INTO events (para1, para2, h1, bigpara1, h2, bigpara2, author_name, abbrev, plaintext, type_number)
VALUES ('$para1', '$para2', '$h1', '$bigpara1', '$h2', '$bigpara2', '$author_name', '$abbrev', '$plaintext', $type_number)";

if ($conn->query($sql) === TRUE) {
    echo "New event created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}
  $conn->close();
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
                    <span class="text-primary"> Speech specialist</span>
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
                <h3 class="display-3 font-weight-bold text-white">Last event</h3>
                <div class="d-inline-flex text-white">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Detail Start -->

        <!-- Related Post -->



        <!-- Comment List -->

        <h1
            style="display: block; width: 100%; margin: 50px; font-family: 'Times New Roman', Times, serif; color: cadetblue;">
            Enter the event's content</h1>

        <!-- Comment Form -->
        <!--form -->

        <form style="margin: 50px;" method="post">

            <div class="form-group">
                <label for="para1">First paragraph</label>
                <textarea name="para1" class="form-control" id="para1" rows="3"></textarea>
            </div>
            <br>

            <div class="form-group">
                <label for="para1">Second paragraph</label>
                <textarea name="para2" class="form-control" id="para2" rows="3"></textarea>
            </div>
            <br>
            <input name="h1" class="form-control form-control-lg" type="text" placeholder="first heading">

            <br>
            <br>
            <div class="form-group">
                <label for="bigpara1">First big paragraph</label>
                <textarea name="bigpara1" class="form-control" id="bigpara1" rows="6"></textarea>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label for="h2">Second heading</label>
                <input name="h2" type="text" class="form-control" id="h2" placeholder="Second heading">
            </div>
            <br><br>
            <div class="form-group">
                <label for="bigpara2">Second big paragraph</label>
                <textarea name="bigpara2" class="form-control" id="bigpara2" rows="6"></textarea>
            </div>
            <br>
            <br>

            <div class="form-group">
                <label for="author_name"></label>
                <input name="author_name" type="text" class="form-control" id="author_name" placeholder="Author name">
            </div>
            <br><br>
            <div class="form-group">
                <label for="abbrev">Abbreviation</label>
                <textarea name="abbrev" class="form-control" id="abbrev" rows="3"></textarea>
            </div>
            <br><br>
            <div class="form-group">
                <label for="plaintext">plain text</label>
                <textarea name="plaintext" class="form-control" id="plaintext" rows="3"></textarea>
            </div>
            <br><br>

            <div class="form-group">
                <label for="type_number"></label>
                <input name="type_number" type="number" class="form-control" id="type_number" placeholder="Event type">
            </div>

            <br><br>
            <button name="set_event" type="submit" class="btn btn-primary">Submit Event</button>
        </form>

        <!--form end  -->

        <!-- Author Bio -->


        <!-- Search Form -->


        <!-- Category List -->


        <!-- Single Image -->

        <!-- Recent Post -->

        <!-- Single Image -->

        <!-- Tag Cloud -->


        <!-- Single Image -->


        <!-- Plain Text -->

        <!-- Detail End -->


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
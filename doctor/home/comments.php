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

    $success_message = '';

    if (isset($_POST['set_note'])) {

        // $doctor_name = $_POST['doctor_name'];
        $doctor_name = $_SESSION['name'];
        $user_name = $_POST['user_name'];
        $subject_name = $_POST['subject_name'];
        $note = $_POST['note'];



        $sql = "INSERT INTO notes (doctor_name, user_name, subject_name, note)
            VALUES ('$doctor_name', '$user_name', '$subject_name', '$note')";

        if ($conn->query($sql) === TRUE) {
            // echo "<h1>New note sent successfully</h1>";
            $success_message = "<h1>New note sent successfully</h1>";

            // $success_message = "New note sent successfully";

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
        <title>Comments</title>
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
                <h3 class="display-3 font-weight-bold text-white">Comments &amp; notes</h3>
                <div class="d-inline-flex text-white">
                </div>
            </div>
        </div>
        <!-- Header End -->


        



        <!-- main Start -->

        <!-- make note -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <h2 class="mb-4">Leave note</h2>
                    <h2 class="mb-4"><?php echo $success_message; ?></h2>
                    <form method="post">
                        <div class="form-group">
                            <label for="user_name">Patient name</label>
                            <input name="user_name" type="text" class="form-control" id="user_name" placeholder="patient name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="subject_name">Subject</label>
                            <input name="subject_name" type="text" class="form-control" id="subject_name"
                                placeholder="subject about ..." required>
                        </div>
                        <div class="form-group">
                            <label for="note">Message</label>
                            <textarea name="note" id="note" cols="30" rows="5" class="form-control"
                                placeholder="I want to high light that..." required></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input name="set_note" type="submit" value="Leave note" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end make note -->



        <!-- list all notes -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <h2 class="mb-4">List all notes</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="search_name" id="search_name" placeholder="Doctor / patient name">
                            <input name="list_notes" type="submit" value="View all" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end list all notes -->



        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <?php if (isset($_POST['list_notes'])) {

                        $search_name = $_POST['search_name'];
                        

                        $sql = "SELECT doctor_name, user_name, note FROM notes WHERE doctor_name = '$search_name' OR user_name = '$search_name' ";


                        if ($res = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($res) > 0) {
                                echo "<div class='container'>";
                                echo "<table class='table table-striped'>";
                                echo "<tr>";
                                echo "<th scope='col'>Doctor name</th>";
                                echo "<th scope='col'>User name</th>";
                                echo "<th scope='col'>note</th>";
                                echo "</tr>";
                                while ($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['doctor_name'] . "</td>";
                                    echo "<td>" . $row['user_name'] . "</td>";
                                    echo "<td>" . $row['note'] . "</td>";
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



        <!-- remove all notes -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">

                <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"><?php echo $success_message ?></h1>
                    <h2 class="mb-4">Remove notes</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="search_name" id="search_name" placeholder="Doctor / patient name">
                            <input name="remove_notes" type="submit" value="Remove"
                                class="btn btn-primary px-3">
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

                        $sql = "DELETE FROM notes WHERE (doctor_name = '$search_name')OR (user_name = '$search_name')";

                        if ($conn->query($sql) === TRUE) {
                            echo "<h1>All note deleted successfully</h1>";
                
                             $success_message = "New note sent successfully";
                
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();

                    }

                    ?>
                </div>
            </div>
        </div>



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

} else {

    header("Location: ../../registration_and_login/login.php");

    exit();

}

?>
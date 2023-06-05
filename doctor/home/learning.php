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


    if (isset($_POST['set_lesson'])) {

        $doctor_name = $_POST['doctor_name'];
        $lesson_name = $_POST['lesson_name'];
        $disease_type = $_POST['disease_type'];
        $text_content = $_POST['text_content'];
        //$video = $_POST['video'];
        //$image = $_POST['image'];
        $assignment = $_POST['assignment'];
        //$audio_file = $_POST['audio_file'];



        $audio_name = $_FILES['audio_file']['name'];
        if ($_FILES['audio_file']['type'] == 'audio/mpeg' || $_FILES['audio_file']['type'] == 'audio/mpeg3' || $_FILES['audio_file']['type'] == 'audio/x-mpeg3' || $_FILES['audio_file']['type'] == 'audio/mp3' || $_FILES['audio_file']['type'] == 'audio/x-wav' || $_FILES['audio_file']['type'] == 'audio/wav') {
            $new_file_name = $_FILES['audio_file']['name'];
            // Where the file is going to be placed
            $target_path = "../../lesson/" . $new_file_name;
            //target path where u want to store file.
            //following function will move uploaded file to audios folder. 
            move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path);
        }



        if (!empty($_FILES["image"]["name"])) {
            //uploading photos
            // File upload path
            $targetDir = "../../lesson/";
            $fileName = basename($_FILES["image"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            // Allow certain file formats
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
                // Insert image file name into database
            }
        }

        if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
            $name = $_FILES['video']['name'];
            $target_dir = "../../lesson/";    
            $target_file = $target_dir . $_FILES["video"]["name"];
            // Select file type
            $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Valid file extensions
            $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");
            // Check extension
            if (in_array($extension, $extensions_arr)) {
                    move_uploaded_file($_FILES['video']['tmp_name'], $target_file);       
            }
    }


        $insert = $conn->query("INSERT into lesson (doctor_name,lesson_name, disease_type, text_content, video, image, audio, assignment) VALUES ('" . $doctor_name . "','" . $lesson_name . "', $disease_type, '" . $text_content . "', '" . $target_file . "', '" . $fileName . "', '" . $audio_name . "', '" . $assignment . "')");
        if ($insert) {
        } else {
        }
    }

    
     




    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>التخصصي للتخاطب</title>
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
                    <a href="single.php" class="nav-item nav-link">Events</a>
                    <a href="blog.php" class="nav-item nav-link">Rehabilitation</a>
                    <a href="comments.php" class="nav-item nav-link">Comments</a>
                    <a href="assignment.php" class="nav-item nav-link">Assignments</a>
                    <a href="progress.php" class="nav-item nav-link">progress</a>
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    </div>

                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-primary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 150px">
                <h3 class="display-3 font-weight-bold text-white">Learning lessons</h3>
                <div class="d-inline-flex text-white">
                </div>
            </div>
        </div>
        <!-- Header End -->





        <!-- main Start -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <h1
                        style="display: block; width: 100%; margin: 50px; font-family: 'Times New Roman', Times, serif; color: cadetblue;">Add educational content</h1>
                    <form method="post" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label for="doctor_name">Doctor name</label>
                            <input name="doctor_name" type="text" class="form-control" id="doctor_name"
                                placeholder="doctor name ..." required>
                        </div>
                        <div class="form-group">
                            <label for="lesson_name">Lesson name</label>
                            <input name="lesson_name" type="text" class="form-control" id="lesson_name"
                                placeholder="lesson about ..." required>
                        </div>
                        <div class="form-group">
                            <label for="disease_type">Disease type</label>
                            <input name="disease_type" type="number" class="form-control" id="disease_type" max="3" min="1"
                                placeholder="Disease type" required>
                        </div>
                        <div class="form-group">
                            <label for="text_content">The textual content of the lesson</label>
                            <textarea name="text_content" id="text_content" cols="30" rows="5" class="form-control"
                                placeholder="I want to talk about...." required></textarea>
                        </div>
                        <div class="form-group">
                            <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;">
                                <?php echo $success_message_video ?>
                            </h1>
                            <label for="video">Add video clip</label>
                            <input name="video" type="file" class="form-control" id="video">
                        </div>
                        <div class="form-group">
                            <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;">
                                <?php echo $success_message_image ?>
                            </h1>
                            <label for="image">Add image</label>
                            <input name="image" type="file" class="form-control" id="image">
                        </div>
                        <div class="form-group">
                            <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;">
                                <?php echo $success_message_audio ?>
                            </h1>
                            <label for="audio_file">Add an audio clip</label>
                            <input name="audio_file" type="file" class="form-control" id="audio_file">
                        </div>
                        <div class="form-group">
                            <label for="assignment">Textual content</label>
                            <textarea name="assignment" id="assignment" cols="30" rows="5" class="form-control"
                                placeholder="The required asignment for the lesson ...." required></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input name="set_lesson" type="submit" value="Add lesson" class="btn btn-primary px-3">
                        </div>
                    </form>
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
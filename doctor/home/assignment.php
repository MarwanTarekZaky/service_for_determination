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
                    <span class="text-primary">التخصصي للتخاطب</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav font-weight-bold mx-auto py-0">
                        <a href="index.php" class="nav-item nav-link">الصفحه الرئيسيه</a>
                        <a href="../registration_and_login/delete_user.php" class="nav-item nav-link">حذف مستخدم</a>

                        <a href="logout.php" class="nav-item nav-link">تسجيل الخروج</a>
                        <a href="../registration_and_login/login.php" class="nav-item nav-link">تسجيل الدخول</a>
                        <!--<a href="../registration_and_login/signup.php" class="nav-item nav-link">انشاء حساب</a>-->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">صفحات الموقع</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="blog.php" class="dropdown-item">اعاده التاهيل</a>
                                <a href="single.php" class="dropdown-item">اخبار المركز</a>
                                <a href="examples.php" class="dropdown-item">اسئله</a>
                                <a href="comments.php" class="dropdown-item">ملاحظات</a>
                                <a href="assignment.php" class="dropdown-item">التسليمات</a>
                                <a href="progress.php" class="dropdown-item">الاداء</a>
                                <a href="learning.php" class="dropdown-item">التعلم</a>
                            </div>
                        </div>

                    </div>

                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-primary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 font-weight-bold text-white">التسليمات</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0"><a class="text-white" href="index.php">الصفحه الرئيسيه</a></p>
                    <p class="m-0 px-2">/</p>
                    <p class="m-0"> </p>
                </div>
            </div>
        </div>
        <!-- Header End -->





        <!-- main Start -->



        <!-- show videos asignment -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <h2 class="mb-4">اعرض المقاطع لمريض</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="user_name" id="user_name" placeholder="اسم المريض" required>
                            <input name="show_videos" type="submit" value="اعرض جميع المقاطع" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <div class="container-fluid pt-5 pb-3">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="section-title px-5"><span class="px-2">مقاطع فيديوهات المرضي</span></p>
                    <h1 class="mb-4">مقاطع التسليمات </h1>
                </div>
                <div class="row portfolio-container">
                    <?php

                    if (isset($_POST['show_videos'])) {
                        $user_name = $_POST['user_name'];
                        $fetchVideos = mysqli_query($conn, "SELECT * FROM assignment_videos WHERE user_name='$user_name' ORDER BY id DESC ");
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
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- End showing videos -->



        <!-- show images asignment -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <h2 class="mb-4">اعرض صور التسليمات</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="user_name" id="user_name" placeholder="اسم المريض" required>
                            <input name="show_images" type="submit" value="اعرض جميع الصور" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="container-fluid pt-5 pb-3">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="section-title px-5"><span class="px-2"> صور تسليمات المرضي</span></p>
                    <h1 class="mb-4">صور التسليمات </h1>
                </div>
                <div class="row portfolio-container">
                    <?php
                    if (isset($_POST['show_images'])) {
                        $user_name = $_POST['user_name'];
                        $fetchImages = mysqli_query($conn, "SELECT * FROM assignment_images WHERE user_name='$user_name' ORDER BY uploaded_on DESC ");
                        while ($row = mysqli_fetch_assoc($fetchImages)) {
                            $imageURL = '../../assignment_images/' . $row["file_name"];
                            echo "<div class='col-lg-4 col-md-6 mb-4 portfolio-item first'>
                                <div class='position-relative overflow-hidden mb-2'>
                                <img src='" . $imageURL . "' alt='' />     
                                <br>
                                </div>
                                </div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- End images assignment -->

        <!-- show audios asignment -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <h2 class="mb-4">اعرض صوتيات التسليمات</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="user_name" id="user_name" placeholder="اسم المريض" required>
                            <input name="show_audios" type="submit" value="اعرض جميع الصوتيات" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="container-fluid pt-5 pb-3">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="section-title px-5"><span class="px-2"> صوتيات تسليمات المرضي</span></p>
                    <h1 class="mb-4"> تسليمات الصوتيات </h1>
                </div>
                <div class="row portfolio-container">
                    <?php
                    if (isset($_POST['show_audios'])) {
                        $user_name = $_POST['user_name'];
                        $fetchAudios = mysqli_query($conn, "SELECT * FROM assignment_audios WHERE user_name='$user_name' ORDER BY uploaded_on DESC ");
                        while ($row = mysqli_fetch_assoc($fetchAudios)) {
                            $audioURL = '../../assignment_audios/' . $row["file_name"];
                            echo "<div class='col-lg-4 col-md-6 mb-4 portfolio-item first'>
                                <div class='position-relative overflow-hidden mb-2'>
                                <audio controls >
                                    <source src='" . $audioURL . "' type='audio/mpeg' > 
                                    Your browser does not support the audio element.
                                </audio>    
                                <br>
                                </div>
                                </div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- End audios assignment -->




        <!-- Deleting assignment -->


        <!-- Start Deleting videos -->

             
             <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">

                <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"><?php echo $success_message ?></h1>
                    <h2 class="mb-4">احذف التسليمات السابقه</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="search_name" id="search_name" placeholder="اسم المريض">
                            <input name="remove_all_assignment" type="submit" value="احذف جميع التسليمات"
                                class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <?php if (isset($_POST['remove_all_assignment'])) {

                            $search_name = $_POST['search_name'];

                            $sql = "DELETE FROM assignment_audios WHERE user_name = '$search_name'";
                            $conn->query($sql);

                            $sql = "DELETE FROM assignment_images WHERE user_name = '$search_name'";
                            $conn->query($sql);

                            $sql = "DELETE FROM assignment_videos WHERE user_name = '$search_name'";
                            $conn->query($sql);
                            
    
                            $success_message = "Previous assignments Deleted successfully";
                
                        
                            //echo "Error: " . $sql . "<br>" . $conn->error;
                        

                        //$conn->close();

                    }

                    ?>
                </div>
            </div>
        </div>

        <!-- End Deleting videos -->


        <!-- Start deleting images -->
        <!-- End deleting images -->

        <!-- Start Deleting audios -->
        <!-- End deleting audios -->


        <!-- End deleting assignment -->

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

    header("Location: ../registration_and_login/login.php");

    exit();

}

?>
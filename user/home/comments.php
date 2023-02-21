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
    // echo "Connected successfully";
}
$success_message = '';
        if(isset($_POST['set_note'])){
    
            $doctor_name = $_POST['doctor_name'];
            $user_name = $_POST['user_name'];
            $subject_name = $_POST['subject_name'];
            $note = $_POST['note'];
            
    
    
            $sql = "INSERT INTO notes (doctor_name, user_name, subject_name, note)
            VALUES ('$doctor_name', '$user_name', '$subject_name', '$note')";
            
            if ($conn->query($sql) === TRUE) {
            //   echo "<h1>New note sent successfully</h1>";
            $success_message = "New note sent successfully";
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
                        <a href="about.php" class="nav-item nav-link active">نبذه عن المركز</a>
                        <a href="class.php" class="nav-item nav-link">البرامج الدراسيه</a>
                        <a href="team.php" class="nav-item nav-link">اطباء المركز</a>
                        <a href="gallery.php" class="nav-item nav-link">صور المركز</a>
                        <a href="logout.php" class="nav-item nav-link">تسجيل الخروج</a>
                        <a href="../registration_and_login/login.php" class="nav-item nav-link">تسجيل الدخول</a>
                        <a href="../registration_and_login/signup.php" class="nav-item nav-link">انشاء حساب</a>
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
                        <a href="contact.php" class="nav-item nav-link">تواصل معنا</a>
                    </div>
                    <a href="https://form.123formbuilder.com/6371643/auction-donation-form"
                        class="btn btn-primary px-4">التبرع للمركز</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-primary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 font-weight-bold text-white">اترك ملاحظه</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0"><a class="text-white" href="index.php">الصفحه الرئيسيه</a></p>
                    <p class="m-0 px-2">/</p>
                    <p class="m-0"></p>
                </div>
            </div>
        </div>
        <!-- Header End -->





        <!-- main Start -->
        <div class="container-fluid pt-5">
            <div class="container">

            <h1 style="color: aqua; margin: 30px; font-family: 'Times New Roman', Times, serif;"><?php echo $success_message ?></h1>
                <div class="bg-light p-5">
                    <h2 class="mb-4">اترك ملاحظه</h2>
                    <form method="post">
                        <div class="form-group">
                            <label for="doctor_name">اسم الطبيب</label>
                            <input name="doctor_name" type="text" class="form-control" id="doctor_name"
                                placeholder="اسم الطبيب" required>
                        </div>

                        <div class="form-group">
                            <label for="user_name">اسم الطفل</label>
                            <input name="user_name" type="text" class="form-control" id="user_name" placeholder="اسم المريض"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="subject_name">عنوان الموضوع</label>
                            <input name="subject_name" type="text" class="form-control" id="subject_name"
                                placeholder="الموضوع عن ..." required>
                        </div>

                        <div class="form-group">
                            <label for="note">الرساله</label>
                            <textarea name="note" id="note" cols="30" rows="5" class="form-control"
                                placeholder="اريد ان الفت الانتباه الي..." required></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input name="set_note" type="submit" value="اترك ملاحظه" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>

            </div>
        </div>




          <!-- list all notes -->
          <div class="container-fluid pt-5">
            <div class="container">
                <div class="bg-light p-5">
                    <h2 class="mb-4">اعرض الملاحظات</h2>
                    <form method="post">
                        <div class="form-group mb-0">
                            <input type="search" name="search_name" id="search_name" placeholder="اسم الطبيب">
                            <input name="list_notes" type="submit" value="اعرض جميع الملاحظات" class="btn btn-primary px-3">
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

                        $sql = "SELECT doctor_name, user_name, note FROM notes WHERE doctor_name = '$search_name' ";


                        if ($res = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($res) > 0) {
                                echo "<table>";
                                echo "<tr>";
                                echo "<th>Doctor name</th>";
                                echo "<th>User name</th>";
                                echo "<th>note</th>";
                                echo "</tr>";
                                while ($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['doctor_name'] . "</td>";
                                    echo "<td>" . $row['user_name'] . "</td>";
                                    echo "<td>" . $row['note'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
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




        <!-- main End -->


        <!-- Footer Start -->

        <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
            <div class="row pt-5">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                        style="font-size: 40px; line-height: 40px;">
                        <i class="flaticon-043-teddy-bear"></i>
                        <span class="text-white">للتواصل</span>
                    </a>
                    <p>اداره المركز تسعد للتواصل مع حضراتكم و متابع كافه انشطه الطلبه عبر شبكه التواصل الاجتماعي خاصتنا</p>
                    <div class="d-flex justify-content-start mt-4">

                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px;" href="https://www.facebook.com/Center.altahsse"><i
                                class="fab fa-facebook-f"></i></a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h3 class="text-primary mb-4">ابقي علي تواصل</h3>
                    <div class="d-flex">
                        <h4 class="fa fa-map-marker-alt text-primary"></h4>
                        <div class="pl-3">
                            <h5 class="text-white">العنوان</h5>
                            <p>اطفيح , الجيزه , مصر</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <h4 class="fa fa-envelope text-primary"></h4>
                        <div class="pl-3">
                            <h5 class="text-white">البريد الالكتروني</h5>
                            <p>serviceDetermination@example.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <h4 class="fa fa-phone-alt text-primary"></h4>
                        <div class="pl-3">
                            <h5 class="text-white">رقم الهاتف</h5>
                            <p>+2001119584725</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h3 class="text-primary mb-4">وصول سريع</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>الصفحه
                            الرئيسيه</a>
                        <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>نبذه عنا</a>
                        <a class="text-white mb-2" href="class.php"><i class="fa fa-angle-right mr-2"></i>البرامج
                            العلاجيه</a>
                        <a class="text-white mb-2" href="team.php"><i class="fa fa-angle-right mr-2"></i>اساتذنا</a>
                        <a class="text-white mb-2" href="donation.php"><i class="fa fa-angle-right mr-2"></i>التبرع</a>
                        <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>تواصل معنا</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h3 class="text-primary mb-4">

                    </h3>

                </div>
            </div>
            <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
                <p class="m-0 text-center text-white">
                    &copy; <a class="text-primary font-weight-bold" href="https://www.facebook.com/Center.altahsse">التخصصي
                        للتخاطب</a>
                    كل الحقوق محفوظه لدي كليه الحاسبات و الذكاء الاصطناعي جامعه حلوان
                    <a class="text-primary font-weight-bold" href="http://fcih.helwan.edu.eg/">كليه الحاسبات</a>
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

} else {

    header("Location: ../registration_and_login/login.php");

    exit();

}

?>
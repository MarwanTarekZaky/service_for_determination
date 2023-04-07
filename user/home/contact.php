<?php

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
        echo "Connected successfully";
    }
    $success_message = '';

    if (isset($_POST['set'])) {


        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
       
        $sql = "INSERT INTO user_message (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
     

        if ($conn->query($sql) === TRUE) {
              echo "<h1>New note sent successfully</h1>";
            // $success_message = "New message sent successfully";
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
                <h3 class="display-3 font-weight-bold text-white">تواصل معنا</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0"><a class="text-white" href="index.php">الصفحه الرئيسيه</a></p>
                    <p class="m-0 px-2">/</p>
                    <p class="m-0">تواصل معنا</p>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
      
            <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="section-title px-5"><span class="px-2"></span></p>
                    <h1 class="mb-4">تواصل معنا من اجل الاستفسار</h1>
                </div>
                <div class="row">
                    <div class="col-lg-7 mb-5">
                        <div class="contact-form">
                            <div id="success"></div>
                          
                            <div class="text-center pb-2">
                    <p class="section-title px-5"><span class="px-2"></span></p>
                    <h1 class="mb-4">نرحب بكم دائما في مواقعنا</h1>
                </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3475.7070948785736!2d31.254946884841335!3d29.408123455304885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14599528c7a6e261%3A0x6fb22dfca5a82c0f!2z2KfZhNmF2LHZg9iyINin2YTYqtiu2LXYtdmJINmE2YTYqtiu2KfYt9ioINio2KfYt9mB2YrYrQ!5e0!3m2!1sar!2seg!4v1680881280946!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                        </div>
                    </div>
                    <div class="col-lg-5 mb-5">
                        <p> تسعد اداره المركز في التواصل مع جميع عملائهاه لكي تحصل علي افضل و نرتقي بمستوي الخدمه التي
                            نقدمهاه من خلال جميع حميع الانشطه داخل المركز و بمكانكم التواصل عبر الوسائل التاليه</p>
                        <div class="d-flex">
                            <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                                style="width: 45px; height: 45px;"></i>
                            <div class="pl-3">
                                <h5>العنوان</h5>
                                <p>مصر, الجيزه , اطفيح</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                                style="width: 45px; height: 45px;"></i>
                            <div class="pl-3">
                                <h5>البريد الالكتروني</h5>
                                <p>servicedetermination@example.com</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                                style="width: 45px; height: 45px;"></i>
                            <div class="pl-3">
                                <h5>رقم الهاتف</h5>
                                <p>2001119584725</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                                style="width: 45px; height: 45px;"></i>
                            <div class="pl-3">
                                <h5>ساعات العمل</h5>
                                <strong>الاحد - الجمعه:</strong>
                                <p class="m-0">08:00 AM - 05:00 PM </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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
<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

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
                    <!-- <a href="../registration_and_login/signup.php" class="nav-item nav-link">انشاء حساب</a> -->
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
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Kids Learning Center</h4>
                <h1 class="display-3 font-weight-bold text-white">Hello, <?php echo $_SESSION['name']; ?></h1>
                
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/photos/photo1" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->
    
    <!-- Facilities Start -->


    <!-- About Start -->
    
    <!-- About End -->


    <!-- Class Start -->
  
    <!-- Class End -->


    <!-- Registration Start -->
  
    <!-- Registration End -->


    <!-- Team Start -->
    
    <!-- Team End -->


    <!-- Testimonial Start -->
    
                  
    <!-- Testimonial End -->


    <!-- Blog Start -->
    
          
    <!-- Blog End -->


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

     header("Location: ../registration_and_login/login.php");

     exit();

}

 ?>
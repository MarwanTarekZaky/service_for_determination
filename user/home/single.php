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
    //echo "Connected successfully";
}




    $sql = "SELECT * FROM events ORDER BY id DESC LIMIT 1";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        //echo "Record fetched successfully";
        //echo $row['author_name'];
       // echo $row['para1'];

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
                <h3 class="display-3 font-weight-bold text-white">اخر الانشطه</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0"><a class="text-white" href="index.php">الصفحه الرئيسيه</a></p>
                    <p class="m-0 px-2">/</p>
                    <p class="m-0">نشاطات المركز</p>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Detail Start -->
        <div class="container py-5">
            <div class="row pt-5">
                <div class="col-lg-8">
                    <div class="d-flex flex-column text-left mb-3">
                        <p class="section-title pr-5"><span class="pr-2">تفاصيل انشطه المركز</span></p>
                        <h1 class="mb-3">اخبار و احداث حصريه للمركز</h1>
                        <div class="d-flex">
                            <p class="mr-3"><i class="fa fa-user text-primary"></i> الدكتور</p>
                            <p class="mr-3"><i class="fa fa-folder text-primary"></i> ايفينت للمركز</p>
                            <p class="mr-3"><i class="fa fa-comments text-primary"></i> 15</p>
                        </div>
                    </div>
                    <div class="mb-5">
                        <img class="img-fluid rounded w-100 mb-4" src="img/detail.jpg" alt="Image">
                        <p>يوض متخصصو السمعيات لدينا بزراعة القوقعة للطفل ىف سن مبكرة حيث ييٍ
                            تكون النتائج أفضل نظ ًرا لأنها تساعد دماغ الطفل عل الوصول إلى الأصوات￼
                            اللازمة لتعلم المهارات اللغوية .ويعتمد أصغر سن يمكن خضوع الطفل فيه￼￼
                            لجراحة زراعة القوقعة عل حجم الطفل وصحته؛ حيث يصل غالبية الأطفال إلى￼
                            الحجم المناسب لإجراء تلك الجراحة ىف عمر ي رباوح من 10 إلى 12 شه ًرا.</p>
                        <p>تلعب عملية التأهيل والتدريب بعد الجراحة دوًرا حيوًيا ىف تحقيق أفضل نتائج ي
                            ممكنة فيما يتعلق بالقدرة عل السمع. بالنسبة للمر ىض الوافدين من الخارج￼
                            لإجراء الجراحة ىف مدينة بلتيمور، فنحن نوض بالمتابعة أو ًلا مع متخصصى￼ ييي
                            ىىىى￼
                            السمعيات وأخصائ رن التأهيل التابع ري لمستشف جونز هوبكب خلال الشهور
                            الأولى بعد إجراء الجراحة .وبعد ذلك، سنعمل مع المر ىض لمساعدتهم ىف إيجاد￼ ي
                            متخصصى سمعيات وأخصائرن تأهيل سمع ىف بلادهم لتولى رعايتهم عل المدى ييييي
                            ي
                            الطويل.</p>
                        <h2 class="mb-4">متلازمه داون</h2>
                        <img class="img-fluid rounded w-50 float-left mr-4 mb-3" src="img/blog-1.jpg" alt="Image">
                        <p> ىف علاج متلازمة داون ، تخلق أنشطة العلاج ال رن تق ربب من كونها شاملة ىف
ييي 
المواقف الجسدية والاجتماعية والنفسية خطة تقييم وعلاج واسعة النطاق
تخطط أي ًضا لحياة الفرد المستقبلية. تخلق أنشطة العلاج بالأرجح ال رن ي
تهدف إلى أقصى درجة من الاستقلال خطة علاجية يمكن أن تتكيف مع
إمكانات العمل والتطبيق ال رن يمكن العثور عليها وتطويرها وتكييفها ىف علاج ىيي
متلازمة داون ، بما ف ذلك الأفراد ، مع أفضل المهارات. يتم وضع خطة ىي
علاج واسعة ف علاج متلازمة داون ، بالتواصل مع الأسرة ومقدم الرعاية يي
الفردية.</p>
                        <h3 class="mb-4">ال ربنامج التأهيل زراعة القوقعة</h3>
                        <img class="img-fluid rounded w-50 float-right ml-4 mb-3" src="img/blog-2.jpg" alt="Image">
                        <p>تتضمن عملية السمع أكبر من مجرد التعرف عل الأصوات فحسب — فما نستمع
إليه يؤثر عل قدرتنا عل التعلم وكيفية إدراكنا للعالم من حولنا بالنسبة للبالغ
قد يؤثر فقدان السمع الحاد عل تفاعلهم الاجتماع، وأدائهم الوظيفي، وصحتهم￼
العامة.أمابالنسبة للصغار ،فقد يتسبب فقدانا لسمع الحاد ىفإعاقة مسار النموي
الطبي علي لمهاراتهم اللغوية والاجتماعية تعد زراعة القوقعة وسيلة لعلاج المصاب
بالصمم أو ضعف السمع .وهذه القوقعة عبارة عن جهاز إلك ربو ىث صغ رب الحجم
يعمل عل قياسا لأصوات ومعالجتها،ثم تحفربالعصب السمعي لتوصيل الصوت
للشخص الذي لا يمكنه سماع الأصوات بطريقة أخرى</p>
                    </div>

                    <!-- Related Post -->
                    <div class="mb-5 mx-n3">
                        <h2 class="mb-4 ml-3">منشورات ذات صله</h2>
                        <div class="owl-carousel post-carousel position-relative">
                            <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                                <img class="img-fluid" src="img/post-1.jpg" style="width: 80px; height: 80px;">
                                <div class="pl-3">
                                    <h5 class="">الأسلوب المعرفي cognitive style</h5>
                                    <div class="d-flex">
                                        <small class="mr-3"><i class="fa fa-user text-primary"></i> Doctor</small>
                                        <small class="mr-3"><i class="fa fa-folder text-primary"></i> cognitive
                                            style</small>
                                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                                <img class="img-fluid" src="img/post-2.jpg" style="width: 80px; height: 80px;">
                                <div class="pl-3">
                                    <h5 class="">المضطربون انفعاليا emotionally disturbed </h5>
                                    <div class="d-flex">
                                        <small class="mr-3"><i class="fa fa-user text-primary"></i> Doctor</small>
                                        <small class="mr-3"><i class="fa fa-folder text-primary"></i> emotionally
                                            disturbed</small>
                                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                                <img class="img-fluid" src="img/post-3.jpg" style="width: 80px; height: 80px;">
                                <div class="pl-3">
                                    <h5 class="">التأهيل Habilitaion</h5>
                                    <div class="d-flex">
                                        <small class="mr-3"><i class="fa fa-user text-primary"></i> Doctor</small>
                                        <small class="mr-3"><i class="fa fa-folder text-primary"></i> Habilitaion</small>
                                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment List -->
                    <div class="mb-5">
                        <h2 class="mb-4"></h2>
                        <div class="media mb-4">
                            <!-- <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                        <button class="btn btn-sm btn-light">Reply</button>
                                    </div> -->
                        </div>

                    </div>

                    <!-- Comment Form -->

                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4">
                        <!-- <img src="img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;"> -->
                        <h3 class="text-secondary mb-3">سعيد ندا</h3>
                        <p class="text-white m-0">مدير و منشاء المركز التخصصي للتخاطب باطفيح ودكتور تخاطب و تنميه</p>
                    </div>

                    <!-- Search Form -->
                    <div class="mb-5">

                    </div>

                    <!-- Category List -->
                    <div class="mb-5">
                        <h2 class="mb-4">الفئات</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="">الإعاقة العقلية Mental Retardation</a>
                                <span class="badge badge-primary badge-pill">150</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="">صعوبات التعلم Learing Disabilities </a>
                                <span class="badge badge-primary badge-pill">131</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="">متعددو الإعاقات multihandicapped</a>
                                <span class="badge badge-primary badge-pill">78</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href=""> التشخيص التربوي Educational Diagnosis</a>
                                <span class="badge badge-primary badge-pill">56</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="">اختصاصي العلاج التربوي Educational Therapist</a>
                                <span class="badge badge-primary badge-pill">98</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Single Image -->
                    <div class="mb-5">
                        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                    </div>

                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h2 class="mb-4">اخر المنشورات</h2>
                        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/post-1.jpg" style="width: 80px; height: 80px;">
                            <div class="pl-3">
                                <h5 class="">التأهيل Habilitaion</h5>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Doctor</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Habilitaion</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/post-2.jpg" style="width: 80px; height: 80px;">
                            <div class="pl-3">
                                <h5 class="">المضطربون انفعاليا emotionally disturbed </h5>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Doctor</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> emotionally
                                        disturbed</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/post-3.jpg" style="width: 80px; height: 80px;">
                            <div class="pl-3">
                                <h5 class="">الأسلوب المعرفي cognitive style</h5>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Doctor</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> cognitive style</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Image -->
                    <div class="mb-5">
                        <img src="img/blog-2.jpg" alt="" class="img-fluid rounded">
                    </div>

                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h2 class="mb-4">ابرز المواضيع</h2>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-outline-primary m-1">التعزيز المتقطع / الجزئي</a>
                            <a href="" class="btn btn-outline-primary m-1">غرفة لقياس السمع</a>
                            <a href="" class="btn btn-outline-primary m-1">التدرب على السلوك</a>
                            <a href="" class="btn btn-outline-primary m-1">تحليل المهمة</a>
                            <a href="" class="btn btn-outline-primary m-1">الأسلوب المعرفي</a>
                            <a href="" class="btn btn-outline-primary m-1">التخلف النمائي</a>
                        </div>
                    </div>

                    <!-- Single Image -->
                    <div class="mb-5">
                        <img src="img/blog-3.jpg" alt="" class="img-fluid rounded">
                    </div>

                    <!-- Plain Text -->
                    <div>
                        <h2 class="mb-4">نصائح ارشاديه</h2>
                        لاتخاذ القرار فيما إذا كنت مرشحا لزراعة قوقعة، يمكنك مقابلة أخصائي زراعة
القوقعة لدى جونز هوبكب الذين سيتولون تقييم بنية الأذن وإجراء التقييمات
الطبية والسمعية بالكامل
                    </div>
                </div>
            </div>
        </div>
        <!-- Detail End -->


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

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
                            <a href="donation.php" class="dropdown-item">Donation</a>
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
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 150px">
            <h3 class="display-3 font-weight-bold text-white">Events</h3>
            <div class="d-inline-flex text-white">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5"><span class="pr-2">center's activities</span></p>
                    <h1 class="mb-3">News and exclusive events of the center</h1>
                    <div class="d-flex">
                        <p class="mr-3"><i class="fa fa-user text-primary"></i>Doctor</p>
                        <p class="mr-3"><i class="fa fa-folder text-primary"></i>Cenetr events</p>
                        <p class="mr-3"><i class="fa fa-comments text-primary"></i> 15</p>
                    </div>
                </div>
                <div class="mb-5">
                    <img class="img-fluid rounded w-100 mb-4" src="img/photos/photo1.jpeg" alt="Image">
                    <p>Our audiologists recommend cochlear implantation for a child at an early age, where the results
                        are better because it helps the child’s brain access the sounds needed to learn language skills.
                        The youngest age at which a child can undergo cochlear implant surgery depends on the size and
                        health of the child; Most children reach the appropriate size for this surgery by the age of 10
                        to 12 months.

                        The rehabilitation and training process after surgery plays a vital role in achieving the best
                        possible hearing results. For patients arriving from abroad for surgery in Baltimore City, we
                        will first follow up with the Johns Hopkins Audiologists and Rehabilitators during the first
                        months after surgery. After that, we will work with patients to help them find ￼ Audiologists
                        and hearing rehabilitation specialists in their country to take over their long-term care.</p>
                    <p>The rehabilitation and training process after surgery plays a vital role in achieving the best
                        possible hearing results. For patients arriving from abroad for surgery in Baltimore City, we
                        will first follow up with the Johns Hopkins Audiologists and Rehabilitators during the first
                        months after surgery. After that, we will work with patients to help them find ￼ Audiologists
                        and hearing rehabilitation specialists in their country to take over their long-term care.</p>
                    <h2 class="mb-4">Down's syndrome</h2>
                    <img class="img-fluid rounded w-50 float-left mr-4 mb-3" src="img/blog-1.jpg" alt="Image">
                    <p>In the treatment of Down syndrome, therapeutic activities that are close to being comprehensive
                        in physical, social and psychological situations create a broad-based assessment and treatment
                        plan that also plans for the individual's future life. Therapeutic activities aiming at the
                        maximum degree of independence create a treatment plan that can be adapted to the functional
                        potentials and applications that can be found, developed and adapted in the treatment of Down
                        syndrome, including individuals, with the best skills. An extensive treatment plan is developed
                        in the treatment of Down syndrome, in communication with the family and individual caregiver.
                    </p>
                    <h3 class="mb-4">Cochlear implant rehabilitation programme</h3>
                    <img class="img-fluid rounded w-50 float-right ml-4 mb-3" src="img/photos/photo3.jpeg" alt="Image">
                    <p>Hearing involves more than just recognizing sounds — what we hear affects our ability to learn
                        and how we perceive the world around us. For an adult, severe hearing loss may affect social
                        interaction, functioning, and general health. For children, it can cause severe hearing loss. A
                        cochlear implant is a way to treat people who are deaf or hard of hearing. This cochlear implant
                        is a small electronic device that measures and processes sounds, then digs into the auditory
                        nerve to deliver the sound to the person who cannot hear the sounds in another way.</p>
                </div>

                <!-- Related Post -->
                <div class="mb-5 mx-n3">
                    <h2 class="mb-4 ml-3">Related Post</h2>
                    <div class="owl-carousel post-carousel position-relative">
                        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                            <img class="img-fluid" src="img/post-1.jpg" style="width: 80px; height: 80px;">
                            <div class="pl-3">
                                <h5 class="">cognitive style</h5>
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
                                <h5 class=""> emotionally disturbed </h5>
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
                                <h5 class=""> Habilitaion</h5>
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
                    <h3 class="text-secondary mb-3">Saied nadaa</h3>
                    <p class="text-white m-0">Director and founder of the Specialized Center for Speech in Atafih and
                        Doctor of Speech and Development</p>
                </div>

                <!-- Search Form -->
                <div class="mb-5">

                </div>

                <!-- Category List -->
                <div class="mb-5">
                    <h2 class="mb-4">categories</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href=""> Mental Retardation</a>
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href=""> Learing Disabilities </a>
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href=""> multihandicapped</a>
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href=""> Educational Diagnosis</a>
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href=""> Educational Therapist</a>
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div>

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="img/photos/photo22.jpeg" alt="" class="img-fluid rounded">
                </div>

                <!-- Recent Post -->
                <div class="mb-5">
                    <h2 class="mb-4">ecent Post </h2>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/post-1.jpg" style="width: 80px; height: 80px;">
                        <div class="pl-3">
                            <h5 class=""> Habilitaion</h5>
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
                            <h5 class=""> emotionally disturbed </h5>
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
                            <h5 class=""> cognitive style</h5>
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
                    <img src="img/photos/photo7.jpeg" alt="" class="img-fluid rounded">
                </div>

                <!-- Tag Cloud -->
                <div class="mb-5">
                    <h2 class="mb-4"> The most prominent topics</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Intermittent/partial reinforcement</a>
                        <a href="" class="btn btn-outline-primary m-1">Audiometry room</a>
                        <a href="" class="btn btn-outline-primary m-1">Behavior practice</a>
                        <a href="" class="btn btn-outline-primary m-1">Task analysis</a>
                        <a href="" class="btn btn-outline-primary m-1">Cognitive style</a>
                        <a href="" class="btn btn-outline-primary m-1">developmental retardation</a>
                    </div>
                </div>

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="img/photos/photo5.jpeg" alt="" class="img-fluid rounded">
                </div>

                <!-- Plain Text -->
                <div>
                    <h2 class="mb-4">Guidance tips</h2>To decide whether you are a candidate for a cochlear implant, you
                    can meet with a cochlear implant specialist at Johns Hopkins who will evaluate the structure of the
                    ear and perform the full medical and audiological evaluations
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
                    <span class="text-white">For contact</span>
                </a>
                <p>The center's house is happy to communicate with you and follow all the students' activities through
                    our social network</p>
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
                &copy; <a class="text-primary font-weight-bold" href="https://www.facebook.com/Center.altahsse">Speech
                    specialist </a>
                All rights reserved to the Faculty of Computing and Artificial Intelligence,<a
                    class="text-primary font-weight-bold" href="http://fcih.helwan.edu.eg/">Helwan University</a>
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
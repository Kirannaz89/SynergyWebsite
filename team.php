<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Synergy School System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<?php   
$db = "synergy";
$server = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($server,$user,$password,$db);

//$sql = "SELECT * FROM content WHERE CONCAT( page_id, section_id ) = CONCAT( '$page_id', '$section_id' );";


?>
    <div class="container-xxl bg-white p-0">
    <?php
        include("spinner.php");
    

       $activepage = 'page';
       include("navbar.php");
    
             
       $heading = 'Our Management Staff';
       include("header.php");
    
    ?>



        <?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'Home' AND sections.section_name='Home Fourteenth Section'
";

$data = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($data);      

$content_id = $row['content_id'];
$page_id = $row['page_id'];
$section_id = $row['section_id'];
$cont_title = $row['cont_title'];
$cont_desc = $row['cont_desc'];
$contImage = $row['cont_img'];
$contImage2 = $row['cont_img2'];
$contImage3 = $row['cont_img3'];
$contImage4 = $row['cont_img4'];
$button_title = $row['button_title'];

?>
        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
               
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src='../../synergy admin/cont_uploads/<?php echo $contImage; ?>' alt="">
                            <div class="team-text">
                                <h3>Mr Farooq Lodhi</h3>
                                <h3>M.D.</h3>
                                <!-- <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Message of MD Sir Farooq</h1>
                                <p class="mb-4">When I took hold of administering such a prestigeous education system I had not only in mind the various technical aspects of running a School rather I also felt a sense of duty to be able to deliver according to our motto "lux sapientiae vincit omnem ignorantiam" which translates to "The Light of Wisdom overcomes all ignorance" . Staying true to this we strive to bring children excellent academic education that also helps in character development and ethics of the generation which is to come.</p>
                                <!-- <a class="btn btn-primary py-3 px-5" href="teacher.php"><?php echo $button_title ?><i class="fa fa-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src='../../synergy admin/cont_uploads/<?php echo $contImage2; ?>' alt="">
                            <div class="team-text">
                                <h3>Miss Nusrat Lodhi </h3>
                                <h3>Coordinator</h3>
                                <!-- <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Message of Director Administration Miss Nusrat Lodhi</h1>
                                <p class="mb-4">When I started this School it only consisted of a few children but now it gives me a deep sense of satisfaction and pride that our School has blossomed in such a beautiful manner that we have become a name which is intertwined with quality education and academics. It gives me a sense of pride to see that our students are getting the best of the best in terms of education. My best wishes for the future of our school. </p>
                                <!-- <a class="btn btn-primary py-3 px-5" href="teacher.php"><?php echo $button_title ?><i class="fa fa-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src='../../synergy admin/cont_uploads/<?php echo $contImage3; ?>' alt="">
                            <div class="team-text">
                                <h3>Mr Junaid</h3>
                                <h3>Vice Principal</h3>
                                <!-- <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Message of Vice Principal Sir Junaid</h1>
                                <p class="mb-4">It gives me great pleasure to be a part of the administrative triangle of such a pristigeous education system which does not focus on primitive methods like rote learning instead it focuses on the practical skills and character development of children. I consider it a great priviledge to be able to become a part of something that seeks to elevate the upcoming generation of Pakistan inshallah.</p>
                                <!-- <a class="btn btn-primary py-3 px-5" href="teacher.php"><?php echo $button_title ?><i class="fa fa-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

<?php
include("footer.php");
?>




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
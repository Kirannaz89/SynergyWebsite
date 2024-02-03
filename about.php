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
    <div class="container-xxl bg-white p-0">
        <?php
        include("spinner.php");
    

       $activepage = 'about';
       include("navbar.php");
    
             
       $heading = 'About Us';
       include("header.php");
       ?>
       
<?php
$db = "synergy";
$server = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($server,$user,$password,$db);


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'About' AND sections.section_name='About First Section'
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


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4"><?php echo $cont_title ?></h1>
                        <p><?php echo $cont_desc ?></p>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src='../../synergy admin/cont_uploads/<?php echo $contImage; ?>' alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src='../../synergy admin/cont_uploads/<?php echo $contImage2; ?>' alt="">
                                
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src='../../synergy admin/cont_uploads/<?php echo $contImage3; ?>' alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
<?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'About' AND sections.section_name='About Second Section'
";

$data = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($data);      

$content_id = $row['content_id'];
$page_id = $row['page_id'];
$section_id = $row['section_id'];
$cont_title = $row['cont_title'];
$cont_desc = $row['cont_desc'];
$contImage = $row['cont_img'];
$button_title = $row['button_title'];

?>

        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src='../../synergy admin/cont_uploads/<?php echo $contImage; ?>' style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4"><?php echo $cont_title ?></h1>
                                <p class="mb-4"><?php echo $cont_desc ?></p>
                                <!-- <a class="btn btn-primary py-3 px-5" href="teacher.php"><?php echo $button_title ?><i class="fa fa-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'About' AND sections.section_name='About Third Section'
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


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4"><?php echo $cont_title ?></h1>
                        <p><?php echo $cont_desc ?></p>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src='../../synergy admin/cont_uploads/<?php echo $contImage; ?>' alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src='../../synergy admin/cont_uploads/<?php echo $contImage2; ?>' alt="">
                                
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src='../../synergy admin/cont_uploads/<?php echo $contImage3; ?>' alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
<?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'About' AND sections.section_name='About Fourth Section'
";

$data = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($data);      

$content_id = $row['content_id'];
$page_id = $row['page_id'];
$section_id = $row['section_id'];
$cont_title = $row['cont_title'];
$cont_desc = $row['cont_desc'];
$contImage = $row['cont_img'];
$button_title = $row['button_title'];

?>

        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src='../../synergy admin/cont_uploads/<?php echo $contImage; ?>' style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4"><?php echo $cont_title ?></h1>
                                <p class="mb-4"><?php echo $cont_desc ?></p>
                                <!-- <a class="btn btn-primary py-3 px-5" href="teacher.php"><?php echo $button_title ?><i class="fa fa-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'About' AND sections.section_name='About Fifth Section'
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


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4"><?php echo $cont_title ?></h1>
                        <p><?php echo $cont_desc ?></p>
                        
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src='../../synergy admin/cont_uploads/<?php echo $contImage; ?>' alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src='../../synergy admin/cont_uploads/<?php echo $contImage2; ?>' alt="">
                                
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src='../../synergy admin/cont_uploads/<?php echo $contImage3; ?>' alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'About' AND sections.section_name='About Sixth Section'
";

$data = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($data);      

$content_id = $row['content_id'];
$page_id = $row['page_id'];
$section_id = $row['section_id'];
$cont_title = $row['cont_title'];
$cont_desc = $row['cont_desc'];
$contImage = $row['cont_img'];
$button_title = $row['button_title'];

?>

        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src='../../synergy admin/cont_uploads/<?php echo $contImage; ?>' style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4"><?php echo $cont_title ?></h1>
                                <p class="mb-4"><?php echo $cont_desc ?></p>
                                <!-- <a class="btn btn-primary py-3 px-5" href="teacher.php"><?php echo $button_title ?><i class="fa fa-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About End -->
        


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
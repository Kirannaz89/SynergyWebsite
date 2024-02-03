<?php
session_start();
?>
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

    <!-- Animation css -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>

<body>
    





<?php   
$db = "synergy";
$server = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($server,$user,$password,$db);




?>


    <div class="container-xxl bg-white p-0">
    <?php
        include("spinner.php");
        ?>

       <?php
       $activepage = 'home';
       include("navbar.php");
       ?>
                           
                        
<?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'Home' AND sections.section_name='Home First Section'
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
        <!-- Carousel Start -->

        <div class='container-fluid p-0 mb-5'>
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative " >
                    <img  class='img-fluid' src='../../synergy admin/cont_uploads/<?php echo $contImage; ?>' alt=''>
        

                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                             
                                    
                               <h1 class='display-2 text-white animated slideInDown mb-4'><?php echo $cont_title ?></h1>
                                <p class='fs-5 fw-medium text-white mb-4 pb-2'><?php echo $cont_desc ?></p>
                                    <!-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a> -->
                                    <a href="admission-form.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 animated slideInRight"><?php echo $button_title ?></a>
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
WHERE pages.page_name = 'Home' AND sections.section_name='Home Second Section'
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


                <div class="owl-carousel-item position-relative">
               
                <img class="img-fluid" src="../../synergy admin/cont_uploads/<?php echo $contImage; ?>" alt="">


                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4"><?php echo $cont_title ?></h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2"><?php echo $cont_desc ?></p>
                                    <!-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a> -->
                                     <a href="admission-form.php" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight"><?php echo $button_title ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <?php
    if(isset($_SESSION['status_updated'])){
        if($_SESSION['status_updated']=="SU")
        {
            echo "<div id='hideMe'"?><?php echo"><h3 style='color: #157347'>your request has been recieved.<br>
            School Management will followup soon</h3></div>";
            unset($_SESSION['status_updated']);
        }
	}
	if(isset($_SESSION['failed_status'])){
        if($_SESSION['failed_status']=="IF")
        {
            echo "<div id='hideMe'"?><?php echo"><h4 style='color: #dc3545'>Your request has been already recieved.</h4></div>";
            unset($_SESSION['failed_status']);
        }
	}
?>

        <?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'Home' AND sections.section_name='Home Third Section'
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

        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3"><?php echo $cont_title ?></h1>
                    <p><?php echo $cont_desc ?></p>
                </div>

                <div class="row g-4">

<?php

$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'Home' AND sections.section_name='Home Fourth Section'
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

                
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-bus-alt fa-3x text-primary"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3"><?php echo $cont_title ?></h3>
                                <p class="mb-0"><?php echo $cont_desc ?></p>
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
WHERE pages.page_name = 'Home' AND sections.section_name='Home Fifth Section'
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
                
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-chalkboard-teacher fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3"><?php echo $cont_title ?></h3>
                                <p class="mb-0"><?php echo $cont_desc ?></p>
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
WHERE pages.page_name = 'Home' AND sections.section_name='Home Sixth Section'
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
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-home fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3"><?php echo $cont_title ?></h3>
                                <p class="mb-0"><?php echo $cont_desc ?></p>
                            </div>
                        </div>
                    </div>
</div>

                    <div class="row g-4 mt-4">         

<?php
//$sql = "SELECT * FROM content WHERE section_id = 25 AND page_id = 'home' ";

$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'Home' AND sections.section_name='Home Seventh Section'
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
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-futbol fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3"><?php echo $cont_title ?></h3>
                                <p class="mb-0"><?php echo $cont_desc ?></p>
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
WHERE pages.page_name = 'Home' AND sections.section_name='Home Eight Section'
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

                
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-water fa-3x text-primary"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3"><?php echo $cont_title ?></h3>
                                <p class="mb-0"><?php echo $cont_desc ?></p>
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
WHERE pages.page_name = 'Home' AND sections.section_name='Home Ninth  Section'
";
        
          $data = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($data);      
        
          $content_id = $row['content_id'];
          $page_id = $row['page_id'];
          $section_id = $row['section_id'];
          $cont_title = $row['cont_title'];
          $cont_desc = $row['cont_desc'];

          ?>
                
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-fire fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3"><?php echo $cont_title ?></h3>
                                <p class="mb-0"><?php echo $cont_desc ?></p>
                            </div>
                        </div>
                    </div>

                 </div>
               </div>

        <!-- Facilities End -->

        <?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'Home' AND sections.section_name='Home Tenth Section'
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
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="../../synergy admin/cont_uploads/<?php echo $contImage4; ?>" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Farooq Lodhi</h6>
                                        <small>M.D.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="../../synergy admin/cont_uploads/<?php echo $contImage; ?>" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="../../synergy admin/cont_uploads/<?php echo $contImage2; ?>" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="../../synergy admin/cont_uploads/<?php echo $contImage3; ?>" alt="">
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
WHERE pages.page_name = 'Home' AND sections.section_name='Home Eleventh Section'
";
        $data = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($data);      
        
        $content_id = $row['content_id'];
        $section_id = $row['section_id'];
        $page_id = $row['page_id'];
        $cont_title = $row['cont_title'];
        $cont_desc = $row['cont_desc'];
        $contImage = $row['cont_img'];
        $contImage2 = $row['cont_img2'];
        $contImage3 = $row['cont_img3'];
        $contImage4 = $row['cont_img4'];
        $button_title = $row['button_title'];
        ?>

         <!-- Classes Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3"><?php echo $cont_title ?></h1>
                    <p><?php echo $cont_desc ?></p>
                </div>
                <div class="row g-6">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="../../synergy admin/cont_uploads/<?php echo $contImage; ?>" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="classes.php">Arts & Craft</a>
                                 <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="../../synergy admin/cont_uploads/<?php echo $contImage2; ?>" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="classes.php">General Knowledge</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                     <div class="d-flex align-items-center">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="../../synergy admin/cont_uploads/<?php echo $contImage3; ?>" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="classes.php">Language & Speaking</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                     <div class="d-flex align-items-center">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="row g-6">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="../../synergy admin/cont_uploads/<?php echo $contImage4; ?>" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="classes.php">Computer Science</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                     <div class="d-flex align-items-center">
                                        
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
WHERE pages.page_name = 'Home' AND sections.section_name='Home twelveth Section'
";
        $data = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($data);      
        
        $content_id = $row['content_id'];
        $section_id = $row['section_id'];
        $page_id = $row['page_id'];

        $contImage = $row['cont_img'];
        $contImage2 = $row['cont_img2'];
    
    
        ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="../../synergy admin/cont_uploads/<?php echo $contImage; ?>" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="classes.php">Physical Activities</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                     <div class="d-flex align-items-center">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="../../synergy admin/cont_uploads/<?php echo $contImage2; ?>" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="classes.php">Students Telant</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                     <div class="d-flex align-items-center">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div> 
</div>
</div>
         <!-- Classes End -->
         
         <?php


$sql = "SELECT *
FROM content
LEFT JOIN pages
ON content.page_id = pages.page_id
LEFT JOIN sections
ON content.section_id = sections.section_id
WHERE pages.page_name = 'Home' AND sections.section_name='Home Thirteenth Section'
";
        $data = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($data);      
        
        $content_id = $row['content_id'];
        $section_id = $row['section_id'];
        $page_id = $row['page_id'];
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
                                <img class="position-absolute w-100 h-100 rounded" src="../../synergy admin/cont_uploads/<?php echo $contImage; ?>" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4"><?php echo $cont_title ?></h1>
                                <p class="mb-4"><?php echo $cont_desc ?>
                                </p>
                                <a class="btn btn-primary py-3 px-5" href="teacher.php"><?php echo $button_title ?><i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->

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
        $section_id = $row['section_id'];
        $page_id = $row['page_id']; 
          
        $cont_title = $row['cont_title'];
        $cont_desc = $row['cont_desc'];
        $contImage = $row['cont_img'];
        $contImage2 = $row['cont_img2'];
        $contImage3 = $row['cont_img3'];
        $button_title = $row['button_title'];
        ?>

        

      <!-- Team Start  -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3"><?php echo $cont_title ?></h1>
                    <p><?php echo $cont_desc ?></p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="../../synergy admin/cont_uploads/<?php echo $contImage; ?>" alt="">
                            <div class="team-text text-center">
                                <h3>Mr Farooq Lodhi</h3>
                                <h3>M.D.</h3>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="../../synergy admin/cont_uploads/<?php echo $contImage2; ?>" alt="">
                            <div class="team-text text-center">
                                <h3>Miss Nusrat Lodhi</h3>
                                <h3>Coordinator</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="../../synergy admin/cont_uploads/<?php echo $contImage3; ?>" alt="">
                            <div class="team-text text-center">
                                <h3>Mr Junaid</h3>
                                <h3>Vice Principal</h3> 
                               
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
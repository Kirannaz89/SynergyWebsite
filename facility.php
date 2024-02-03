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
    
             
       $heading = 'Facilities';
       include("header.php");
    
      ?>

        <?php
//$sql = "SELECT * FROM content WHERE section_id = 25 AND page_id = 'home' ";

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
//$sql = "SELECT * FROM content WHERE section_id = 25 AND page_id = 'home' ";

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
//$sql = "SELECT * FROM content WHERE section_id = 25 AND page_id = 'home' ";

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
//$sql = "SELECT * FROM content WHERE section_id = 25 AND page_id = 'home' ";

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
//$sql = "SELECT * FROM content WHERE section_id = 25 AND page_id = 'home' ";

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
//$sql = "SELECT * FROM content WHERE section_id = 25 AND page_id = 'home' ";

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


        <!-- Facilities End -->

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
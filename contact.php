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
    
    <div class="container-xxl bg-white p-0">

    <?php
        include("spinner.php");
    

       $activepage = 'contact';
       include("navbar.php");
    
             
       $heading = 'Contact Us';
       include("header.php");
    
      ?> 
<?php
$db = "synergy";
$server = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($server,$user,$password,$db);

?>

<?php
        
    if(isset($_SESSION['status_updated'])){
        if($_SESSION['status_updated']=="SU")
        {
            echo "<div id='hideMe'"?><?php echo"><h1 style='color: #157347'>your request has been recieved.</h1></div>";
            unset($_SESSION['status_updated']);
        }
	}
	if(isset($_SESSION['failed_status'])){
        if($_SESSION['failed_status']=="IF")
        {
            echo "<div id='hideMe'"?><?php echo"><h4 style='color: #dc3545'>Already Added Request</h4></div>";
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
WHERE pages.page_name = 'Contact Us' AND sections.section_name='Contact Us First Section'
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

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3"><?php echo  $cont_title ?></h1>
                    <p><?php echo  $cont_desc ?></p>
                </div>
                <div class="row g-4 mb-5">
                    <div class="col-md-6 col-lg-6 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h6>119 Sec-1 Opp. Akhtar Nawaz Khan Stadium, KTS, Haripur</h6>
                    </div>
                    <!-- <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                        <h6>info@example.com</h6>
                    </div> -->
                    <div class="col-md-6 col-lg-6 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <h6>0995-619722 / 0316-5575895</h6>
                    </div>
                </div>
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                

                            <form name="myForm" onsubmit="return validateForm()" action="contactAction.php" method="POST">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" name="pname" id="pname" placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" name="email" id="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" name="subj" id="subj" placeholder="Subject">
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea type="text" class="form-control border-0" name="msg" id="msg" placeholder="Please Write Your Message Here"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit" value="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.872957670037!2d72.91153607522432!3d34.02147181935537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38de4d4464d768c3%3A0x3907f0a312b66430!2sSynergy%20School%20System!5e0!3m2!1sen!2s!4v1702728745384!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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
    <script src="js/contact.js"></script>
</body>

</html>
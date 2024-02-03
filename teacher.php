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
    

       $activepage = 'page';
       include("navbar.php");
    
             
       $heading = 'Become A Teacher';
       include("header.php");
    
      ?>


        <!-- teacher request form-->

        <div class="bg-light rounded">
        <div class="row g-0">


        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                
                            <form action="teacherAction.php" method="POST" enctype="multipart/form-data">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" name="tname" placeholder="Your Name" required>
                                                <label for="name">Your Name</label>
                                           </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" name="email" placeholder="Your Email" required>
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" name="phone" placeholder="Phone" required>
                                                <label for="subject">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                        <label for="file">Your CV</label>
                                            <div class="form-floating">
                                                <input type="file"  class="form-control" name="cv_files" placeholder="Your CV" required>
                                            </div>
                                        </div> 
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit" name="Submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
        </div>
        </div>

        <!-- teacher request form -->


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
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
<div class="container-xxl bg-white p-0">
<?php
        include("spinner.php");
    

       $activepage = '';
       include("navbar.php");
    
             
       $heading = 'Admission Form';
       $activepage = '';
       include("header.php");

       

$db = "synergy";
$server = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($server,$user,$password,$db);
?>
<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded">
            <div class="row g-0">
                <div class="col-lg-12 wow fadeIn mx-auto data-wow-delay=0.1s">
                    <div class="h-100 d-flex flex-column justify-content-center p-5">
                        <h1 class="mb-4">Admission Form</h1>
                        
                        <form action="connect.php" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-sm-12 text-center text"><h2>Student's details</h2></div>
                                 <div class="col-sm-8 ">
                            
                                        <label for="std_img">Child Image:</label>
                                        <input type="file"  class="form-control" name="std_img" id="stdimg" required>
                                        <p>less then 5 Mb</p>
                                    
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0"  name="cname" placeholder="Child Name" required>
                                        <label for="cname">Child Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control border-0"  name="cage" placeholder="Child Age" required>
                                        <label for="cage">Date of birth</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0"  name="religion" placeholder="Religion" required>
                                        <label for="religion">Religion</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0"  name="nationality" placeholder="Nationality" required>
                                        <label for="nationality">Nationality</label>
                                    </div>
                                </div>

                                

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" name="gender" placeholder="Gender" required>
                                        <label for="gender">Gender</label>
                                    </div>
                                </div>

                               

                                <div class="col-sm-12 text-center text"><h2>Academic details</h2></div>

                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" name="lschool" placeholder="Last School" required>
                                        <label>Last school attended</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" name="clpassed"  placeholder="Class passed" required>
                                        <label>Class passed</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control border-0" name="predate"  placeholder="Date of class passed" required>
                                        <label>Date of class passed</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" name="clsought" placeholder="Class sought" required>
                                        <label>Class sought</label>
                                    </div>
                                </div>

                               <div class="col-sm-12 text-center text"><h2>Parent's details</h2></div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                   <input type="text" class="form-control border-0" name="fname" placeholder="Father Name" required>
                                   <label for="fname">Father Name</label>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="form-floating">
                                   <input type="text" class="form-control border-0" name="mname" placeholder="Mother Name" required>
                                   <label for="mname">Mother Name</label>
                                </div>
                           </div>
                           <div class="col-sm-6">
                                <div class="form-floating">
                                   <input type="text" class="form-control border-0" name="fQ" placeholder="Father's Qualification" required>
                                   <label for="fQ">Father's Qualification</label>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="form-floating">
                                   <input type="text" class="form-control border-0" name="mQ" placeholder="Mother's Qualification" required>
                                   <label for="mQ">Mother's Qualification</label>
                                </div>
                           </div>  
                            
                               <div class="col-sm-6">
                                   <div class="form-floating">
                                       <input type="text" class="form-control border-0" name="address" placeholder="Address" required>
                                       <label for="address">Address</label>
                                   </div>
                               </div>
       
                               <div class="col-sm-6">
                                   <div class="form-floating">
                                       <input type="phone" class="form-control border-0" name="phone" placeholder="Phone Number" required>
                                       <label for="phone">Phone Number</label>
                                   </div>
                               </div>
                                              
                               
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="Submit">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

<!-- Appointment End -->

<?php
include("footer.php");
?>
      

	
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
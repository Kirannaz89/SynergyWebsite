<?php 
session_start();

$db = "synergy";
$server = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($server,$user,$password,$db);

$cname=$_POST['cname'];
$cage=$_POST['cage'];
$religion=$_POST['religion'];
$nationality=$_POST['nationality'];
$gender=$_POST['gender'];
$lschool=$_POST['lschool'];
$clpassed=$_POST['clpassed'];
$predate=$_POST['predate'];
$clsought=$_POST['clsought'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$fQ=$_POST['fQ'];
$mQ=$_POST['mQ'];
$address=$_POST['address'];
$phone=$_POST['phone'];
//  $stdImage = $_POST['std_img'];

$stdImage = $_FILES['std_img']['name'];
$stdImageTmp = $_FILES['std_img']['tmp_name'];

 if((isset($_SESSION["loggedin"]))){
				

     if ((($_FILES["std_img"]["type"] == "image/gif") || ($_FILES["std_img"]["type"] == "image/jpeg") || ($_FILES["std_img"]["type"] == "image/png") || ($_FILES["std_img"]["type"] == "image/jpg") || ($_FILES["std_img"]["type"] == "image/webp")) && ($_FILES["std_img"]["size"] < 1000000)) 
     	{           
                    
     				$uniquesavename=time().uniqid(rand());
     				$stdImage=$uniquesavename.$stdImage;
    
    
     			 move_uploaded_file($_FILES["std_img"]["tmp_name"],"std-image/" . $uniquesavename . $_FILES["std_img"]["name"]);
                
        
                
    
        }
    
       else {
      $_SESSION["wrong_format"]= 'W';
      header("location: admission-form.php");
    exit();
     }
    
 }




  
    if($conn){
    
        
        
    
        // $sqql="INSERT INTO form ('c_name','c_age','religion','nationality','gender','l_school','cl_passed','pre_date','cl_sought','f_name','m_name','std_address','phone','std_img')
        //   VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $sqql = "INSERT INTO `form`(c_name, c_age, religion, nationality, gender, l_school, cl_passed, pre_date, cl_sought, f_name, m_name, f_Q, m_Q, std_address, phone, std_img)
        VALUES ('$cname','$cage','$religion','$nationality','$gender','$lschool','$clpassed','$predate','$clsought','$fname','$mname','$fQ','$mQ','$address','$phone','$stdImage')"; 
        

//   $sqql="INSERT INTO adm-form (c_name,c_age,religion,nationality,gender,l_school,cl_passed,pre_date,cl_sought,f_name,m_name,std_address,phone,std_img)
//   SELECT * FROM (SELECT '$cname' as uskaname,'$cage' as uskiage,  '$religion' as uskareligion, '$nationality' as uskinationality, '$gender' as uskagender, '$lschool' as uskaschool, '$clpassed' as uskiclasspassed, '$predate' as uskipredate, '$clsought' as uskiclasssought, '$fname' as uska fname, '$mname' as uskamname, '$address' as uskaaddress, '$phone' as uskaphone, '$stdImage' as uskiimage) AS tmp
//   WHERE NOT EXISTS (
//   SELECT  c_name,c_age,religion,nationality,gender,l_school,cl_passed,pre_date,cl_sought,f_name,m_name,std_address,phone,std_img from form where (c_name='$cname' AND c_age='$cage' AND religion='$religion' AND nationality='$nationality' AND gender='$gender' AND l_school='$lschool' AND cl_passed='$clpassed' AND pre_date='$predate' AND cl_sought='$clsought' AND f_name='$fname' AND m_name='$mname' AND std_address='$address' AND phone='$phone' AND std_img='$stdImage')
// ) LIMIT 1";

        $stmt = $conn->prepare($sqql);
    
        if($stmt==false){
            echo"error in stmt";
        }
   
        // $stmt->bind_param('ssssssssssssss',$cname,$cage,$religion,$nationality,$gender,$lschool,$clpassed,$predate,$clsought,$fname,$mname,$address,$phone,$stdImage);
        
        $stmt->execute();
        $stmt->store_result();

        // echo "data recieved successfully";
         $affected = $stmt-> affected_rows;
            
         if($affected == 1){
            //echo 'Inserted';
 
         $_SESSION["status_updated"]='SU';
         header("location: index.php");
         exit();
     }
     else{
         
         $_SESSION["failed_status"]='IF';
         header("location: index.php");
         exit();
     }
       
        
        
            $stmt->free_result();
            $stmt->close();
 
    
    }else{
        $_SESSION["status"]='F';
        header("Location: index.php");
    }
        
             
        
        
    $conn->close();


?>
<?php 
session_start();

$db = "synergy";
$server = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($server,$user,$password,$db);
   
$name=$_POST['tname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
// $cvFile = $_POST['cv_files'];

$cvFile = $_FILES['cv_files']['name'];
$cvFileTmp = $_FILES['cv_files']['tmp_name'];
          
                        
                         $uniquesavename=time().uniqid(rand());
                         $cvFile=$uniquesavename.$cvFile;
        
        
                      move_uploaded_file($_FILES["cv_files"]["tmp_name"],"cv-file/" . $uniquesavename . $_FILES["cv_files"]["name"]);
                    
            
                    
    if($conn){
    
        $sqql = "INSERT INTO `become_a_teacher`(tname,email,phone,cv_files)
        VALUES ('$name','$email','$phone','$cvFile')"; 
        ;

        $stmt = $conn->prepare($sqql);
    
        if($stmt==false){
            echo"error in stmt";
        }
   
    
        
        $stmt->execute();
        $stmt->store_result();

        echo "your request has been recieved.
        School Management will followup soon";
        $affected = $stmt-> affected_rows;
            
        if($affected == 1){
            //echo 'Inserted';
 
         $_SESSION["status_updated"]='SU';
         header("location: call-to-action.php");
         exit();
     }
     else{
         
         $_SESSION["failed_status"]='IF';
         header("location: call-to-action.php");
         exit();
     }
       
        
        
            $stmt->free_result();
            $stmt->close();
 
    
    }else{
        $_SESSION["status"]='F';
        header("Location: teacher.php");
    }
        
       
        
        
    $conn->close();
    

    


?>
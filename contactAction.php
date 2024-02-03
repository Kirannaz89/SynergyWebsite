<?php 
session_start();

$db = "synergy";
$server = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($server,$user,$password,$db);

$name=$_POST['pname'];
$email=$_POST['email'];
$subject=$_POST['subj'];
$message = $_POST['msg'];

if($conn){
    
        $sqql = "INSERT INTO `contact`(pname,email,subj,msg)
        VALUES ('$name','$email','$subject','$message')"; 
        ;

        $stmt = $conn->prepare($sqql);
    
        if($stmt==false){
            echo"error in stmt";
        }
   
       
        
        $stmt->execute();
        $stmt->store_result();

        // echo "your request has been recieved.
        // School Management will followup soon";
        $affected = $stmt-> affected_rows;
            
        if($affected == 1){
            //echo 'Inserted';
 
         $_SESSION["status_updated"]='SU';
         header("location: contact.php");
         exit();
     }
     else{
         
         $_SESSION["failed_status"]='IF';
         header("location: contact.php");
         exit();
     }
       
        
        
            $stmt->free_result();
            $stmt->close();
    
    
    }else{
        $_SESSION["status"]='F';
        header("Location: contact.php");
    }
        
             
        
        
    $conn->close();
    

    


?>
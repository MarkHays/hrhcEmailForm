<?php
include "autoload.php";
error_reporting (E_ALL ^ E_NOTICE);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

if (!empty($firstName) || !empty($lastName) || !empty($email)) {
 $host = env('DB_HOST');
    $dbUsername = env('DB_USERNAME');
    $dbPassword = env('DB_PASSWORD');
    $dbname = env('DB_NAME');
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From user Where email = ? Limit 1";
     $INSERT = "INSERT Into user (firstName, email, lastName ) values(?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $firstName, $lastName, $email );
      $stmt->execute();
      echo "New record inserted sucessfully";
     } 
     if(isset($_POST['submit'])){
         
    // Fetching variables of the form which travels in URL
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $lastName = $_POST['lastName'];
    if($firstName !=''&& $email !=''&& $lastName !='')
    {
        
    //  To redirect form on a particular page
    header("Location:http://login.nomadix.com:1111/usg/process?username=freeuser&password=freeme&OS=http://hardrockcasinolaketahoe.com");
    }
    else{
    ?><span><?php echo "Please Go Back and Fill All Fields Continue!";?></span> <?php
    }
    }
     
     else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
}

else {
 echo "All field are required";
 die();
}

?>
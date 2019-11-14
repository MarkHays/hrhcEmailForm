<?php
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
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>

<?php

$con=mysqli_connect("localhost","root","","sud_portfolio") or die(mysqli_error($con));

$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$subject=$_POST["subject"];
$message=$_POST["message"];

// echo "insert into students_data(`Name`,`Father_name`,`Mother_name`,`Birthday`,`Gender`,`Email`,`Contact`,`Stream`,`Semester`,`Address`) values('".$name."','".$father."','".$mother."','".$birthday."','".$gender."','".$email."','".$contact."','".$stream."','".$semester."')";die;

$query="insert into details(`name`,`email`,`mobile`,`subject`,`message`) values('".$name."','".$email."','".$mobile."','".$subject."','".$message."')";

$rst=mysqli_query($con,$query);
if($rst){

  echo "Your message has been sent Successfully. Thank you! !";
}
else{

  echo "Error".mysqli_error($con);
}

?>
<?php
include 'connect.php';

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$btnum=$_POST['btnum'];
$email=$_POST['bemail'];
$dati=$_POST['dati'];
$tnum=$_POST['tnum'];
$usersed=$_POST['user_type'];

$checkEmail="SELECT * From customer ";
$result=$conn->query($checkEmail);
if($result->num_rows>0){
   $insertQuery="INSERT INTO customer(name,btnum,bemail,dati,tnum,user_type)
   VALUES ('$name','$btnum','$bemail','$dati','$tnum','$usersed')";
if($conn->query($insertQuery)==TRUE){
    header("location: park.php");

}
else{
echo "Error:".$conn->error;
}
}
else{
   $insertQuery="INSERT INTO customer(name,btnum,bemail,dati,tnum,user_type)
                  VALUES ('$name','$btnum','$bemail','$dati','$tnum','$usersed')";
                  header("location: park.php");
      
}
}

?>
<?php
include 'connect.php';
if(isset($_POST['sub']))
{
    $chec=$_POST['im'];
    $res=mysqli_query($conn,"SELECT * FROM sap");
    if(mysqli_num_rows($res))
    {
        $insertQuery="INSERT INTO sap(im)
        VALUES ('$chec')";
      if($conn->query($insertQuery)==TRUE){
     header("location: park.php");
     }
      else{
     echo "Error:".$conn->error;
     }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="file" name="im" required>
        <input type="submit" name="sub">

    </form>
</body>
</html>
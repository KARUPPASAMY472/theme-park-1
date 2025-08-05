<?php
include 'connect.php';


if(isset($_POST['submi']))
{
    $name=$_POST['names'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $phn=$_POST['phn'];
    $scode=$_POST['scode'];

    $secl=mysqli_query($conn,"SELECT * FROM adreg WHERE scode='0502'");
    if(mysqli_num_rows($secl)>0)
    {
        $insr=mysqli_query($conn,"INSERT INTO adreg(names,email,pass,phn,scode) VALUES('$name','$email','$pass','$phn','$scode')");
        header('location:admlog.php');
    }
    else
    {
        echo "<script> alert 'WRONG  PASSWORD ' </script>";
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

    <style>
        .adm
        {
            width: 500px;
            height: fit-content;
            padding: 15px;

        }
        .adm input{
            padding: 10px;
            width: 100%;
            margin: 15px 10px;
        }
        .bt
        {
            background-color: beige;
            color: black;
            cursor: pointer;
        }
    </style>
<div class="adm">
    ADMIN REGISTER

<form action="" method="post">
    <input type="text" name="names" placeholder="Enter Your Name" required>
    <input type="email" name="email" placeholder="Enter Email" required>
    <input type="password" name="pass" placeholder="Enter password" required>
    <input type="text" name="phn" placeholder="Enter Your Phone Number" required>
    <input type="text" name="scode" placeholder="Enter Your Secret Code" required>
    <input type="submit" name="submi" value="Register" class="bt">
    
    
</form>
</div>
</body>
</html>
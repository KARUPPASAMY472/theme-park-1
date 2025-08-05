<?php
include 'connect.php';
session_start();

if(isset($_POST['subm']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $scode=$_POST['scode'];

    $secl=mysqli_query($conn,"SELECT * FROM adreg WHERE email='$email' AND pass='$pass' AND scode='0502'");
    if(mysqli_num_rows($secl)>0)
    {
        $row=mysqli_fetch_assoc($secl);
        if($row['email']='email')
        {
        $_SESSION['ademail']=$row['email'];
        header('location:admin.php');
        }
        
    }
    else
    {
        echo "wrong pass";
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
    <input type="email" name="email" placeholder="Enter Email" required>
    <input type="password" name="pass" placeholder="Enter password" required>
    <input type="text" name="scode" placeholder="Enter Your Secret Code" required>
    <input type="submit" name="subm" value="Login" class="bt">
    
    
</form>
</div>
</body>
</html>
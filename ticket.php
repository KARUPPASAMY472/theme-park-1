<?php
include "connect.php";
session_start();
if(!isset($_SESSION['b_name'])){
    header('location:tkp.php');
    if(!isset($_SESSION['b_num'])){
        header('location:tkp.php');


    }
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styl.css">
</head>
<body>
    <div class="tk">
        <div class="tk-book">
            <div class="he">
            <h1>WELCOME BLACKTHUNTER PARK</h1>
            </div>
            <form action="" style="padding: 10px 10px 10px 30px;">
                <div>
                <label for=""class="lb"><h2>Name:</h2></label><br>
                <h3 class="h-bar"><span><?php echo $_SESSION['b_name'] ?></span></h3>
            </div>
            <div>
                <label for=""class="lb"><h2>PNUM:</h2></label><br>
                <h3 class="h-ba">+91<span><?php echo $_SESSION['b_num'] ?></span></h3>
            </div>
            <div>
                <label for=""class="lb"><h2>Email:</h2></label><br>
                <h3 class="h-b"><?php echo $_SESSION['b_mail'] ?></h3>
            </div>

            </form>
        </div>
    </div>
    
</body>
</html>
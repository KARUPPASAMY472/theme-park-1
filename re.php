<?php 

include 'connect.php';


if(isset($_POST['bsubmit'])){
    $bname=$_POST['name'];
    $pnum=$_POST['pnum'];
    $email=$_POST['email'];
    
    

     $checkEmail="SELECT * From buser WHERE name='$bname' &&  email = '$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
      $msg[]='sorry already registerd.pls change email or name';
     }
    
else{
 
 $insertQuery="INSERT INTO buser(name,pnum,email)
 VALUES ('$bname','$pnum','$email')";
if($conn->query($insertQuery)==TRUE){
header("location: cash.php");
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
   
   <link rel="stylesheet" href="style/styl.css">
</head>
<body>
   
<div class="boo-k" id="bo-ok-a" >
        <div><h1 style="padding: 10px; color: orangered; text-align: center; display: inline-block;">Booking</h1></div>
        <?php
            if(isset($msg))
            {
                foreach ($msg as $msg)
                {
                    echo '<span class="error-msg">'.$msg.'</span>';
                }
            }
            ?>
        <div class="fm" >
           
            
        <form action="" method="post">
            
            <div>
            <input type="text" placeholder="Enter Your Name" name="name" required>
            <label for="name">NAME</label>
        </div>
        <div>
            <input type="number" placeholder="Enter Your Phone Number" name="pnum" required>
            <label for="pnum">PNUM</label>
        </div>
        <div>
            <input type="email" placeholder="Enter Your Email" name="email" required>
            <label for="email"> EMAIL</label>
        </div>
            <button type="submit" id="b-10" name="bsubmit">Entry</button>
        </form>
    </div>
    </div>
</body>
</html>
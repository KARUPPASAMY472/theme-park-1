<?php
 @include('connect.php');
 session_start();

 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $name=($name);
    $btnum=$_POST['btnum'];
    $email=$_POST['bemail'];
    


 $select = " SELECT * FROM customer WHERE name='$name' &&  bemail = '$email' ";

   $result = mysqli_query($conn,$select);

   if(mysqli_num_rows($result) > 0)
   {

      $row = mysqli_fetch_array($result);

      if($row['bemail'] == $email){

         $_SESSION['t_name'] = $row['name'];
         $_SESSION['t_num'] = $row['btnum'];
         $_SESSION['t_mail'] = $row['bemail'];
         $_SESSION['t_dati'] = $row['dati'];
         $_SESSION['t_tnum'] = $row['tnum'];
         $_SESSION['t_user'] = $row['user_type'];
         $_SESSION['t_logi'] = $row['logi'];
         header('location:special.php');
         };
     
   }
   else{
      echo 'incorrect email or password!';
   }

  

 };

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
<div class="fm">

<form action="" method="post">
            
            <div>
            <input type="text" placeholder="Enter Your Name" name="name" required>
            <label for="name">NAME</label>
        </div>
        <div>
            <input type="number" placeholder="Enter Your Phone Number" name="btnum" required>
            <label for="btnum">PNUM</label>
        </div>
        <div>
            <input type="email" placeholder="Enter Your Email" name="bemail" required>
            <label for="bemail"> EMAIL</label>
        </div>
            <button type="submit" id="b-10" name="submit" >Entry</button>
        </form>
       
</div>
</body>
</html>
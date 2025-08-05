<?php
 @include('connect.php');
 session_start();

 if(isset($_POST['bsubmit']))
 {
    $bname=$_POST['name'];
    $pnum=$_POST['pnum'];
    $email=$_POST['email'];
    
 $select = " SELECT * FROM buser WHERE name='$bname' && email = '$email'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['email'] == $email){

         $_SESSION['b_name'] = $row['name'];
         $_SESSION['b_num'] = $row['pnum'];
         $_SESSION['b_mail'] = $row['email'];
         header('location:ticket.php');
         }
     
   }else{
      $error[] = 'Not Matching Enter correct name eemail!';
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
    <link rel="stylesheet" href="style/park.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>
<body>
<section>
    <div style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 15px;color: black;">
        <a href="admin.php" style="color:black;text-decoration:none;"><i class="fa-solid fa-hands-praying"></i></a> THEME PARK
    </div>
    <div>
            <h3>OPENING TIME 9:30AM TO 5:30PM</h3>
    </div>
    <div class="brand-1">
        
      <a href="https://www.instagram.com/accounts/login/?hl=en"> <i class="fa-brands fa-instagram" id="i-1"></a></i>
        <i class="fa-brands fa-facebook" id="i-1"></i>
        <i class="fa-brands fa-google" id="i-1"></i>
      <a href=park.php>  <i class="b-t-t"><button>HOME</button></a></i>
    </div>
</section>
    <style>
        .err
        {
            padding:10px;
            color:green;
        }
    </style>
<div class="fm">
<?php
if(isset($error))
{
    foreach ($error as $error)
    {
        echo '<div class="err">'.$error.'</div>';
    }
};
?>
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
            <button type="submit" id="b-10" name="bsubmit" >Entry</button>
        </form>

</div>
</body>
</html>
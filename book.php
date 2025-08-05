<?php
@include('connect.php');
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
    <div class="rgi">
        <img src="img/img-1.jpeg" alt="" class="b-g">
        <div class="b-ox">
            <div>

            <a href="#" onclick="tclick(event)"><h3 class="b-t">BOOK TICKET</h3></a>
            <div class="t-book" style="display: none;" >
                <a href="re.php" class="a1"><h3>NORMAL TICKET</h3></a>
               <a href="booking.php" class="a2"> <h3>OFFER TICKET</h3></a><br>
               <i class="m"><button class="cl-ose" onclick="csk()">></button></i>
            </div>

            <a href="#" onclick="pclick(event)"><h3 class="p-t">PRINT TICKET</h3></a>
            <div class="p-book" style="display: none;" >
                <a href="tkp.php" class="b1"><h3>NORMAL TICKET</h3></a>
               <a href="spec.php" class="b2"> <h3>OFFER TICKET</h3></a><br>
               <i class="m"><button class="cl-ose" onclick="mi(event)">></button></i>
            </div>

            <a href=""><h3 class="c-t">CANCEL TICKET</h3> </a>
            
        </div>

        
    </div>
    </div>
    <br>







    <script src="park.js">

    </script>
   
</body>
</html>
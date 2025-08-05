<?php
session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THEME PARK</title>
    <link rel="stylesheet" href="style/park.css">
    <link rel="stylesheet" href="ride.css">
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
    <div class="main-1">
        <div style="display:inline-block;"><img src="img/img-1.jpeg" alt=""class="im-g1">
            <div class="nav-1">
                <p><i class="fa-solid fa-list"></i><a href="book.html" class="me-nu">MENU</a></p>
                <p><i class="fa-solid fa-location-dot"></i><a href="https://www.google.com/search?gs_ssp=eJzj4tLP1TcwLa5KNyo0YLRSNagwTkq0SE1KS0pLTrK0NLcwtAIKmRimWKSZJpklJxlZGJonefEm5SQmZyuUZJTmpaQWAQCHUxQe&q=black+thunder&rlz=1C1ONGR_enIN1093IN1113&oq=black&gs_lcrp=EgZjaHJvbWUqEwgFEC4YrwEYxwEYsQMYgAQYjgUyDAgAEEUYORixAxiABDIKCAEQABixAxiABDIKCAIQABixAxiABDIKCAMQABixAxiABDIKCAQQABixAxiABDITCAUQLhivARjHARixAxiABBiOBTIKCAYQLhixAxiABDINCAcQLhjUAhixAxiABDINCAgQLhjUAhixAxiABDIHCAkQLhiABNIBCTY3NjRqMGoxNagCCLACAfEFMh0muGyikTw&sourceid=chrome&ie=UTF-8#eim=CAEQEBoSMTEuMzI2ODQyMzkxNjQ0MjE4IhE3Ni45MTMwMDQzMDc0MDk2Ng" class="enter">LOCATION</a></p>
                <p><i class="fa-solid fa-calendar-days"></i><a href="book.php" class="book">BOOKING</a></p>
                <p><i class="fa-solid fa-phone"></i><a href="#" class="call">CALL</a></p>
            </div></div>
        
    </div>
<div class="ri-de" >
    <div class="dry" style="cursor: pointer;"><h4 style="cursor: pointer;" onclick="dride()">DRY RIDES</h4></div>
    <div class="water"><h4 onclick="wride()">WATER RIDES</h4></div>
</div>
<div class="hed">
    <div>
    <h2 style="text-align: center; margin: 15px 0px;">Funilicious Rides at Black Thunder Water Theme Park - An Amusement Park in</h2>
    <h2 style="text-align: center;">Coimbatore</h2>
</div>

<div class="co-01">
    <div class="co-02">
        <img src="ride1/1.jpeg" alt="">
        <h2>DRY RIDES</h2>
        <p>The most fun filled land rides to keep you thrilled with the Spirit of Adventure. Dry rides include exciting camel and horse riding experiences.</p>
        <button class="mor" onclick="dride()" style="cursor:pointer;">More Info</button>
    </div>
    <div class="co-02">
        <img src="ride2/010.jpeg" alt="">
        <h2>WATER RIDES</h2>
        <p>The best kind of fun happens when you are splashing around in a pool filled with crystalline water or riding the waves on water ride! Black Thunder Water Theme Park has some of the best water fun activities you can find in India.</p>
        <button class="mor" onclick="wride()" style="cursor:pointer;">More Info</button>
    </div>
</div>
</div>
<!--dry rides-->
<div class="drycol" style="display: none;">
    <h2>Dry Rides at Black Thunder Water Theme Park in Coimbatore</h2>
    <p>At Black Thunder, you can have unlimited fun, without having to worry about dressing for the occasion. The land rides take you on an adventurous,</p>
    <p>thrilling journey through the park!</p>
</div>

<div class="drycoll" style="display: none;">
   
    <div>
        <img src="ride1/1.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">Santa tain</h3>
    </div>
    <div>
        <img src="ride1/2.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">Caterpillar Ride</h3>
    </div>
    <div>
        <img src="ride1/3.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">Crazy cups</h3>
    </div>
    <div>
        <img src="ride1/4.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">Crazy Bus</h3>
    </div>
    <div>
        <img src="ride1/5.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">Thunder spin</h3>
    </div>
    <div>
        <img src="ride1/6.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">Slam Bob Ride</h3>
    </div>
    <div>
        <img src="ride1/7.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/8.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/9.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/10.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/11.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/12.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/13.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/14.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/15.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/16.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/17.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/18.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/19.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div><div>
        <img src="ride1/20.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride1/21.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride1/22.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride1/23.jpeg" alt="" class="dryimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
</div>
<!--water rides-->
<div class="watercoll" style="display: none;">
    <div>
        <img src="ride2/01.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">Aqua Spiral</h3>
    </div>
    <div>
        <img src="ride2/02.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">Wave Pool</h3>
    </div>
    <div>
        <img src="ride2/03.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">Wavy fall Slide</h3>
    </div>
    <div>
        <img src="ride2/04.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">Black Hole</h3>
    </div>
    <div>
        <img src="ride2/05.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">Free Fall Ride</h3>
    </div>
    <div>
        <img src="ride2/06.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">Twister Red & Blue</h3>
    </div>
    <div>
        <img src="ride2/07.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/08.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/09.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/010.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/011.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/012.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/013.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/014.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/015.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/016.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/017.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/018.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/019.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/020.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/021.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/022.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/023.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    <div>
        <img src="ride2/024.jpeg" alt="" class="waterimg">
        <h3 style="text-align: center;">spiter slide</h3>
    </div>
    
</div>

                                        <!--about-->
    <div class="about">
        <div class="b-about">
            <div>
                <h3 style="padding:10px 0px 0px 40px;">Black Thunder - Water Theme Park</h3>
                <h3>Virudhunagar,TAMIL NADU 641305,INDIA.</h3>

            </div>
            <div style="display: flex; padding: 20px;text-align: center;display: inline-block;">
                <i class="fa-sharp fa-regular fa-envelope"style="text-align: center;align-items: center;"></i>
                <h4 style="text-align: center;align-items: center;display: inline-block;">info@blackthenter.in</h4>
            </div>

            
            <div class="contact">
                
                <h4> <i class="fa-solid fa-phone" id="icon"></i> +91 9789187890 |Resvarations</h4><br>
                <h4> <i class="fa-solid fa-phone" id="icon"></i> +91 9789187890 |Resvarations</h4><br>
                <h4><i class="fa-solid fa-phone" id="icon"></i> +91 9789187890 |Resvarations</h4><br>
                
            </div>
            <hr>
            <br>
            <div class="brand-2">
            
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-google"></i>
            </div>
            
        </div>

    </div>
    
    <script src="raid.js"></script>
    
</body>
</html>
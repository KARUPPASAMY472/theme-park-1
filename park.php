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
          <a href=book.php>  <i class="b-t-t"><button>BOOK NOW</button></a></i>
        </div>
    </section>
    <div class="main-1">
        <div style="display:inline-block;"><img src="img/img-1.jpeg" alt=""class="im-g1">
            <div class="nav-1" style="">
                <p><i class="fa-solid fa-location-dot"></i><a href="https://www.google.com/search?q=black+thunder&oq=black+t&gs_lcrp=EgZjaHJvbWUqCggBEAAYsQMYgAQyBggAEEUYOTIKCAEQABixAxiABDIKCAIQABixAxiABDIHCAMQABiABDIKCAQQLhixAxiABDINCAUQABixAxiABBiKBTIKCAYQABixAxiABDIHCAcQABiABDIKCAgQLhixAxiABDIKCAkQLhixAxiABNIBCTIzNTI3ajBqN6gCB7ACAfEF8UsmV0EfPaE&sourceid=chrome&ie=UTF-8#eim=CAE" class="enter">LOCATION</a></p>
                <p><i class="fa-solid fa-calendar-days"></i><a href="book.php" class="book">BOOKING</a></p>
                <p><i class="fa-solid fa-phone"></i><a href="contact.php" class="call">CALL</a></p>
            </div></div>
        
    </div>
    <div class="histry">
        <div>
            <h2 style="color: rgba(0, 0, 0, 0.623);">
                BLACK THUNDER-ASIA'S NO.1 WATER THEME PARK
            </h2>
            <h2 style="color: rgba(0, 0, 0, 0.623);">
            Fun, Thrill & Excitement for Everyone...GUARANTEED!
            </h2>
            <h3 class="read" onclick="ree()">Read More</h3>
            <h3 class="red" style="display: none;" onclick="rm()">Read More</h3>
        </div>
        <div class="readmore" style="display: none;">
            <p>
            out-of-this-world fun, excitement, adventure, and enchanting environment at Black Thunder, a theme park at Mettupalayam on the highway to Ooty. Nestled in the foothills of the scenic Nilgiri Hills, this ultimate holiday destination offers you a variety of fabulous water rides, mind-boggling dry rides, boating, a resort, and much more. This water theme park, in its entirety, stands by its byline “Great Place, Great Fun.” Black Thunder is not just another water theme park; it is the grandest, greatest of them all. With a backdrop of the Nilgiris, Black Thunder Water Theme Park in Coimbatore, Tamil Nadu, is a place of unlimited fun and adventure.

        </p>
        </div>
    </div>

    <div class="fr-m-1">
      <div class="col-2">
        <div>
            <h3>AVANA RESPORT</h3>
            <i >
                <h3 class="a" onclick="ev()" style="color:black;">></h3>
                <h3 class="b" onclick="av()" style="display: none;color:black;"><</h3>
            </i>
            
            
        </div>
        <div class="cre" style="display: none;height: fit-content;">
            <h3 style="height: fit-content;">Ever envisioned a retreat where every moment feels like a chapter from a storybook? At Avana Resort, your dream turns into reality. Located amidst the picturesque journey to Ooty, every corner beckons with tranquillity and charm. Whether you're waking up to the sight of lush hills from the balcony of your spacious room,  want to start your day with a morning walk in our expansive lawns, or indulge in moments adventure, this is where your ideal getaway unfolds.</h3>
        </div>
        <div>
            <h3>RIDES</h3>
            <i>
                <h3><a href="ride.php" class="ae"><i class="fa-solid fa-arrow-right" id="a"></i></a></h3>
            </i>
        </div>
        
        <div>
            <h3>ATTRACTIONS</h3>
            <i>
                <h3 ><a href="attraction.php"class="ae" ><i class="fa-solid fa-arrow-right" id="a"></i></a></h3>
            </i>
        </div>

        
        <div>
            <h3>REVIEW</h3>
            <i>
                <h3><a href="review.php"class="ae"><i class="fa-solid fa-arrow-right" id="a"></i></a></h3>
                
            </i>
        </div>
        <div>
            <h3>EXPERIANCE</h3>
            <i>
                <h3><a href="experience.html"class="ae"><i class="fa-solid fa-arrow-right" id="a"></i></a></h3>
                
            </i>
        </div>
        
        <div>
            <h3>FOOD</h3>
            <i>
                <h3><a href="food.html"class="ae"><i class="fa-solid fa-arrow-right" id="a"></i></a></h3>
                
            </i>
        </div>
      </div>
    </div>

    <!--hg-->
    <div class="collect" id="w">
        <div style="text-align: center;color: black;font-size: 23px;"><b>BLACK THUNDER</b></div>
       
        <div class="im">
            <img src="img/img-2.jpeg" alt="" style="align-items: center;">
            <h4>ENTERTAIMENTS</h4>
        </div>
        
        <div class="im">
            <img src="img/img-3.jpeg" alt="">
            <h4>HOTEL & RESTARUNT</h4>
        </div>
        
        <div class="im">
            <img src="img/img-4.jpeg" alt="">
            <h4>STAY HOME</h4>
        </div>
        
    </div>
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
    
    <script src="park.js"></script>
    
</body>
</html>
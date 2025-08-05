<?php
include 'connect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>FAMILY TICKET</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *
        {
            
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            text-decoration: none;

            
        }
        .nav1
        {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: rgba(84, 84, 253, 0.733);
            width: 100%;
            height: 80px;
        }
        .nav2
        {
            display: flex;
            gap: 30px;
        }
        .nav2 a
        {
            color: white;
            cursor: pointer;
        }
        .nav2 a:hover
        {
            color: black;
        }
        .nav3 {
            display: flex;
            gap:40px;

            
        }
        .nav i{
            background-color: rgb(230, 8, 82);
            border: 1px solid transparent;
            color: black;
            border-radius: 50px;
            padding: 10px;
            cursor: pointer;
        }
        .nav i:hover{
            background-color:white;
            color: black;
           
        }
    </style>
    <div class="nav">
        <nav class="nav1">
            <div>THEME PARK</div>
            <div class="nav2">
                <p><a href="park.php">HOME</a></p>
                <p><a href="book.php">BOOK</a></p>
                
            </div>
            <div class="nav3">
            <p><i class="fa-brands fa-instagram" id="i-1"></i></p>
           <p><i class="fa-brands fa-facebook" id="i-1"></i></p> 
           <p><i class="fa-brands fa-google" id="i-1"></i></p> 
            </div>
        </nav>
    </div>
    <style>
        .heading
        {
            text-align: center;
        }
        .heading1
        {
            padding: 50px 0px;
            text-align: center;
        }
        .backd
        {
            background-color: black;
            color: white;
            width: 100%;
            height: 600px;
            margin: 10px 0px;
            
        }
        .pay
        {
            justify-content: space-around;
            display: flex;
            align-items: center;
            color: black;
            
        }
        .pay1
        {
            border: 2px solid white;
            width: 400px;
            height: 500px;
            padding: 10px;
            border-radius: 5px;
            background-image: linear-gradient(to top, #37ecba 0%, #72afd3 100%);
        }
        .pris
        {
            padding: 45px 0px 10px 0px;
            border-bottom: 3px solid white;

            
        }
        .pris h4
        {
            gap: 30px;
            padding: 10px 0px;
        }
        .para
        {
            padding: 45px 0px 30px 0px;
            gap: 30px;
        }

        .para p{
            gap: 30px;
            padding: 20px 0px;
        }
    </style>

<div class="heading">
        <h1>WELCOME TO THEME PARK</h1>
    </div>
    <div class="heading1">
        <h3>THANKS FOR REGISTRATION THEME PARK</h3>
    </div>
    <div class="backd">
        <div style="text-align: center;padding: 15px 0px;">
            <h2> TICKET OFFERS</h2>
        </div>
        <div class="pay">
            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">STUDENT TICKET</h3>
                <div class="pris">
                <h4>40-50 Students Offer</h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
            </div>
            </div>

            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">STUDENT TICKET</h3>
            <div class="pris">
                <h4>50-100 Students Offer</h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
            </div>
            </div>


            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">STUDENT TICKET</h3>
                <div class="pris">
                <h4>100-150 Students Offer</h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
            </div>
            </div>
        </div>

        
    </div>



    <div class="heading">
        <h1>WELCOME TO THEME PARK</h1>
    </div>
    <div class="heading1">
        <h3>THANKS FOR REGISTRATION THEME PARK</h3>
    </div>
    <div class="backd">
        <div style="text-align: center;padding: 15px 0px;">
            <h2> TICKET OFFERS</h2>
        </div>
        <div class="pay">
            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">STUDENT TICKET</h3>
                <div class="pris">
                <h4>40-50 Students Offer</h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
            </div>
            </div>



            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">STUDENT TICKET</h3>
            <div class="pris">
                <h4>50-100 Students Offer</h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
            </div>
            </div>


            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">STUDENT TICKET</h3>
                <div class="pris">
                <h4>100-150 Students Offer</h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
            </div>
            </div>

            
        </div>

        
    </div>



    <div class="heading">
        <h1>WELCOME TO THEME PARK</h1>
    </div>
    <div class="heading1">
        <h3>THANKS FOR REGISTRATION THEME PARK</h3>
    </div>
    <div class="backd">
        <div style="text-align: center;padding: 15px 0px;">
            <h2> TICKET OFFERS</h2>
        </div>
        <div class="pay">
            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">STUDENT TICKET</h3>
                <div class="pris">
                <h4>40-50 Students Offer</h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
            </div>
            </div>

            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">STUDENT TICKET</h3>
            <div class="pris">
                <h4>50-100 Students Offer</h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
            </div>
            </div>


            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">STUDENT TICKET</h3>
                <div class="pris">
                <h4>100-150 Students Offer</h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
                <p>* Only Ticket Rate (RS 850-/ - RS 200-/)  :RS 650-/</p>
            </div>
            </div>
        </div>

        
    </div>
</body>
</html>
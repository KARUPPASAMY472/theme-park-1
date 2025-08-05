<?php
include 'connect.php';
if(isset($_POST['five']))
{
    $name=$_POST['one'];
    $emil=$_POST['two'];
    $subj=$_POST['three'];
    $msgg=$_POST['four'];

    $sel=mysqli_query($conn,"SELECT * FROM fedb");
    if(mysqli_num_rows($sel)>0)
    {
        $inss=mysqli_query($conn,"INSERT INTO fedb(one,two,three,four) VALUES('$name','$emil','$subj','$msgg')");
       echo "<script>alert('feed back succssfully');</script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <style>
        body,html
        {
            height:100%
        }
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        .hro
{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("img/img-1.jpeg");
    
    width:100%;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.texti
{
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: white;
}
    </style>



    <div class="hro">
        <div class="texti">
            <h2 style="font-size: 59px;">CONTACT US</h2>
            <p style="font-size: 39px;color: black;">GET IN TUCH</p>
        </div>
    </div>

    <style>
        .blac
        {
            background-color: black;
            color: white;
            width: 100%;
            height: 300px;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: row;
            height: fit-content;
        }
        .blac div i,h1,.pa
        {
            padding: 20px 0px;
            
        }
        .pa p 
        {
            gap: 20px;
            padding: 10px 0px;
        }
    </style>
    <div class="blac">
        <div>
            <i class="fa-solid fa-phone" style="font-size: 28px;"></i>
            
            <h1 style="font-size: 25px;">PHONE</h1>
            <div class="pa" style="font-size: 20px;">
            <p style="color:green;">0452-2530070</p>
            <p style="color:green;">0452-2530973</p>
            <p style="color:green;">Fax 0452-2520711</p>
            </div>
        </div>

        <div>
            <i class="fa-regular fa-envelope" style="font-size: 28px;"></i>
            <h1 style="font-size: 25px;">EMAIL</h1>
            <div class="pa" style="font-size: 20px;">
            <p style="color:green;">office@themepark.park.in</p>
            <p>Website :<p style="color:green;"> www.themepark.park.in</p></p>
            
            </div>
        </div>

        <div>
            <i class="fa-solid fa-location-dot" style="font-size: 28px;"></i>
            <h1 style="font-size: 25px;">LOCATION</h1>
            <div class="pa" style="font-size: 20px;">
            <p>Theme Park, Kariyapatti,</p>
            <p>Madurai – 625002,</p>
            <p>Tamilnadu India.</p>
            </div>
        </div>
    
    </div>

    <style>
        .fed
        {
            width: 100%;
            height: 500px;
            background-color: rgb(247, 160, 225);
            padding: 20px 0px;
            margin-top: 0px;
            
        }
        .fedfom
        {
            width: 700px;
            height: fit-content;
            padding: 30px;
            position: relative;
            left: 27%;

        }
        .fedfom input,textarea
        {
            width: 100%;
            padding: 12px 0px;
            border: 2px solid rgba(0, 0, 0, 0.473);
            margin: 10px 0px;
            
            background-color:white;
        }
        .fedfom input::placeholder
        {
            padding: 10px;
        }
        
        .fedfom input:focus
        {
            outline: none;
            padding: 10px;
        }
        textarea:focus
        {
            outline: none;
        }
        .be
        {
            border: none;cursor: pointer;
            background-color: rgba(146, 238, 146, 0.473);
        }
        .be:hover
        {
            background-color: rgb(245, 248, 245);
            
            
        }
    </style>

    <div class="fed">
        <div >
            <h2 style="margin-left:40%;margin-top: 20px;font-size: 43px;">Leave us your info</h2>
            <p style="margin-left:43%;margin-top: 20px;font-size: 19px;">and we will get back to you.</p>
        </div>


        
        <div class="fedfom">
            <form action="" method="post">
                <input type="text" name="one" placeholder="Enter Your Name" required>
                <input type="email" name="two" placeholder="Enter Your Email" required>
                <input type="text" name="three" placeholder="Subject" required>               
                <textarea name="four" id="" placeholder="Message"></textarea>
                <input type="submit" name="five" value="Send Message" class="be" style="color: black;border: none;">
                
                
            </form>
        </div>
        

    </div>
    <style>
        .whi
        {
            background-color: white;
            width: 100%;
            height: 200px;
            text-align: center;
            margin: 0px 0px 10px 0px;
            display: flex;
            justify-content: center;
            text-align: center;
            

        }
        .whi div
        {
            padding: 100px 0px;
            margin: 0px 20px;
        } 

    </style>





    <style>
        .last{
            border-top: 2px solid white;
            text-align: center;
            background-color: black;
            color:white
        }
        .lastcon
        {
            display: flex;   
            color: bisque;
            justify-content: space-around;
            padding: 15px;
        }
        .lastcon h3{
            border-bottom: 2px solid green ;
            color: white;
            font-size: 19px;
            
        }
        .lastcon p{
            
            color: rgba(253, 250, 250, 0.514);
        }
        .addrs
        {
            padding: 10px;
            border-right: 2px solid green;
        }
        .college
        {
            padding: 16px 5px;
        }
        .college p
        {
            padding: 10px 5px;
        }
        .depart
        {
            padding: 16px 5px;
        }
        .depart p
        {
            padding: 10px 5px;
        }
        .playgr
        {
            padding: 16px 5px;
        }
        .playgr p
        {
            padding: 10px 5px;
        }
        .dept
        {
            padding: 16px 5px;
        }
        .dept p
        {
            padding: 10px 5px;
        }
        .about
{
    background-color: #f52549;
    color: white;
    width: 100%;
    
    padding: 10px;
    margin: 10px 0px 10px 0px;
    

}
.b-about
{
    text-align: center;
    align-items: center;
}
.b
{
    background-color: white;
    color: black;
    border-radius: 50%;
}
.condent h4{
    text-align: center;
    align-items: center;
    display: inline-block;
}
#icon
{
    color: black;
    background-color: white;
    border: 1px solid white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    padding: 5px;
}
    </style>
            
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
    
        
    
    
    
</body>
</html>
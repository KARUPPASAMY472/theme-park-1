<?php

include 'connect.php';


if(isset($_POST['submit']))
{
$name=$_POST['name'];
$btnum=$_POST['btnum'];
$email=$_POST['bemail'];
$dati=$_POST['dati'];
$tnum=$_POST['tnum'];
$usersed=$_POST['user_type'];
$fam=$_POST['fam'];
$cou=$_POST['cou'];
$stu=$_POST['stu'];

$checkEmail="SELECT * From customer WHERE name='$name' &&  bemail = '$email'";
$result=$conn->query($checkEmail);


if($result->num_rows>0){
    $msg[]= 'sorry already registerd.pls change email or name';
   
}
 
else
{
    
    $insertQuery=mysqli_query($conn,"INSERT INTO customer(name,btnum,bemail,dati,tnum,user_type,fam,cou,stu)
        VALUES ('$name','$btnum','$email','$dati','$tnum','$usersed','$fam','$cou','$stu')");
        header('location:cash.php');



}

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styls.css">
    <link rel="stylesheet" href="style/park.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
</head>
<body>

    <style>
        body
        {
            background-color: white;
        }
        .msg{
            padding: 5px 0px;
            color:green;
            font-size:18px;
            cursor: pointer;
        }
    </style>
      
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


    <div class="he">
    <h1>WELCOME TO BLACKTHUNTE</h1>
</div>
    <div class="form-fill">
        <div class="form-01">
        <?php
                if(isset($msg))
                {
                    foreach($msg as $msg)
                    {
                        echo '<div class="msg"  onclick="this.remove()">'.$msg.'</div>';
                    }
                }
                ?>
                
                
                
            <form action="" method="post">
                <h2>BOOKING THEME PARK</h2>
                
                <div>
                    <label for="name">NAME</label>
                    <input type="text" class="in" placeholder="Enter Your Name" name="name" required>
                </div>
                <div>
                    <label for="btnum">PNUM</label>
                    <input type="number" class="in"  placeholder="Enter Your Phone Number" name="btnum" required>                   
                </div>
                <div>
                    <label for="bemail"> EMAIL</label>
                    <input type="email" class="in"  placeholder="Enter Your Email" name="bemail" required>                  
                </div>
                <div>
                    <label for="dati"> BOKKING DATE</label>
                    <input type="date" class="in"  placeholder="Enter Your distric & state" name="dati" required>                    
                </div>
                <div>
                    <label for="count">Ticket Count</label>
                    <input type="number" class="in"  placeholder="Enter Count Of Num" name="tnum" required>                    
                </div>
                <div>
                    <label for="user_type">TYPE</label>
                    <select name="user_type" class="in" >
                        
                        <option value="FAMILY"  class="family">FAMILY</option>
                        <option value="COUPLES" class="cuples">COUPLES</option>
                        <option value="STUDENT" class="student">STUDENT</option>
                        
                     </select>
                </div>
                <div>
                    <input type="hidden" class="in"  placeholder="Enter Count Of Num" name="fam" value="<?php echo $fam  ?>" required>                    
                </div>
                <div>
                    <input type="hidden" class="in"  placeholder="Enter Count Of Num" name="cou" value="<?php echo $cou  ?>" required>                    
                </div>
                <div>
                    <input type="hidden" class="in"  placeholder="Enter Count Of Num" name="stu" value="<?php echo $stu  ?>" required>                    
                </div>
                
                    <button type="submit" id="bu-t" name="submit">Entry</button>
            </form>
        
        </div>
       
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
            height: 800px;
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
            height: 550px;
            padding: 10px;
            border-radius: 5px;
            background-image: linear-gradient(to top,rgb(239, 243, 242) 0%,rgb(248, 250, 252) 100%);
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
    <div class="backd">
        <div style="text-align: center;padding: 15px 0px;">
            <h2> TICKET BOOKING </h2>
            <h2>Normal Ticket Rate :Rs 950</h2>
            <h2>Child Ticket Free : age limit: 7years old</h2>
        </div>
        <div class="pay">
            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">COUPLES</h3>
                <div class="pris">
                <h4>Couples</h4>
                <h4>Rs 850-/</h4>
            </div>
            <div class="para">
                <h3>Rules</h3>
                <p>* lovers only</p>
                <p>* Only Ticket Rate (RS 950 - Rs 100)  :RS 850-/</p>
                <p>* special food free</p>
                
        
            </div>
            </div>

            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;"> STUDENT TICKET</h3>
            <div class="pris">
                <h4> Students </h4>
                <h4>Rs 650-/</h4>
            </div>
            <div class="para">
                <h3>Rules</h3>
                <p>* Compulsury 50-Students above</p>
                <p>* Only Ticket Rate (RS 950 - RS 300)  :RS 650-/</p>
                 <p>* ID card must</p>
                 <p>* special food free</p>
                 <p>* special entetiment free rideing</p>
            </div>
            </div>


            <div class="pay1">
                <h3 style="text-align: center;padding: 19px 0px;">FAMILY TICKET</h3>
                <div class="pris">
                <h4>Family </h4>
                <h4>Rs 750-/</h4>
            </div>
            <div class="para">
            <h3>Rules</h3>
                <p>* Only Ticket Rate (RS 950 - RS 200)  :RS 750-/</p>
                <p>* Four Members must</p>
                <p>* Special Food Free</p>
                <p>* 10 Members coming to Special offer lucky win game to win Smart Tv,Car</p>
            </div>
            </div>
        </div>

        
    </div>



    
</body>
</html>
<?php
@include 'connect.php';
session_start();
$mails=$_SESSION['t_mail'];
$namei=$_SESSION['t_name'];
if(!isset($mails) == !isset($namei))
{
    if(!isset($namei))
    {
    header('location:spec.php');
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/special.css">
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

    <div class="ticket-1" >
        <h1>WELCOME THEME PARK</h1><hr><br>
        
    
        <div class="ticket-2"style="background-color: rgb(255, 255, 254);">
           
            <form action="" style=" width: 100%;" >
                <h3>THEME PARK</h3>
                
                <div class="div-2"style="display: flex; width: 100%;">
            <div class="one">
                NAME    :
            </div>
                <div class="to"><h3 class="sp"><span><?php echo $_SESSION['t_name'] ?></span></h3></div>
                
            </div>
            <div class="div-2"style="display: flex; width: 100%;">
                <div class="one">
                    PHNO    :
                </div>
                    <div class="to"><h3 class="sp"><span><?php echo $_SESSION['t_num'] ?></span></h3></div>
                    
                </div>
                <div class="div-2"style="display: flex; width: 100%;">
                    <div class="one">
                        EMAIL  :
                    </div>
                        <div class="to"><h3 class="sp"><span><?php echo $_SESSION['t_mail'] ?></span></h3></div>
                        
                    </div>
                    <div class="div-2"style="display: flex; width: 100%;">
                        <div class="one">
                            DATE   :
                        </div>
                            <div class="to"><h3 class="sp"><span><?php echo $_SESSION['t_dati'] ?></span></h3></div>
                            
                        </div>
                        <div class="div-2"style="display: flex; width: 100%;">
                            <div class="one">
                                MEMBERS :
                            </div>
                                <div class="to"><h3 class="sp"><span><?php echo $_SESSION['t_tnum'] ?></span></h3></div>
                                
                            </div>
                            <div class="div-2"style="display: flex; width: 100%;">
                                <div class="one">
                                    TYPE  :
                                </div>
                                    <div class="to"><h3 class="sp"><span><?php echo $_SESSION['t_user'] ?></span></h3></div>
                                    
                                </div>
                                <div class="div-2"style="display: flex; width: 100%;">
                                
                                <div class="one">
                                    Time  :
                                </div>
                                    <div class="to"><h3 class="sp"><span><?php echo $_SESSION['t_logi'] ?></span></h3></div>
                                    
                                </div>  
                                </div>
                                
            
        </form>
           
        </div>
        <div class="im-g-1" style="top:250px;">
            
            <div class="m">
                <img src="tklogo1.png" alt="">
            </div>
            <img src="seel.jpg" alt=""style="width: 130px;border-radius:50%;position: absolute;bottom:-120px;left: 120px;">
            <div style="position: absolute;bottom: -90px;">
                <h2>Signature</h2>
                <h4>T.akash</h4>
            </div>
        </div>
        
    </div>

<div class="checki">

    
    <div class="fami">
                        <h1>OFFER TICKET FAMILY</h1>
                        
        <style>
            .checki,.fami,.coub,.stud
            {
                margin:20px 0px;
                padding: 20px;
            }
            table
            {
                border-collapse: collapse;
                border:1px solid black;
                width: 100%;
            }
            thead
            {
                background-color:green ;
            }
            tr,td{
                padding:8px;
            }
            tbody tr:nth-child(even)
            {
                background-color:pink ;
            }
        </style>

<table>
    <thead>
        <td>Name</td>
        <td>Mobile Number</td>
        <td>Email</td>
        <td>Amount</td>
        
    </thead>

    <tbody>
         <?php
         $sql=mysqli_query($conn,"SELECT * FROM customer WHERE user_type='FAMILY' AND bemail='$mails'");
         if(mysqli_num_rows($sql)>0)
         {
            while($row=mysqli_fetch_assoc($sql))
            {  
                                        
                $name=$row['name'];
                $btnum=$row['btnum'];
                $email=$row['bemail'];
                $tnum=$row['tnum'];
                $bill1=$row['fam'];
                
                              
         ?>
         <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $btnum ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $res=$bill1 * $tnum ?></td>

            
         </tr>


<?php }}; ?>
    </tbody>
</table>
</div>


<div class="coup">
                        <h1>OFFER TICKET COUPLES</h1>

<table>
    <thead>
        <td>Name</td>
        <td>Mobile Number</td>
        <td>Email</td>
        
        <td>Amount</td>
        
    </thead>

    <tbody>
         <?php
         $sql=mysqli_query($conn,"SELECT * FROM customer WHERE user_type='COUPLES' AND bemail='$mails'");
         if(mysqli_num_rows($sql)>0)
         {
            while($row=mysqli_fetch_assoc($sql))
            {  
                                        
                $name=$row['name'];
                $btnum=$row['btnum'];
                $email=$row['bemail'];
                $tnum=$row['tnum'];
                $bill2=$row['cou'];
                
                              
         ?>
         <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $btnum ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $res=$bill2 * $tnum ?></td>

            
         </tr>


<?php }}; ?>
    </tbody>
</table>
</div>


<div class="stud">
                        <h1>OFFER TICKET STUDENT</h1>

<table>
    <thead>
        <td>Name</td>
        <td>Mobile Number</td>
        <td>Email</td>
        <td>Amount</td>
        
    </thead>

    <tbody>
         <?php
         $sql=mysqli_query($conn,"SELECT * FROM customer WHERE user_type='STUDENT' AND bemail='$mails'");
         if(mysqli_num_rows($sql)>0)
         {
            while($row=mysqli_fetch_assoc($sql))
            {  
                                        
                $name=$row['name'];
                $btnum=$row['btnum'];
                $email=$row['bemail'];
                $tnum=$row['tnum'];    
                $bill3=$row['stu'];
                
                              
         ?>
         <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $btnum ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $res=$bill3 * $tnum ?></td>

            
         </tr>


<?php }}; ?>
    </tbody>
</table>

</div>
</div>
</body>
</html>
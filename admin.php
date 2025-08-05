<?php
include 'connect.php';
session_start();

if(!isset($_SESSION['ademail']))
{
    header('location:admlog.php');
};
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    table
    {
        width:100%;
        padding:10px;
        border:1px solid black;

    }
    table thead
    {
        background-color:red;
        color:white;
    }
</style>





    
   

    
    <div>
    <h1>NORMAL TICKET</h1>
        <table>
            <thead>
                <td>Name</td>
                <td>Mobile Number</td>
                <td>Email</td>
                
            </thead>

            <tbody>
                 <?php
                 $sql=mysqli_query($conn,"SELECT * FROM buser");
                 if(mysqli_num_rows($sql)>0)
                 {
                    while($row=mysqli_fetch_assoc($sql))
                    {  
                                                
                        $name=$row['name'];
                        $btnum=$row['pnum'];
                        $email=$row['email'];
                                      
                 ?>
                 <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $btnum ?></td>
                <td><?php echo $email ?></td>
                    
                 </tr>


<?php }}; ?>
            </tbody>
        </table>
    </div>


    <hr>



                    <!-- ticket -->


                    <div>
                        <h1>OFFER TICKET FAMILY</h1>

<table>
    <thead>
        <td>Name</td>
        <td>Mobile Number</td>
        <td>Email</td>
        <td>Date</td>
        <td>Ticket</td>
        <td>Type</td>
        <td>Register Date</td>
        <td>Amount</td>
        
    </thead>

    <tbody>
         <?php
         $sql=mysqli_query($conn,"SELECT * FROM customer WHERE user_type='FAMILY'");
         if(mysqli_num_rows($sql)>0)
         {
            while($row=mysqli_fetch_assoc($sql))
            {  
                                        
                $name=$row['name'];
                $btnum=$row['btnum'];
                $email=$row['bemail'];
                $dati=$row['dati'];
                $tnum=$row['tnum'];
                $usersed=$row['user_type'];
                $tnu=$row['logi'];
                $bill1=$row['fam'];
                $bill2=$row['cou'];
                $bill3=$row['stu'];
                
                              
         ?>
         <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $btnum ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $dati ?></td>
        <td><?php echo $tnum ?></td>
        <td><?php echo $usersed ?></td>
        <td><?php echo $tnu ?></td>
        <td><?php echo $res=$bill1 * $tnum ?></td>

            
         </tr>


<?php }}; ?>
    </tbody>
</table>
</div>



<div>
<h1>OFFER TICKET COUPLES</h1>
<table>
    <thead>
        <td>Name</td>
        <td>Mobile Number</td>
        <td>Email</td>
        <td>Date</td>
        <td>Ticket</td>
        <td>Type</td>
        <td>Register Date</td>
        <td>Amount</td>
        
    </thead>

    <tbody>
         <?php
         $sql=mysqli_query($conn,"SELECT * FROM customer WHERE user_type='COUPLES'");
         if(mysqli_num_rows($sql)>0)
         {
            while($row=mysqli_fetch_assoc($sql))
            {  
                                        
                $name=$row['name'];
                $btnum=$row['btnum'];
                $email=$row['bemail'];
                $dati=$row['dati'];
                $tnum=$row['tnum'];
                $usersed=$row['user_type'];
                $tnu=$row['logi'];
                $bill1=$row['fam'];
                $bill2=$row['cou'];
                $bill3=$row['stu'];
                
                              
         ?>
         <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $btnum ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $dati ?></td>
        <td><?php echo $tnum ?></td>
        <td><?php echo $usersed ?></td>
        <td><?php echo $tnu ?></td>
        <td><?php echo $res=$bill2 * $tnum ?></td>

            
         </tr>


<?php }}; ?>
    </tbody>
</table>
</div>




<div>
<h1>OFFER TICKET STUDENT</h1>
<table>
    <thead>
        <td>Name</td>
        <td>Mobile Number</td>
        <td>Email</td>
        <td>Date</td>
        <td>Ticket</td>
        <td>Type</td>
        <td>Register Date</td>
        <td>Amount</td>
        
    </thead>

    <tbody>
         <?php
         $sql=mysqli_query($conn,"SELECT * FROM customer WHERE user_type='STUDENT'");
         if(mysqli_num_rows($sql)>0)
         {
            while($row=mysqli_fetch_assoc($sql))
            {  
                                        
                $name=$row['name'];
                $btnum=$row['btnum'];
                $email=$row['bemail'];
                $dati=$row['dati'];
                $tnum=$row['tnum'];
                $usersed=$row['user_type'];
                $tnu=$row['logi'];
                $bill1=$row['fam'];
                $bill2=$row['cou'];
                $bill3=$row['stu'];
                
                              
         ?>
         <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $btnum ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $dati ?></td>
        <td><?php echo $tnum ?></td>
        <td><?php echo $usersed ?></td>
        <td><?php echo $tnu ?></td>
        <td><?php echo $res=$bill3 * $tnum ?></td>

            
         </tr>


<?php }}; ?>
    </tbody>
</table>
</div>
</body>
</html>
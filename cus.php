<?php

include 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

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
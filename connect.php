<?php
$conn=mysqli_connect('localhost','root','','park');
if($conn->connect_error)
{
    echo "Failed to connect DB".$conn->connect_error;
}
?>
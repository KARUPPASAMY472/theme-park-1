<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $comt=$_POST['commt'];

    $sele=mysqli_query($conn,"SELECT * FROM usreview");
    if (mysqli_num_rows($sele)>0)
    {
        $ins=mysqli_query($conn,"INSERT INTO usreview(name,commt) VALUES('$name','$comt')");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *
        {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .nav-ba
        {
            background-color: black;
            color: white;
            display: flex;
            width: 100%;
            height: 90px;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }
        .nav1
        {
            display: flex;
            gap: 25px;

        }
       
        .nav1 a
        {
         color: white;
         text-decoration: none;
         cursor: pointer;   
         
        }
        .nav1 a:hover
        {
            border-bottom: 1px solid white;
        }
        .rev
        {
            align-items: center;
            position: relative;
            top: 20px;
            left: 100px;
            padding:0px 0px 15px 0px;
            align-items: center;
            background-color: white;
            border: 1px solid black;
            width: 80%;
        }
        .rev-1
        {
            padding:25px;
            background-color:blanchedalmond ;
        }
        .rev-1 form{
            padding: 30px;
            gap: 20px;
        }
        .inp-0
        {
            
            border: none;
            margin:10px 0px;
            padding:10px ;
            width: 30%;
            background-color: transparent;
            
        }
        .inp-0::placeholder
        {
            color: black;
        }
        .inp-0:focus
        {
            outline: none;
            border-bottom: 1px solid black;
        }

        .inp-1
        {
            border: none;
            margin:10px 0px;
            padding:10px ;
            width: 50%;
            background-color: transparent;
            
        }
        .inp-1::placeholder
        {
            color: black;
        }
        .inp-1:focus
        {
            outline: none;
            border-bottom: 1px solid black;
        }
        .bt
        {
            padding: 7px 50px;
            border: none;
            border: 1px solid black;
            border-radius:8px;
            background-color: rgb(7, 7, 7);
            cursor: pointer;
            color: white;
        }
        .c{
            margin-top: 10px;
            padding: 15px;
        }
        .cmmd
        {
            margin: 10px 0px;
            width: 80%;
            height: fit-content;

        }
        .cmmd p
        {
            padding:10px 60px;
        }
        .cmmd span
        {
            font-size: 22px;
        }
    </style>
    <div class="nav-ba">
        <div>
            THEME PARK
        </div>
        <nav class="nav1">
            <p><a href="park.php">HOME</a></p>
            <p><a href="book.php">BOOKING</a></p>
            <p><a href="ride.php">RIDES</a></p>
        </nav>
    </div>
    <div class="rev">
        
        <div class="rev-1">
            <h3>COMMENT</h3>
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Enter Your Name" class="inp-0" required>
                    <input type="text" name="commt" placeholder="Comment" class="inp-1" required>
                    <input type="submit" name="submit" class="bt" value="send" onclick=nos()>
                </form>
         
        </div>
        <?php 
        $sql=mysqli_query($conn,"SELECT * FROM usreview");
        if(mysqli_num_rows($sql))
        {

        
        
        while($row=mysqli_fetch_assoc($sql))
        {

        
        ?>
        <div class="c">
        
        <div class="cmmd">
            <span><?php echo "{$row["name"]} ";?></span>
            <p><?php echo "<p >{$row["commt"]}</p>";?></p>
            <hr>
        </div>
        <?php
        }}
    ?>
    </div>
    
      
    </div>
    <script>
        var n=document.querySelecter(".bt")
        function nos(event) {
            event.PreventDefault();
        }
    </script>
</body>
</html>
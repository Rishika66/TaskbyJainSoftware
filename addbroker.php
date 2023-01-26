<?php
       include("connect.php");
    if(isset($_POST['submit'])){
         $name= $_POST['name'];
         $number= $_POST['contactno'];
         $email= $_POST['mailid'];
         $experience= $_POST['exp'];
         $status= $_POST['status'];

        $sql="insert into addproperty"


    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HouseHawking.com</title>
    <link rel="stylesheet" href="brokerstyle.css">
    <link rel="stylesheet" href="adminstyle.css">

</head>
<body>
    <section id="menu">
        <div class="logo">
            <img src="adminlogo.png" alt="logo">
            <h2>HouseHawking</h2>
        </div>
        <div class="items">
            <li><i><a href="admin.php">Dashboard</a></i></li>
            <li><i><a href="addbroker.php">Add Broker</a></i></li>
            <li><i><a href="addproperty.php">Add Property</a></i></li>
            <li><i><a href="#">Show Properties</a></i></li>
            <li><i><a href="#">Show Brokers</a></i></li>
        </div>
    </section>
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div class="admin">
                <h2>Hi,<span>admin</span></h2>
                <h1>Welcome <span></span></h1>
                 </div> 
            </div>     
            <div class="profile">
                <img src="profile.jpg" alt="dp">
                <a href="logout.php" class="btn">logout</a> 
            </div> 
        </div> 
    <div class="form-container">
        <form action="" method="post">
            <h2> Add Broker Details:</h2>
            <input type="text" name="name" required placeholder="Enter Broker's Name">
            <input type="number" name="contactno" required placeholder="Enter Broker's Contact No.">
            <input type="email" name="mailid" required placeholder="Enter Broker's Email Id">
            <input type="number" name="exp" required placeholder="Enter Broker's experience in years">
            <input type="number" name="status" required placeholder="Enter Broker's Status 1-Active , 0-Inactive">
            <select name="user_type">
                <option value="broker">Broker</option>
            </select>
            <input type="submit"name="submit" value="ADD" class="form-btn">
        
        </form>
    </div>
    </section>  
</body>
</html>
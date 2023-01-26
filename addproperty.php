
<?php
       
    if(isset($_POST['submit'])){
         $ownername= $_POST['oname'];
         $ownernumber= $_POST['ownerno'];
         $Address= $_POST['address'];
         $City= $_POST['city'];
         $Zip= $_POST['zipcode'];
         $Property= $_POST['kop'];
         $Area= $_POST['area'];
         $TotalVal= $_POST['totalval'];
         $Status= $_POST['status'];

        $servername="localhost";
        $username="root";
        $password="";
        $db_name="househawking";
        $conn = new mysqli($servername, $username, $password,$db_name,3306);

        $sql="INSERT INTO `addproperty`(`Ownername`, `Ownercontactno`, `Address`, `City`, `ZipCode`, `KindofProperty`, `Area`, `TotalValuation`, `PropertyStatus`) VALUES  ('$ownername','$ownernumber', '$Address' , '$City' ,'$Zip','$Property','$Area','$TotalVal','$Status')";
        mysqli_query($conn,$sql);



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
        <form action="#" method="post">
            <h2> Add Property Details:</h2>
            <input type="text" name="oname" required placeholder="Enter Property Owner Name">
            <input type="number" name="ownerno" required placeholder="Enter Owner's Contact No.">
            <input type="text" name="address" required placeholder="Enter Address">
            <input type="text" name="city" required placeholder="Enter City">
            <input type="number" name="zipcode" required placeholder="Enter Zipcode">
            <input type="text" name="kop" required placeholder="Enter Kind of property">
            <input type="text" name="area" required placeholder="Enter Area">
            <input type="number" name="totalval" required placeholder="Total Valuation">
            <input type="number" name="status" required placeholder="Enter Property Status 1-Active , 0-Inactive">
            <input type="submit" name="submit" value="ADD" class="form-btn">
        </form>
    </div>
    </section>  
</body>
</html>
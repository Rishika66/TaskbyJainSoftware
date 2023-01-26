<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HouseHawking.com</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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
        <h3 class="i-name">Dashboard</h3>
        <div class="values">
               <div id="nb"class="val-box">
                    <img src="download.png"alt="broker"></i>
                    <h2> 80 </h2>
                    <span>New Brokers</span>
                </div>
                <div id="np"class="val-box">
                    <img src="house.png"alt="properties"></i>
                    <h2> 167</h2>
                    <span>New Properties</span>
                </div>
            
            
                <div id="tp" class="val-box">
                    <img src="prop.png"alt="properties"></i>
                    <h2> 1000+</h2>
                    <span>Total Properties</span>
                </div>
                <div id="tb" class="val-box">
                    <img src="broker3.png"alt="Broker"></i>
                    <h2> 212</h2>
                    <span>Total Brokers</span>
                </div>
        </div>
    </section>
</body>
</html>
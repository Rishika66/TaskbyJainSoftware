<?php
   include("connect.php");
   error_reporting(0);
   $query= "select * from addproperty";
   $data = mysqli_query($conn,$query); 
   $total = mysqli_num_rows($data);
   $result = mysqli_fetch_assoc($data);

   echo $result[Ownername];
   if($total!=0)
   {
     echo "Table has record";
   }
   else{
    echo"not records found";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show property from database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
       <h2 class=>Properties </h2>
        <table class="table">
        <thead>    
           <tr>
              <th>Owner Name </th>
              <th>Owner Contact no </th>
              <th>Address </th>
              <th>City </th>
              <th>Zipcode </th>
              <th>Kind of Property</th>
              <th>Area </th>
              <th>Total Valuation</th>
              <th>Property status </th>
         </tr> 
        </thead>    
        </table>          
    </div>
</body>
</html>
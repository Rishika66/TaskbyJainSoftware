<?php
     include("connect.php");
     if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql= "select * from loginl where username ='$username' and password = '$password'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array ($res, MYSQLI_ASSOC);
        $count = mysqli_num_rows($res);
        if($count==1)
        {
           header("Location:admin.php");
        }
        else{
              echo '<script>
                  window.location.href="index.php";
                  alert("Login failed. Invalid username or password!!!")
                  </script> ';

             }
    }  
?>          
    
     
<?php
include_once('connection.php');
$admminname=$_POST["email"];
$password=$_POST["psw"];
$tbl_name = "login_information";
$sql = "SELECT adminname,email, pass FROM $tbl_name";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    
        
        if(" ".$admminname==$row["email"] && $password==$row["pass"])
        {
            $cookie_name = "user";
            $cookie_value = $row["adminname"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
            header("Location:adminpage.php");
        }
        else
        {
           
            echo '<script type="text/javascript">alert("کلمه عبور یا رمز اشتباه است");window.location=\'login.php\';</script>';
            
            
            
        }
    }
} else {
    echo "0 results";
}


mysqli_close($conn);



?>
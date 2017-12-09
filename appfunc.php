<?php
require("admin/dbconnection.php");
$fname = $_POST['appfname'];
$lname = $_POST['applname'];
$email = $_POST['appemail'];
$phone = $_POST['appmobile'];
$gender = $_POST['appgender'];
$date = $_POST['appdate'];
$message = $_POST['appmessage'];
$query = "INSERT INTO appointment(appfname,applname,appemail,appmobile,appgender,appdate,appmessage) values('$fname','$lname','$email','$phone','$gender','$date','$message')";
 if(isset($_POST['submit'])){
    if(mysqli_query($conn,$query)){
        echo "Success";
        header("Location:/public_html/appointment.php");
    }
     else{
         echo "<h1>sorry<h1>";
     }
 }

?>
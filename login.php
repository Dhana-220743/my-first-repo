<?php

$password = $_POST['password'];
$email = $_POST['email'];
  
$connect = mysqli_connect("localhost","root","","ekartdb");

$sql= "insert into ekart (password,email) values('$password','$email')";

if(mysqli_query($connect,$sql)){
        echo "Login successfully";
    }
    else {
        echo "Error" .mysqli_error($connect);
    }

    mysqli_close($connect);

?>
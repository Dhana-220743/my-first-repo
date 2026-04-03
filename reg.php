<?php
    $username= $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $con= mysqli_connect("localhost","root","","ekartdb");

    if(!$con){
        die("Connection failed".mysqli_connect_error());
    }

    $sql="insert into ekart(username,password,email) values ('$username','$password','$email')";

    if(mysqli_query($con,$sql)){
        echo "Registration successfull";
    }
    else {
        echo "Error" .mysqli_error($con);
    }

    mysqli_close($con);

?>
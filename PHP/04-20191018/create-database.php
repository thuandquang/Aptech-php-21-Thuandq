<?php
    $severname = "localhost";
    $username ="root";
    $password ="";
// tao ket noi
    $conn = mysqli_connect($severname,$username,$password);
// check ket noi
    if(!$conn){
        die("Connection failed ". mysqli_connect_error());

    }
    echo "Connected successfully";

//tao database 
    $sql ="CREATE DATABASE APTECH";
    if(mysqli_query($conn,$sql)){
        echo "thanh cong";
    }else{
        echo "that bai" . mysqli_error($conn);
    }
    mysqli_close($conn);

    
?>
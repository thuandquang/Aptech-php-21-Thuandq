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
    echo "Connected successfully<br>";

//tao database 
//     $sql ="CREATE DATABASE APTECH21";
//     if(mysqli_query($conn,$sql)){
//         echo "thanh cong";
//     }else{
//         echo "that bai" . mysqli_error($conn);
//     }
    

// // tao bang user
    // $user = "CREATE TABLE APTECH21.users (
    //     id int AUTO_INCREMENT PRIMARY KEY,
    //     last_name varchar(255),
    //     first_name varchar(255),
    //     email varchar(255)
    //     )";
    // if(mysqli_query($conn,$user)){
    //     echo "tao bang thanh cong";
    // }else{
    //     echo "khong tao bang thanh cong" . mysqli_error($conn);
    // }
    

// nhap du lieu cho table 
    // $nhap = "INSERT INTO APTECH21.users
    // (id,last_name, first_name, email)
    // VALUES
    // (1, 'Nam', 'Nguyen', 'namnh.website@gmail.com'),
    // (2, 'John', 'Cenna', 'cenna.john@hotmail.com'),
    // (3, 'Henry', 'Tran', 'tranhe@resolutioninc.com'),
    // (4, 'Christiaan', 'Hunter', 'ch.pageworth@pageworth.com'),
    // (5, 'Vicky', 'Nguyen', 'vicky06@gmail.com')";
    
    // if(mysqli_query($conn,$nhap)){
    //     echo "thanh cong";
    // }else{
    //     echo "khong thanh cong" . $nhap ."<br>". mysqli_error($conn);
    // }
    // mysqli_close($conn);

//lay du lieu ra 
    $lay = "SELECT id, last_name,first_name FROM APTECH21.users";
    $result = mysqli_query($conn, $lay);

    if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);

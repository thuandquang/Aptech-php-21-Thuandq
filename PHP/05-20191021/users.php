<!-- <?php

//tao database 
// $sql ="CREATE DATABASE USERS";
// if(mysqli_query($conn,$sql)){
//     echo "thanh cong";
// }else{
//     echo "that bai" . mysqli_error($conn);
// }
// mysqli_close($conn);

//tao bang user
// $ID = "CREATE TABLE USERS.thongtin (
//         id int AUTO_INCREMENT PRIMARY KEY,
//         email varchar(255),
//         password varchar(30),
//         roles_id int


//         )";
//     if(mysqli_query($conn,$ID)){
//         echo "tao bang thanh cong";
//     }else{
//         echo "khong tao bang thanh cong" . mysqli_error($conn);
//     }




//tao bang roles
// $bangrole = "CREATE TABLE USERS.roles (
//         id int AUTO_INCREMENT PRIMARY KEY, 
//         name varchar(255) 


//         )";
// if (mysqli_query($conn, $bangrole)) {
//     echo "tao bang thanh cong";
// } else {
//     echo "khong tao bang thanh cong" . mysqli_error($conn);
// }

//them thong tin
// $nhapdulieu = "INSERT INTO USERS.roles
//     (id,name)
//     VALUES
//     (1, 'admin'),
//     (2,'user'),
//     (3, 'guest')";


//     if(mysqli_query($conn,$nhapdulieu)){
//         echo "thanh cong";
//     }else{
//         echo "khong thanh cong" . $nhapdulieu ."<br>". mysqli_error($conn);
//     }
//     mysqli_close($conn);




?>

<h1>Đăng Nhập</h1>
<form action="./check.php" method="POST">
    <input type="text" name="email" placeholder="nhập vào email">
    <input type="text" name="password" placeholder="nhập mật khẩu">
    <select name="roles" id="select">
        <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "USERS";
        // tao ket noi
        $conn = mysqli_connect($severname, $username, $password, $dbname);
        // check ket noi
        if (!$conn) {
            die("Connection failed " . mysqli_connect_error());
        }

        $lay = "SELECT * FROM USERS.roles";
        $result = mysqli_query($conn, $lay);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) { ?>

                <option value="<?php echo $row['id']; ?>">
                    <?php echo $row['name']; ?>
                </option>


        <?php }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);


        ?>
    </select>
    <button type="submit">Đăng nhập</button>
</form> -->
<!-- <?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "USERS";
    // tao ket noi
    $conn = mysqli_connect($severname, $username, $password, $dbname);
    // check ket noi
    if (!$conn) {
        die("Connection failed " . mysqli_connect_error());
    }

    

    // if the register button is clicked

    $username = $_POST['thuan'];
    $email = $_POST['thuan@gmail.com'];
    $password_1 = $_POST['1223'];
    $password_2 = $_POST['1223'];
    echo "data is taken";

    // if there are no errors, save user to database

    $sql = "INSERT INTO Users(Username, Email, password) VALUES('$username', 
 '$email', '$password_1')";
    mysqli_query($db, $sql);
    echo "data inserted successfully";
    ?> -->
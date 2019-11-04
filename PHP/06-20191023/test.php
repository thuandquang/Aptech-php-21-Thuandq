<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<form method="post" action="register.php">
   <div class="input-group">
     <lable>Username</lable>
     <input type="text" name="Username" required>
   </div>
   <div class="input-group">
      <lable>Email</lable>
      <input type="text" name="Email" required>
   </div>
   <div class="input-group">
      <lable>Password</lable>
      <input type="password" name="password_1" required></div>

   <div class="input-group">
      <lable>Confirm Password</lable>
      <input type="password" name="password_2" required>
   </div>
   <p>Already a User?</p>
  </form>

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

    // if the register button is clicked

    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    echo "data is taken";

    // if there are no errors, save user to database

    $sql = "INSERT INTO Users(Username, Email, password) VALUES('$username', 
 '$email', '$password_1')";
    mysqli_query($db, $sql);
    echo "data inserted successfully";
    ?>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
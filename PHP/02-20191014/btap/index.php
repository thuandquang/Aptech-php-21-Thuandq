<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <title>Bài Tập</title>
</head>

<body>
  <?php
  $product = [
    [
      "name" => "samsung",
      "price" => "3000",
      "currency" => "VND",
    ],
    [
      "name" => "iphone",
      "price" => "6000",
      "currency" => "VND",
    ],
    [
      "name" => "xiaomi",
      "price" => "999000",
      "currency" => "VND",
    ],
  ];
  ?>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>

      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($product); $i++) { ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $product[$i]['name'] ?></td>
          <td><?php
          $chuan = $product[$i]['price'];
          if($product[$i]['price'] > 1000){
            $chuan = number_format($product[$i]['price']);
          }
          echo $chuan. " ".$product[$i]['currency'] ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

</body>

</html>
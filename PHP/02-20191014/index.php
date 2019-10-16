<?php
// $product =[
//     [
//         "name" => "samsung",
//         "price" =>"1500",
//         "currency" => "$"
//     ],
// ]

$thuan=[1,2,3];
echo $thuan[1]. "<br>",$thuan[2];


$mang = ["loc" => 1,"thuan" => 2];
echo $mang["thuan"];


function kiemSoat($tuoi){
    if ($tuoi >= 18)
        echo "du tuoi roi";
    else
        echo "chua du dau";
}

kiemSoat(19);

?>
<h1>toi ten la:<?php echo $mang["thuan"]?></h1>
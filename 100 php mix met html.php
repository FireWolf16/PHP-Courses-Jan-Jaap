<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            height: 200px;
            width: 200px;
        }
    </style>
</head>
<body>
<?php
/*for loop*/
//for ($i = 1; $i<=10; $i++) {
//    echo "<img src='img/MK-characters".$i.".png'>";
//}

/**/
//$nextC = array("330px-BarakaMK11.png", "KitanaMK11.png", "Noob_Saibot.png", "Shao_Kahn_2011.png");
//foreach ($nextC as $next) {
//    echo "<img src='img/next-MK-character/".$next."'>";
//}

$i= 1;
while ($i<=10) {
    echo "<img src='img/MK-characters".$i.".png'>";
    $i++;
}
?>
</body>
</html>

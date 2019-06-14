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
        body{
            text-align: center;
        }
        .rood{
            border: red solid 3px;
        }
        .groen{
            border: green solid 3px;
        }
    </style>
</head>
<body>
<?php
/*150*/
//for ($i=1; $i<=9; $i++){
//    if ($i== 3){
//        $class = "class='rood'";
//    } else{
//        $class = "";
//    }
//    echo "<img ".$class. "src='img/MK-characters".$i.".png'>";
//}
/*160*/
for ($i=1; $i<=9; $i++){
    if ($i % 2 == 0){
        $class = "class='rood'";
    } else{
        $class = "class='groen'";
    }
    echo "<img ".$class. "src='img/MK-characters".$i.".png'>";
}
?>
</body>
</html>

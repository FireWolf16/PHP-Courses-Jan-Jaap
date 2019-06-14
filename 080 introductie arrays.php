<?php
/*les 080 introductie arrays*/
$apen = array("chimpansee", "oerang oetang", "gorilla", "neusaap");
echo $apen [2];

$apen[4] = "mandril";

$apen[6] = "baviaan";
echo '<ul>';
foreach ($apen as $aap) {
    echo '<li>'.$aap.'</li>';
}
echo '</ul>';
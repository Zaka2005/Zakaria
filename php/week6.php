<?php

//opdracht 1

$currentTime = date("H:i");

if ($currentTime < "12:00") {
    echo "Goedemorgen";
} elseif ($currentTime >= "12:00" && $currentTime < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond"; 
}  

//opdracht 2

function optellen($getal1, $getal2) {
echo "Het uitkomst is" . $getal1 = $getal2;
}
$cijfer1 = 5;
$cijfer2 = 20;
optellen($cijfer1, $cijfer2); 

//opdracht 3

function dagentoteindvanhetjaar() {
    $recent = date("z"); 
    $dageninjaar = date("L") ? 366 : 365; 

    $dagen = $dageninjaar - $recent; 

    return $dagen;
} 

$dagen = dagentoteindvanhetjaar();
echo "Aantal dagen tot het einde van het jaar: " . $dagen; 

//opdracht 4

function calculateTotalLength($strings) {
    $lengte = 0;

    foreach ($strings as $string) {
        $lengte += strlen($string);
    }

    return $lengte;
}

$strings = array("schoen", "fiets", "zakaria");
$lengte = calculateTotalLength($strings);
echo "totale lengte van de strings: " . $lengte; 

?>
<?php
$arr = array(
"Japan" => "Tokyo",
"Mexico" => "New Mexico",
"USA" => "Washington D.C.",
"India" => "New Delhi",
"Zuid-Korea" => "Seoul",
"China" => "Peking",
"Nigeria" => "Abuja",
"Argentina" => "Buenos Aires",
"Egypt" => "Cairo",
"UK" => "London");

$stad = count($arr);

foreach($arr as $land => $hoofdstad){
    $goed = false;
    echo"Wat is de hoodstad van: ".$land.PHP_EOL;
    $a = readline("");
    if($a === $hoofdstad){
        echo"correct!!!".PHP_EOL; 
        $goed = true;
    }
    elseif($a != $hoofdstad){
        echo"Dit was niet goed".PHP_EOL;
    }
    if($goed === true){
        ++$hoeveelheid;
    }
    else{
        ++$hoeveelheidfout;
    }

}
echo"Je hebt $hoeveelheid goed en $hoeveelheidfout niet goed  ";
?>
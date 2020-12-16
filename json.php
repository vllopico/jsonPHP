<?php

$arrayInfo = array();

for ($i=0;$i<=20;$i++)
{
    $itemJSON = array();
    $itemJSON['cap'] = $i;
    $itemJSON['nom'] = "NOM_" . $i;
    $itemJSON['info'][] = array("I1" => "I".rand(0,20), "I2"=>"I".rand(0,20));
    for ($l=0;$l<=5;$l++)
    {
        $itemJSON['linies'][] = "L_" . $l;
    }
    $arrayInfo[]=$itemJSON;
}

$jsonInfo = json_encode($arrayInfo);

print_r($jsonInfo);
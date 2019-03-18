<?php

$objects =[
    "name"=> ["olafrank","ola"],
    "age"=>["200","300"],
    "gender"=>["male","female"],
];
$multiDimensional=[
    ["1","2"],
    ["one","two"]
];

$animals = ["dog","monkey","goat","lions"];
for($i=0; $i<count($animals);$i++){
    echo $animals[$i]. "<br>" ;
}
echo "<hr>";

foreach($objects as $key =>$value){
    echo $key. "----". $value[0]. "<br>";
}
echo "<hr>";
for($i=0; $i<count($multiDimensional); $i++){
    for($j =0; $j <count($multiDimensional[$i]); $j++){
        echo $multiDimensional[$i][$j];

    }
}
?>

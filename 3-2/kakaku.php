<?php
$products =["鉛筆"=>100,"消しゴム"=>150,"物差し"=>500];
define("TAX",1.1);

foreach($products as $key=>$value){
    $price = $value * TAX;
    echo "$key.の税込み価格は.$price.です";
    echo "<br>";
}

//http://localhost/LetsEngineer/curriculum/PHPjob/3-2/kakaku.php
?>
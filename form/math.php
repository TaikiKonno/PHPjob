<?php
//次の円の面積をもとめよ。なお、答えは小数点以下2桁で切り上げ
//半径：10.14
//円周率：3.14

function circlearea($r){
    $circle_area = $r * $r * pi();
    echo floor($circle_area);
}
circlearea(10.14);
echo "<br>";
//akarasamaの文字数を調べる
$s="akarasama";
echo strlen($s);
echo "<br>";
//akarasamaのsの文字番号を調べる
$e= "akarasama";
echo strpos($s,"s");
echo "<br>";
//akarasamaのarasaを抜き取る
$w = "akarasama";
echo substr($w,-7,5);
echo "<br>";
//akara samaのスペースを消す
$t = "akara sama";
echo str_replace(" ","",$t);
echo "<br>";

$name = "米山さん";
$limit_number= 40;
echo "${name}の残り時間はあと${limit_number}時間です";
echo "<br>";

$members=["tanaka","ito","kawasaki","sasaki","kojima"];
echo count($members);
echo "<br>";

$members=["tanaka","ito","kawasaki","sasaki","kojima"];
sort($members);
var_dump($members);
echo "<br>";

$members=["tanaka","ito","kawasaki","sasaki","kojima"];
if(in_array("tanaka",$members)){
    echo "田中さんはいるよ！";
}else{
    echo "田中さんはいないよ！";
}
echo "<br>";

$members=["tanaka","ito","kawasaki","sasaki","kojima"];
$atstr =implode('@',$members);
var_dump($atstr);
echo "<br>";
$re_members = explode("@",$atstr);
var_dump($re_members);


?>
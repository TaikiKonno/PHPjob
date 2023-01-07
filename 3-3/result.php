<?php
$my_name=$_POST['my_name'];
$number = $_POST['number'];

echo date("Y-m-d H:i:s", time());
echo "<br>";
echo "名前は${my_name}です。";
echo "<br>";
$X_number =$number* mt_rand(1,6);
echo "番号は${X_number}です。";
echo "<br>";

if ($X_number<=10){
    $a= "凶";
}elseif($X_number<=15){
    $a= "小吉";
}elseif($X_number<=20){
    $a= "中吉";
}elseif($X_number<=25){
    $a= "吉";
}elseif($X_number<=36){
    $a= "大吉";
}elseif($X_number>=37){
    $a= "残念";
}
echo "結果は${a}です。";


?>
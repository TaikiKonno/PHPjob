<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="answer.css">
</head>

<body>
    

<?php
$_80 =$_POST["_80"];
$PHP =$_POST["PHP"];
$join =$_POST["join"];
$my_name=$_POST["name_id"];
$seikai=$_POST["seikai"];
$seikai2 = $_POST["seikai2"];
$seikai3 = $_POST["seikai3"];
?>
<p><?php echo $my_name;?>さんの結果は・・?</p>


<p>➀の答え</p>
<?php
if($_80 == $seikai){
    echo "正解！";
}else{
    echo "残念・・・";
}?>

<br>
<p>➁の答え</p>
<?php
if($PHP == $seikai2){
    echo "正解！";
}else{
    echo "残念・・・";
}?>
<br>
<p>➂の答え</p>
<?php
if($join == $seikai3){
    echo "正解！";
}else{
    echo "残念・・・";
}?>

</body>
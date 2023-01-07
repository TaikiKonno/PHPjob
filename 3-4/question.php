
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="question.css">
</head>


<body>
    

<?php
$my_name = $_POST["my_name"];
?>

<p class="hellow">お疲れ様です<?php echo $my_name;?>さん</p>
<?php
$port_number = [80,22,20,21];
$language = ["PHP","Python","JAVA","HTML"];
$mysql_command =["join","select","insert","update"];
?>

<form action="answer.php" method="POST">

<input type="hidden" name="name_id" value=<?php echo $my_name; ?>>

<h2>➀ネットワークのポート番号は何番?</h2>
<?php
foreach($port_number as $value){ ?>
    <input type = "radio" name = "_80" value=<?php echo $value ?>>
 <?php   echo $value;
}?>
<input type="hidden" name="seikai" value=<?php echo $port_number[0]?>>


<br>
<h2>➁Webページを作成するための言語は?</h2>
<?php
foreach($language as $value){?>
    <input type="radio" name="PHP" value=<?php echo $value?>>
<?php echo $value;
}?>
<input type="hidden" name="seikai2" value ="<?php echo $language[3]?>">


<br>
<h2>➂MySQLで情報を取得するためのコマンドは?</h2>
<?php
foreach ($mysql_command as $value){ ?>
    <input type="radio" name ="join" value=<?php echo $value?>>
 <?php echo $value;
}?>
<input type="hidden" name="seikai3" value ="<?php echo $mysql_command[1]?>">


<br>
<input class="answer" type="submit" value ="回答する">
</form>

</body>



<!--
<?php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$mail_address = $_POST['mail_address'];
$sex= $_POST['sex'];
$hidden_param = $_POST['hidden_param'];
$age = $_POST['number'];
var_dump($_POST);
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のメールアドレスは、<?php echo $mail_address; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>
*/
-->
<?php
$your_name = $_GET['your_name'];
$merchandise = $_GET['merchandise'];
$numeral = $_GET['numeral'];
?>
<p>お名前：<?php echo $your_name; ?></p>
<p>ご希望商品<?php echo $merchandise; ?></p>
<p>個数：<?php echo $numeral;?></p>

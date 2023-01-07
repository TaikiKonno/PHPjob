<!--<form action="result.php" method="post">
  名前：<input type="text" name="my_name" />
  <br>
  メールアドレス：<input type="text" name="mail_address">
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  性別：
  <input type="radio" name ="sex" value ="男性">
  <input type="radio" name ="sex" value ="女性">
  <input type="hidden" name="hidden_param" value="隠しパラメータから"/>
  <select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
      </select>
  <input type="submit" value="送信するよ!" />
</form>-->
<br>
<br>
<br>
<br>
<form action="result.php" method="get">
  お名前：<input type="text" name="your_name"/>
  <br>
  ご希望商品：
  Ａ賞<input type="radio" name="merchandise" value="A賞">
  Ｂ賞<input type="radio" name="merchandise" value="B賞">
  Ｃ賞<input type="radio" name="merchandise" value="C賞">
  <br>
  個数：
  <select name="numeral">
    <?php  for($i=1;$i<=10;$i++){ ?>
      <option value="<?php  echo $i;  ?>">
      <?php echo $i; ?>
    </option>
    <?php } ?>
  </select>
  <input type="submit" value="申込"/>




</form>
<!--http://localhost/LetsEngineer/curriculum/PHPjob/form/index.php

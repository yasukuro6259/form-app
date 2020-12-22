<!--自動返信処理（SMTPサーバーを構築する必要あり)-->
<?php
require('require/auto-reply.php');
require('require/session-reset.php');
require('require/dbconnect.php');
require('require/dbregister.php');
require('require/header.html');
?>

<body>
  <header class="title">お問い合わせフォーム</header>
  <div class="complete-message1">送信が完了しました。<br>お問い合わせ頂きありがとうございました。</div>
  <div class="complete-message2" >自動返信メールを送信いたしましたので、
  <br>お問い合わせ内容をご確認くださいませ。</div>
</body>
</html>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>formApp</title>
</head>

<body>
  <?php 
  // var_dump($_GET) ?>
  <?php
  //  var_dump($_SESSION) ?>

  <header class="title">お問い合わせフォーム</header>

  <form action="{{ url('/confirm') }}" class="form" method="POST">
  {{ csrf_field() }} <!-- CSRF対策。bladeファイルでないと、文字列として扱われる -->
    <div class=form-contents-wrapper>
      <div class="wrapper">
        <div class="box">件名</div>
        <select name="title">
          <option name="initial" value=""> 選択してください </option>
          <option name="opinion" >ご意見</option>
          <option name="comment" >感想</option>
          <option name="other" >その他</option>
        </select>
      </div>
      <div class="wrapper">
        <div class="box">名前</div>
        <input name="username" type=text >
      </div>

      <div class="wrapper">
        <div class="box">メールアドレス</div>
        <input name="email" type=text >
      </div>

      <div class="wrapper">
        <div class="box">電話番号</div>
        <input name="phoneNumber" type=text>
      </div>

      <div class="wrapper">
        <div class="box">お問い合わせ内容</div>
        <textarea name="content"></textarea>
      </div>
    </div>

    <button type="submit" name="confirm">入力内容を確認する</button>
  </form>
</body>
</html>

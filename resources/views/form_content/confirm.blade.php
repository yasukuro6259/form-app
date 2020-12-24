
<?php
// require('require/session.php');
 //session_start();
 //$keys=array(
    // 'title',
    // 'username',
    // 'email',
    // 'phoneNumber',
    // 'content'
  // )
  ?>
  <?php //foreach($keys as $key){
    // if(isset($_POST[$key])){
      // $_SESSION[$key] = $_POST[$key]
    // ;}
  // }
  ?>
<?php
// require('require/validation.php');
?>

<?php
// require('require/header.html');
?>
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
  <?php var_dump($_POST); ?>
  <!-- var_dump(変数)  キー名 => 型(バイト数) "値"-->
  <header class="title">お問い合わせフォーム</header>
  <form action="complete.php" class="form" method="POST">
    <div class=form-contents-wrapper>
      <div class="wrapper">
        <div class="box">件名</div>
        <p class="confirm-content"><?php echo $data['title'] ?> </p>
        <input type="hidden" name="title" value= "{{$data['title']}}" >
      </div>

      <div class="wrapper">
        <div class="box">名前</div>
        <p class="confirm-content"><?php echo $data['username']; ?></p>
        <input type="hidden" name="username" value="{{$data['username']}}">
      </div>

      <div class="wrapper">
        <div class="box">メールアドレス</div>
        <p class="confirm-content"><?php echo $data['email']; ?></p>
        <input type="hidden" name="email" value="{{$data['email']}}">
      </div>
        
      <div class="wrapper">
        <div class="box">電話番号</div>
        <p class="confirm-content"><?php echo $data['phoneNumber']; ?></p>
        <input type="hidden" name="phoneNumber" value="{{$data['phoneNumber']}}">
      </div>
        
      <div class="wrapper">
        <div class="box">お問い合わせ内容</div>
        <p class="confirm-content"><?php echo $data['content']; ?></p>
        <input type="hidden" name="content" value="{{$data['content']}}">
      </div>
    </div>
    <button type="submit" class="button">送信する</button>
    <button type="button" onclick="location.href='/'" value="unset">修正する</button>
  </form>
</body>
</html>
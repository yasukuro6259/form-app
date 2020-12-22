<?php function validation($keys){
    $error = array();
    //値が空の場合
    foreach ($keys as $key){
      if(empty($_POST[$key])){
        if($key == 'title'){
          $error[] = "件名を選択してください。";
        }
        if($key == 'username'){
          $error[] = "名前は必須項目です。";
        }
        if($key == 'email'){
          $error[] = "メールアドレスは必須項目です。";
        }
        if($key == 'phoneNumber'){
          $error[] = "電話番号は必須項目です。";
        }
        if($key == 'content'){
          $error[] = "お問い合わせ内容は必須項目です。";
        }
      }
    }
    // 条件に反する場合
    if(!preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/', $_POST['email'])){
      $error[] = "正しいメールアドレスを記入してください。";
    }
    if(!preg_match('/^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$|^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/', $_POST['phoneNumber'])){
      $error[] = "正しい電話番号を記入してください。";
    }
    //長さに反する場合
    if(strlen($_POST['username'] >= 60)){
      $error[] = "名前は60文字以内で記入してください。";
    }
    if(strlen($_POST['email'] >= 60)){
      $error[] = "メールアドレスは254文字以内で記入してください。";
    }
    return $error;
  }
    $errors = validation($keys);
  ?>
  <?php if(count($errors)>=1){
    $_SESSION['errors'] = $errors;
    header("location: input.php");
    exit();}
  ?>
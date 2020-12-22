<?php 
//ヘッダー情報
$header = "MIME-Version: 1.0\n";
$header .= "From: 管理者 <noreply@gmail.com>\n";
$header .= "Reply-To: 管理者 <noreply@gmail.com>\n";

//問合せした人への自動返信
$subject = "お問い合わせ内容の確認";
$text = "この度はお問い合わせ頂きありがとうございます。下記の内容で受け付けいたしました。\n";
$text .= "件名：" . $_POST['title'] . "\n";
$text .= "氏名：" . $_POST['username'] . "\n";
$text .= "メールアドレス：" . $_POST['email'] . "\n";
$text .= "電話番号：" . $_POST['phoneNumber'] . "\n";
$text .= "お問い合わせ内容:" . $_POST['content'];
mb_send_mail($_POST['email'], $subject, $text, $header); 

//管理者への自動返信
$admin_subject = "問い合わせを受け付けました";
$admin_text = "下記の内容で問い合わせを受け付けいたしました。\n";
$admin_text .= "件名：" . $_POST['title'] . "\n";
$admin_text .= "氏名：" . $_POST['username'] . "\n";
$admin_text .= "メールアドレス：" . $_POST['email'] . "\n";
$admin_text .= "電話番号：" . $_POST['phoneNumber'] . "\n";
$admin_text .= "お問い合わせ内容:" . $_POST['content'];
mb_send_mail('m84.kuroki.yasutoshi@gmail.com', $admin_subject, $admin_text, $header); 
?>
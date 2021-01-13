<?php session_start();
 $keys=array(
    'title',
    'username',
    'email',
    'phoneNumber',
    'content'
  )
  ?>
  <?php foreach($keys as $key){
    if(isset($_POST[$key])){
      $_SESSION[$key] = $_POST[$key]
    ;}
  }
  ?>
<?php
require('dbconnect.php');
$statement = $db->prepare('INSERT INTO form SET title=?, username=?, email=?, phoneNumber=?, content=?');

$statement->execute(array(
  $_POST['title'],
  $_POST['username'],
  $_POST['email'],
  $_POST['phoneNumber'],
  $_POST['content'])
);
?>
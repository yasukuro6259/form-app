<?php
  session_start();
  $messages = $_SESSION['errors'];
  if ($_GET['reset'] == ""){
  unset($_SESSION['errors']);
  }
  ?>
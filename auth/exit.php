<?php
  setcookie('user', $user['name'], time() -3600, "/");
  setcookie('type', $user['type'], time() - 3600, "/");
  header('Location: /');
?>
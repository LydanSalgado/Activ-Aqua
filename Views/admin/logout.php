<?php
  session_start();
    $_SESSION = array();
    
    session_destroy();
  header('Location: index.php?controller=connect&action=index');

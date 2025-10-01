<?php 
session_start();
session_unset();
session_destroy();

header("Location: /mini_classificados/index.php");
exit();
?>
<?php

session_start();

unset($_SESSION['admin_id']);
session_unset();
session_destroy();
echo "Logging out .. Please Wait ...";
header('Refresh: 3;url=../index.php');
exit();

?>
<?php
session_start();
session_destroy();
header("Location: loginPage.html");
exit();
?>

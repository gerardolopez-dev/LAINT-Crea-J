<?php
session_start();
session_unset();
session_destroy();

header("Location: ../../Maqueta EN/index.php");
exit();
?>
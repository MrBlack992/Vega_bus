<?php
session_start();
echo"logging out..please wait for a while";
session_destroy();
header("Location:/dbms/index.html");
?>
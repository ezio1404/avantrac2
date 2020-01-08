<?php
session_start();
session_destroy();
unset($_SESSION['admin']);
unset($_SESSION['search']);
header("location:index.php");

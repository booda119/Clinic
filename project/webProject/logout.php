<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["time"]);

header("Location:index.php");

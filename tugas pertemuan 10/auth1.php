<?php

session_start();
if(!isset($_SESSION["admin"])) header("Location: adminpage2.php");
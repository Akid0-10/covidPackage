<?php
//Destroy the data in the current session
session_start();
session_destroy();

//Head into the beginning of the webpage
header("location: index.html");
?>
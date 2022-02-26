<?php
session_start();

if(isset($_REQUEST['submit'])) {
    $_SESSION["name"] = $_REQUEST["name"];
    $_SESSION["surname"] = $_REQUEST["surname"];
    $_SESSION["age"] = $_REQUEST["age"];
}
if (!empty($_SESSION)) {
    foreach($_SESSION as $key => $value) {
        echo "\n\n" . $value;
    }
}
session_destroy();

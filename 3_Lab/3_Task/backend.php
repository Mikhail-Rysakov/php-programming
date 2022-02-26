<?php

if('POST' === $_SERVER['REQUEST_METHOD']) {
   post();
}
function post () {
    if(empty($_POST['category']) || empty($_POST['title']) || empty($_POST['name']) ) {
        var_dump($_POST);
        return 404;
    }
    $dir = $_POST['category'];
    $name = $_POST['title'];
    create_file($dir,$name);
}
function create_file($dir,$name) {
    $file = fopen("./Category/$dir/$name", 'w+');
    $text = "Dealer: " . $_POST['name'] . "  ";
    fwrite($file,$text);
    fwrite($file,$_POST['text']);
    fclose($file);
}

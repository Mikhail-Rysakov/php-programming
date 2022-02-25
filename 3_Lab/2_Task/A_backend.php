<?php

$text = null;

if(isset($_POST["text"])) {
    $text = $_POST["text"];
    echo " \nWords = " . str_word_count($text);
    echo " \nSymbols = " . strlen($text);
}

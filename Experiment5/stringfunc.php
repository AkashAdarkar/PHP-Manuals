<?php
$word="HeLLo,World!";
echo $word."</br>";
echo str_word_count($word)."<br>";
echo strlen($word)."</br>";
echo strpos("I love php, I love php too!","php")."</br>";
echo strrpos("I love php, I love php too!","php")."</br>";
echo str_replace("world","Peter","Hello world!")."</br>";
echo ucwords($word)."</br>";
echo strtoupper($word)."</br>";
echo strtolower($word)."</br>";
echo strcmp("Hello world!","Hello world!")."</br>";
?>

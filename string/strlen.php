<?php

echo "<h3>Strlen - String Length</h3>";
$text = "Hello World!";
$nric = "020302045434";

echo "String : $text <br><br>";
echo "Strlen : " . strlen($text) . "";
echo "<br><br>";

echo "<h3>strpos - String Position</h3>";
echo "Strpos : " . strpos($text, "World", 0) . "";
echo "<br><br>";

echo "<h3>strstr - Search first occurrence String inside string</h3>";
echo "Strstr : " . strstr($text, "o", false) . " ";
echo "<br><br>";

echo "<h3>substr - Return a part of string</h3>";
echo "Strstr : " . substr($text, 11, 1) . " ";

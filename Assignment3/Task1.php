<?php
$text =  "The quick brown fox jumps over the lazy dog.";

$toLower = strtolower($text);
$replacedText = str_replace("brown", "red", $toLower);

print $replacedText;

?>
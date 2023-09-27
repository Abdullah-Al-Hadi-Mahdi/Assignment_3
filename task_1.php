<?php

$string ="The quick brown fox jumps over the lazy dog.";
$replacedString = str_ireplace('brown', 'red', $string);
echo $replacedString;
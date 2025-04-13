<?php
$sentence = "The main body of a book";
$lowercase = strtolower($sentence);
$uppercase = strtoupper($sentence);
$replaced = str_replace("book", "a college", $sentence);
$length = strlen($sentence);
$position = 5;
$character = $sentence[$position];
echo "Original sentence: $sentence\n";
echo "Lowercase: $lowercase\n";
echo "Uppercase: $uppercase\n";
echo "Replaced: $replaced\n";
echo "Length: $length\n";
echo "Character at position $position: $character\n"; "\n";

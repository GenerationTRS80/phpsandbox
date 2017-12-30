<?php

# substr()
# return a portion of a string

# strlen()
# return a length of a string

# strpos()
# Finds the position of the first occurance of a sub string

// $output = strpos('Hello World','o');
// echo "strpos() $output";

# strrpos()
# Finds the position of the LAST occurance of a sub string

// $output = strrpos('Hello World','o');
// echo "Last occurance of O $output";

# trim()
# Trims whitespace at beginning and ending around the text

// $text1 = '   Hello World        ';
// var_dump($text1);

// $trimmed = trim($text1);

// var_dump($trimmed);

# strtolower()  
# Lower Case

# ucwords()
# Captilize first letter of every word

// $output = ucwords('hello world')
// echo $output;

# strreplace()
# Replace all occurances of one word with another word in its place

# is_string()
# check value to see if it is a string

# gzcompress()
# Compress a string

$string = "

Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt rem voluptatum pariatur minima porro nemo at, odit molestiae a nihil quibusdam, repudiandae laborum dolores sint culpa aliquam numquam itaque earum.
";

$compressed = gzcompress($string);

echo "<h3> Compressed String </h3> <br><br> $compressed  <br><br>";

$originalString = gzuncompress($compressed);

echo "<h3>Uncompressed String</h3> <br><br> $originalString";
?>
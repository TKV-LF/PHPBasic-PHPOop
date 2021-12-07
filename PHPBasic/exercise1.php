<?php
function checkValidString($string)
{
    if (strpos($string, "book") === false && strpos($string, "restaurant") === false) {
        return false;
    } elseif (strpos($string, "book") === false || strpos($string, "restaurant") === false) {
        return true;
    }
}
// read text1
$string1 = fopen("text1.txt", "r") or die("Unable to open file!");
$text1 = fread($string1, filesize("text1.txt"));
//read text 2
$string2 = fopen("text2.txt", "r") or die("Unable to open file!");
$text2 = fread($string2, filesize("text2.txt"));

if (checkValidString($text1) == true) {
    echo "Chuỗi hợp lệ. chuỗi bao gồm " . substr_count($text1, ".") . " câu.";
} else {
    echo "Chuỗi không hợp lệ";
}
echo "<br>";
if (checkValidString($text2) == true) {
    echo "Chuỗi hợp lệ. chuỗi bao gồm " . substr_count($text2, ".") . " câu.";
} else {
    echo "Chuỗi không hợp lệ";
}
fclose($string1);
fclose($string2);

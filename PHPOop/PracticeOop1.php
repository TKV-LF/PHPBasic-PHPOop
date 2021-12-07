<?php
class ExerciseString
{
    public $check1;
    public $check2;

    public function readFile($fileName)
    {
        $file = fopen("$fileName", "r");
        $string = fread($file, filesize($fileName));
        fclose($file);
        return $string;
    }

    public function checkValidString($string)
    {
        if (strpos($string, "book") === false && strpos($string, "restaurant") === false) {
            return false;
        } elseif (strpos($string, "book") === false || strpos($string, "restaurant") === false) {
            return true;
        }
    }

    public function writeFile($n)
    {
        $resultFile = fopen("result_file.txt", "w");
        $line1 = 'check1 là chuỗi "' . ($this->check1 == true ? "Hợp lệ" : "Không hợp lệ") . '"' . PHP_EOL;
        $line2 = 'check2 là chuỗi "' . ($this->check2 == true ? "Hợp lệ" : "Không hợp lệ") . '". Chuỗi có ' . $n . ' câu.' . PHP_EOL;
        fwrite($resultFile, $line1);
        fwrite($resultFile, $line2);
        fclose($resultFile);
    }
}

$object1 = new ExerciseString();
$text1 = $object1->readFile("text1.txt");
$text2 = $object1->readFile("text2.txt");
$object1->check1 = $object1->checkValidString($text1);
$object1->check2 = $object1->checkValidString($text2);

$object1->writeFile(substr_count($text2, "."));




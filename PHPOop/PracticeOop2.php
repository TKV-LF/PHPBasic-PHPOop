<?php 
trait Active
{
    public function defindYourself()
    {
        return get_class($this);
    }
}

abstract class Country
{
    protected $slogan;
    abstract protected function sayHello();
}

interface Boss
{
    function checkValidSlogan();
}

class EnglandCountry extends Country implements Boss
{
    use Active;

    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
    }

    public function checkValidSlogan()
    {
        if (strpos(strtolower($this->slogan), "english") !== false || strpos(strtolower($this->slogan), "england") !== false) {
            return true;
        } else {
            return false;
        }
    }

    public function sayHello()
    {
        if ($this->checkValidSlogan($this->slogan) == true) {
            echo "Hello";
        }
    }
}

class VietnamCountry extends Country implements Boss
{
    use Active;

    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
    }

    public function checkValidSlogan()
    {
        if (strpos(strtolower($this->slogan), "vietnam") !== false && strpos(strtolower($this->slogan), "hust") !== false) {
            return true;
        } else {
            return false;
        }
    }

    public function sayHello()
    {
        if ($this->checkValidSlogan($this->slogan) == true) {
            # code...
            echo "Xin chào ";
        }
    }
}

$englandCountry = new EnglandCountry();
$vietnamCountry = new VietnamCountry();

$englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');

$vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');

$englandCountry->sayHello(); // Hello
echo "<br>";
$vietnamCountry->sayHello(); // Xin chao

echo "<br>";

var_dump($englandCountry->checkValidSlogan()); // true
echo "<br>";
var_dump($vietnamCountry->checkValidSlogan()); // false

echo "<br>";
echo 'I am ' . $englandCountry->defindYourself(); 
echo "<br>";
echo 'I am ' . $vietnamCountry->defindYourself(); 


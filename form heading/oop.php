<?php

class OOP
{
    public function publicmethod()
    {
        echo "ini adalah OOP method publik";
    }

    protected function protectedmethod()
    {
        echo "ini adalah OOP method protected";
    }

    private function privatemethod()
    {
        echo "ini adalah OOP methode private";
    }

    public function accessmethodOOP()
    {
        $this->publicmethod(); //adek 1
        echo "<br>";
        $this->protectedmethod();
        echo "<br>";
        $this->privatemethod();
    }
}

$oop = new OOP();
$oop ->publicmethod();
echo "<br>";
$oop ->accessmethodOOP();


?>
<?php

class oop
{
    public function publicMethod()
    {
        echo "ini adalah oop metode public";
    }

    protected function protectedMethod()
    {
        echo "ini adalah opp meotode protected";
    }

    private function privateMethod()
    {
        echo "ini adalah metode oop private";
    }

    public function accesMethodoop()
    {
        $this->publicMethod();
        echo "<br>";
        $this->protectedMethod();
        echo "<br>";
        $this->privateMethod();
        echo"<br>";
    }


}
$oop = new  OOP ();
$oop->publicMethod();
echo "<br>";
$oop->accesMethodoop();
<?php

class Notification
{
    const OOP = "OOP is so funny to learn, but so hard";
}

trait learn
{
    public function learnOOP()
    {
        echo Notification::OOP;

    }
}

class learnToday
{
    use learn;
}

$learn = new learnToday();
$learn ->learnOOP();

?>
<?php
class Animal {
    public $name = '';
    public $sound = '';

    public function setName($name): Animal {
        $this->name = $name;
        return $this;
    }
    public function setSound($sound): Animal {
        $this->sound = $sound;
        return $this;
    }

    public function makeSound(): string {
        return $this->sound;
    }

    public function sayName(): string {
        return $this->name;
    }

    public function describe(): string {
        return "Name: " . $this->name . "\n Sound: " . $this->sound;
    }
}

$animal1 = new Animal();
$animal1->setName("Cat");
$animal1->setSound("Meow");
$sound = $animal1->makeSound();
echo $sound;

$animal2 = new Animal();
$animal2->setName("Dog");
$animal2->setSound("Woof");
$sound = $animal2->makeSound();
echo $sound;


?>
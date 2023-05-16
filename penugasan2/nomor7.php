<?php
class Person {
    public $name = '';
    public $age = 0;
  
    public function setName($name): Person {
      $this->name = $name;
      return $this;
    }
  
    public function setAge($age): Person {
      $this->age = $age;
      return $this;
    }
  
    public function getName(): string {
      return $this->name;
    }
  
    public function getAge(): int {
      return $this->age;
    }
  
    public function getInfo(): string {
      return "Name: " . $this->name . "\n Age: " . $this->age;
    }
  }
  $person1 = new Person();
  $person1->setName('Sarah');
  $person1->setAge(25);
  echo $person1->getInfo();

?>  
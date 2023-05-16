<?php
class Car {
    public $brand = '';
    public $year = 0;
  
    public function setBrand($brand): Car {
      $this->brand = $brand;
      return $this;
    }
    public function setYear($year): Car {
      $this->year = $year;
      return $this;
    }
  
    public function getBrand(): string {
      return $this->brand;
    }
  
    public function getYear(): int {
      return $this->year;
    }
  
    public function getInfo(): string {
      return "Brand: " . $this->brand . ", Year : " . $this->year;
    }
  }

  $car1 = new Car();
  $car1->setBrand('Toyota');
  $car1->setYear(2020);
  echo $car1->getInfo();
  
    
?>
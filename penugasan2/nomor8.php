<?php
class Circle {
  public $radius = 0;

  public function setRadius($radius): Circle {
    $this->radius = $radius;
    return $this;
  }

  public function calculateArea(): float {
    if ($this->radius <= 0) {
      throw new RuntimeException("Radius cannot be zero or negative");
    }
    return M_PI * $this->radius * $this->radius;
  }
}

$circle1 = new Circle();
$circle1->setRadius(10);
$area = $circle1->calculateArea();

echo "Area: ".$area;
?>
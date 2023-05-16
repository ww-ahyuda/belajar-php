<?php
class Rectangle {
  public $length = 0;
  public $width = 0;

  public function setLength(int $length): Rectangle {
    $this->length = $length;
    return $this;
  }

  public function setWidth(int $width): Rectangle {
    $this->width = $width;
    return $this;
  }

  public function calculateArea(): float {
    if ($this->length === 0 || $this->width === 0) {
      throw new RuntimeException("Length or width cannot be zero");
    }
    return $this->length * $this->width;
  }
}

$rectangle1 = new Rectangle();
$rectangle1->setLength(5);
$rectangle1->setWidth(8);
$area = $rectangle1->calculateArea();

echo "Area: " . $area;

?>

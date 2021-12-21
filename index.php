
<?php
class Beverage {
  public string $name;
  public string $color;
  public string $temperature;
  
  public function __construct($name, $color, $price) {
      $this->name= $name;
      $this->temperature= "cold";
      $this->color= $color;
      $this->price= $price;
  }
  public function getInfo() {
      echo "{$this->name}<br>";
      echo "{$this->temperature}<br>";
      echo "{$this->color}<br>";
      echo "{$this->price}$<br>";
  }
}
class Beer extends Beverage {
    public float $alcoholpercentage;
    public function __construct($name, $color, $price, $alcoholpercentage) {
      $this->name= $name;
      $this->temperature= "cold";
      $this->color= $color;
      $this->price= $price;
      $this->alcoholpercentage= $alcoholpercentage;
    }
    public function getAlcoholdPercentage() {
        echo "{$this->alcoholpercentage}%<br>";
    }
}

$cola = new Beverage("Cola", "brown", "2");
echo $cola->getInfo();
echo "<br>";
$fanta = new Beverage("Fanta", "yellow", "2");
echo $fanta->getInfo();
echo "<br>";

$beer = new Beer("Duvel", "blond", "3.5$", "10");
echo $beer->getInfo();

?>

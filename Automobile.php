<?php
class Automobile {
  // Properties
  public $Licence_Plate;
  public $Brand;
  public $Model;
  public $Model_year;
  public $Color;
  // Methods
    function __construct($Licence_Plate, $Brand, $Model,$Model_year, $Color ) {
    print "Automobile constructor launching\n";
    $this->Licence_Plate = $Licence_Plate;
    $this->Brand = $Brand;
    $this->Model = $Model;
    $this->Model_year = $Model_year;
    $this->Color = $Color;
}
public function __toString()
    {
        return $this->Licence_Plate;
        return $this->Brand;
        return $this->Model;
        return $this->Model_year;
        return $this->Color;
    }

}
?>
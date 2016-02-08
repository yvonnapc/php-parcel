<?php
class Parcel
{
  private $height;
  private $width;
  private $length;
  private $weight;

  function __construct ($parcel_height, $parcel_width, $parcel_length, $parcel_weight)
  {
    $this->height = $parcel_height;
    $this->width = $parcel_width;
    $this->length = $parcel_length;
    $this->weight = $parcel_weight;
  }
  function Volume()
  {
    return $this->height * $this->width * $this->length;
  }
  function setHeight($new_height)
  {
      $this->height = $new_height;
  }

  function getHeight()
  {
      return $this->height;
  }

  function setWidth($new_width)
  {
      $this->width = $new_width;
  }
  function getWidth()
  {
      return $this->width;
  }

  function setLength($new_length)
  {
      $this->length = $new_length;
  }
  function getLength()
  {
      return $this->length;
  }

  function setWeight($new_weight)
  {
      $this->weight = $new_weight;
  }
  function getWeight()
  {
      return $this->weight;
  }



}
$newParcel = new Parcel ($_GET['height'], $_GET['width'], $_GET['length'], $_GET['weight']);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Parcels</title>
  </head>
  <body>
      <h1>Your Parcel Details:</h1>
      <?php


          $show_height = $newParcel->getHeight();
          $show_width = $newParcel->getWidth();
          $show_length = $newParcel->getLength();
          $show_weight = $newParcel->getWeight();
          $show_volume = $newParcel->volume();

              echo "<p>Your package is $show_height High, $show_width Wide, $show_length Long, $show_weight Heavy</p>";
              echo "<p>The volume is $show_volume</p>"

       ?>
  </body>
</html>

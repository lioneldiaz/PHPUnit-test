<?php 

class Conversion {
  /**
   * @decription Attribute
   */
  private $cm;
  private $meter;

  /**
   * @description Constructor of the Conversion class
   * @param {Number} cm
   * @param {Number} meter
   */
  public function __construct ($cm, $meter) {
    $this->cm = $cm;
    $this->meter = $meter;
  }

  /**
   * @description Do a conversion from cm to meter
   * @return {Number}
   */
  public function doConvertionCmToMeter () {
    return $this->cm / 100;
  }

  /**
   * @description Do a conversion from meter to cm
   * @return {Number}
   */
  public function doConversionMeterToCm () {
    return $this->meter * 100;
  }
}
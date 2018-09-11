<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . "/../../src/conversion/Conversion.php";

class ConversionTest extends TestCase {
  
  /** @test */
  public function testConversionCmToMeter () { 
    $conversion = new Conversion(200,5);
    $this->assertEquals(
      2,
      $conversion->doConvertionCmToMeter()
    );
  }

  /** @test */
  public function testConversionMeterToCm () {
    $conversion = new Conversion(200,5);
    $this->assertEquals (
      500,
      $conversion->doConversionMeterToCm()
    );
  }
}
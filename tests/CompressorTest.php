<?php 

use PHPUnit\Framework\TestCase;
use Jebrini\Compressor\Compressor;
use Jebrini\Compressor\ImageTypes;

class CompressorTest extends TestCase {
  
   public function testComprossorCanCompressJPG()
   {
     $comprossor = new Compressor('./tests/images'); 
     $this->assertTrue($comprossor->run([ImageTypes::JPG, ImageTypes::JPEG]));
   }

   public function testComprossorCanCompressPNG()
   {
     $comprossor = new Compressor('./tests/images');
     $this->assertTrue($comprossor->run([ImageTypes::PNG]));
   }
  
 }
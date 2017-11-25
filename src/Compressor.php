<?php 

namespace Jebrini\Compressor;

use \RecursiveDirectoryIterator;
use \RecursiveIteratorIterator;
use Jebrini\Compressor\Commands\Convert;

class Compressor 
{

  private $dir = null;

  public function __construct(string $dir)
  {
    $this->dir = new RecursiveDirectoryIterator($dir);
  }

  public function run(array $types = [])
  {
    foreach (new RecursiveIteratorIterator($this->dir) as $filename => $file) {
        if ((substr($file, -1) != '.') && (substr($file, -2) != '..')) {  
          if ( in_array (ImageTypes::find($file) , $types) ) {
            echo "\n compressing" . $file; 
            Convert::run($file, ImageTypes::find($file));
          }
        }
    }
    return true;
  }
 
}
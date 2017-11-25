<?php 

namespace Jebrini\Compressor\Commands;

use Jebrini\Compressor\ImageTypes;

class Convert {
  public static function run($file, $type) {

    switch($type){

      case ImageTypes::PNG : 
        return shell_exec('convert ' . $file . ' -strip ' . $file . "-out && " . 
        " mv " . $file . "-out " . $file );
      case ImageTypes::JPG :
      case ImageTypes::JPEG :
        return shell_exec('convert ' . $file . 
          " -sampling-factor 4:2:0 -strip -quality 85 -interlace JPEG " .
          " -colorspace RGB  " . $file . "-out && " .
          " mv " . $file . "-out " . $file);
      default:
        return null;
    }
    
  }
}
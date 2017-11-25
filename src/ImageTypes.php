<?php 

namespace Jebrini\Compressor;

class ImageTypes {
  const PNG  = 'png';
  const JPEG = 'jpeg';
  const JPG  = 'jpg';

  public static function find($file) {
     // get it from ImageType @TODO
     $ext = pathinfo($file, PATHINFO_EXTENSION);
     // Return file type 
     switch($ext) {
       case 'png':
        return self::PNG;
       case 'jpeg':
        return self::JPEG;
       case 'jpg' :
       return self::JPG;
       default:
        return null;
     }
  }
}
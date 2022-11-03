<?php

namespace Config;
use Config\Shorthand;

class Config{
  
  /**
   * This method loads the config 
   * file and stores everything 
   * neatly in an array. With
   * the available parameters
   * you can fetch those items
   * from the array.
   */

  public static function get(string $path){

    /**
     * Check if the parent and 
     * child are available..
     */
 
    if($path) {

          
      return Shorthand::get($config, $path);

    }
    
    return false;

  }

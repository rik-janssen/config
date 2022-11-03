<?php

namespace Config;

class Shorthand{

  public static function get($array, $path){

    $path = explode('/', $path);
      
      foreach($path as $bit) {

          if(isset($array[$bit])) {

            /**
             * Attach a new
             * config bit.
             */

            $array = $array[$bit];

          }else{

            /**
             * When the value is 
             * not set in the config
             * file. Return false.
             */

            return false;
            
          }

      }
    
      return $array;
    
  }

}

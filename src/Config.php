<?php

namespace Config;

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

      $path = explode('/', $path);
      $config = V_CONFIG;
      
      foreach($path as $bit) {

          if(isset($config[$bit])) {

            /**
             * Attach a new
             * config bit.
             */

            $config = $config[$bit];

          }else{

            /**
             * When the value is 
             * not set in the config
             * file. Return false.
             */

            return false;
            
          }

      }
      
      return $config;

    }
    
    return false;

  }

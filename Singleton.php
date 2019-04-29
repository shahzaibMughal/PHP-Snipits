<?php

class Singleton{

  protected static $instance;

  public static function getInstance(){
    if(null == static::$instance){
      static::$instance = new static();
    }
    return static::$instance;
  }

  //protected constructor prevent creating a new instance
  protected function __construct(){}
  // private clone prevent cloning of the instance
  private function __clone(){}
  // private wakeup prevent unserializing
  private function __wakeup(){}
}

 ?>

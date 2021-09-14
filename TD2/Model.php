<?php
class Model {

  require_once("Conf.php");
   

  

  private static $pdo = NULL;

  


  public static function init(){
    $hostname=Conf::getHostName();
    $database_name=Conf::getDataBase();
    $login=Conf::getLogin();
    $password=Conf::Password();
    self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);
  }
   
   public static function getPDO(){
    if(self::$pdo==NULL){
         self::$pdo=is_null();
       }
    else return self::$pdo;
    
   }

  
}
?>
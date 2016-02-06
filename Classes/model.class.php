<?php 

/* DBZ MODELE KAMEHAMEHA */

class Model {
  
  private $PDO = NULL;
  
  public function __construct ($pdo) {
    $this->PDO = $pdo;
  }
  
  // db name
  public function Name_DB () {
    return $this->PDO->Query('select database()')->fetchColumn();
  }
    
    //$_GET test
  public function test_get($var) {
    
    if(isset($var)){
      return $var;
    }
    
      
  }
    
  
  // list table
  public function List_Table () {
    $SQL = "show tables";
    $RES = $this->PDO->prepare($SQL);
    $RES->execute();
    return $RES->fetchAll();
  }
    
    
    //list attribute
  public function List_attribute($table) {
    $SQL= "SELECT * FROM ".$table;
    $RES = $this->PDO->prepare($SQL);
    $RES->execute();
    return $RES->fetchAll();
  }
}

?>

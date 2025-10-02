<?php 
/** 
  MysqlMQ - Simple Class Mysql Multi Query 
   
  @author    Gilton Guma 
  @version   1.0.1 
  @warning   Works only tables with InnoDB Storage Engine 
   
  @param sql {string} Multiple Query 
  @param aft {string} Text after error 
  @param bef {string} Text before error 
  @param srv {string} Server name of conection 
  @param usr {string} User name of conection 
  @param pwd {string} Password of conection 
  @param dtb {string} Database of conection 
*/ 
class MysqlMQ { 
  private $sql; //Query 
  private $err; //Error's 
  private $aft; //After error 
  private $bef; //Before error 
  private $srv; //Server name 
  private $usr; //User name 
  private $pwd; //Password 
  private $dtb; //Database 
   
  //Constructor 
  function MysqlMQ(){ 
    $this->sql = array(); 
    $this->err = NULL; 
    $this->aft = "<strong>Error:</strong> "; 
    $this->bef = "<br />"; 
    $this->srv = "localhost"; 
    $this->usr = "root"; 
    $this->pwd = ""; 
    $this->dtb = ""; 
  } 
   
  //Settings atribute of class 
  function setSQL($value){ $this->sql[] = $value; } 
  function setAft($value){ $this->aft   = $value; } 
  function setBef($value){ $this->bef   = $value; } 
  function setSrv($value){ $this->srv   = $value; } 
  function setUsr($value){ $this->usr   = $value; } 
  function setPwd($value){ $this->pwd   = $value; } 
  function setDtb($value){ $this->dtb   = $value; } 
   
  //Get attributes values of class 
  function getSQL(){ return $this->sql; } 
  function getErr(){ return $this->err; } 

  /** 
    mQuery 
     
    Execute multiple queries to the database 
     
    @return true|false {boolean} 
  */ 
  function mQuery(){ 
    $er = false; //Erro 

    $db = new mysqli($this->srv, $this->usr, $this->pwd, $this->dtb); 

    if (@mysqli_connect_errno()) return false; 

    $db->autocommit(false); 

    foreach ($this->sql AS $ss){ 
      if ($ss){ 
        if (!$db->query($ss)){ 
          $er = true; 
          $this->err.= $this->aft.$db->error.$this->bef; 
        } 
      } 
    } 

    $er ? $db->rollback() : $db->commit(); 

    $db->close(); 

    return !$er; 
  } 
} 
?> 
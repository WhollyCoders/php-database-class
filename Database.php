<?php
require('../dbconnect.php');// Include Server Connection
require('../library.php');// Include Library For Helper function
class Database{
  public $server_connection;
  public $db_name;
  public function __construct($conn, $name){
    $this->server_connection  = $conn;
    $this->db_name            = $name;
    $this->create_db();
  }
  function create_db(){
    $sql_create_db = "CREATE DATABASE IF NOT EXISTS `$this->db_name`";
    if (mysqli_query($this->server_connection, $sql_create_db)) {
      echo('Database <strong>'.$this->db_name.'</strong> created successfully');
    } else {
      exit('There has been an ERROR creating the database!!!');
    }
  }
}
// Used to test the Database Class
$db_name    = 'whollymath';
$whollymath = new Database($connection, $db_name);
preWrapper($whollymath);// Use PreWrapp helper function to display object properties
 ?>

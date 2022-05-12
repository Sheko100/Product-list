<?php 

namespace Store\Database;
class DatabaseManager {

  private $server_name;
  private $username;
  private $pass;
  private $db_name;
  private $connection;

  function __construct() {
    $this->server_name = "localhost";
    $this->username = "370363";
    $this->pass = "SF53iHNOYXXq73Z2";
    $this->db_name = "370363";
  }

  public function connect() {
    $connect = new \mysqli($this->server_name, $this->username, $this->pass, $this->db_name);
        

    if($connect->connect_error) {
      die("connection failed: ".$connect->connect_error);
    } else {
      $this->connection = $connect;
    }
  }

  public function getAllRecords() {
    $sql = "SELECT * from products ORDER BY productID";

        
    $result = $this->connection->query($sql);
    $result = $result->fetch_all(MYSQLI_ASSOC);

        
    return json_encode($result);
  }

  public function addNewRecord($sku, $name, $price, $type, $attribute) {
    $sql = "INSERT INTO products (sku, name, price, type, specific_attribute) VALUES ('".
    $sku."', '".$name."', ".$price.", '".$type."', '".$attribute."');";


    if($this->connection->query($sql) === false) {
      echo "server error: ".$this->connection->error;
    }

  }
  
  public function deleteRecord($id) {

    $sql = "DELETE FROM products WHERE productID IN (";

    for($i=0;$i<count($id);$i++) {

      $sql .= $id[$i];

      if(count($id) > 1 && $i != count($id)-1) {
        $sql .= ",";
      }

    }

    $sql .= ");";

    if($this->connection->query($sql) === false) {
      echo "server error: ".$this->connection->error;
    } else {
      return "Deleted record(s) Successfuly";
    }
  }

  public function checkAvailabilityOf($sku) {
    $sql = "SELECT * from products WHERE sku='".$sku."'";
    $isAvailable = true;
    if($this->connection->query($sql)->num_rows >= 1) {
      $isAvailable = false;
    }
    
    return $isAvailable;
  }


    

}

?>
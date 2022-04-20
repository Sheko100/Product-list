<?php 

namespace store\classes;
class DatabaseManager {

    protected $server_name;
    protected $username;
    protected $pass;
    protected $db_name;
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
        $sql = "SELECT * from products";

        
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
    // make sku unique to delete by it
    public function deleteRecord() {
        $sql = "DELETE FROM products WHERE price=21";

        if($this->connection->query($sql) === false) {
            echo "server error: ".$this->connection->error;
        }
    }

    public function checkSkuAvailability() {

    }


    

}

?>
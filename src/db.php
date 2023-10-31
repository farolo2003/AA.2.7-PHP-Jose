<?php 

   
class MysqlAdapter {

    protected ?PDO $connection;
    protected bool $connected = false;

    //Aprofitem el constructor per establir la connexió per defecte a la nostra BD
    function __construct() {
        try{
            $this->connection=$db = new PDO('mysql:host=localhost;dbname=colegi;charset=utf8mb4', 'root', '');
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //echo $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    function __destruct() {
        $this->closeConnection();
    }

    function isConnected(): bool {
        return $this->connected;
    }

    //sempre podrem reconectar-nos a altres BD's aprofitant el mateix objecte
    // function connect(string $host, string $user, string $password, string $db, int $port){
    //     if ($this->connected == true) {
    //         $this->closeConnection();
    //     }
    //     try {
    //         $this->connection = new mysqli($host, $user, $password, $db, $port);
    //         $this->connected = true;
    //     } catch (mysqli_sql_exception $ex) {
    //         throw new Exception("DB Connection Failure: " . $ex->getMessage());
    //     }
    // }

    function closeConnection() {
        if ($this->connected == true) {
            $this->connection =null;
            $this->connected = false;
        }
    }

    function readQuery(string $query): array {
        $dataset = [];
        $result = $this->connection->query($query);
        if ($result != false) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $dataset[] = $row;
            }
        }
        return $dataset;
    }

    function writeQuery(string $query): bool {
        $result = $this->connection->query($query);
        return $result;
    }

    public function prepareQuery(string $query) {
        return $this->connection->prepare($query);
    }

    public function executeQuery(object $statement, array $params = []) {
        return $statement->execute($params);
    }

}

     


?>
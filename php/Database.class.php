<?php
    class Database {

        //учетные данные для базы данных
        private $host;
        private $db_name;
        private $port;
        private $username;
        private $password;
        private $enc;

        public $conn;
    
        // получение соединения с базой данных
        public function __construct() {
			$conf = parse_ini_file("Database.ini");
			$this->host = $conf["host"];
			$this->port = $conf["port"];
			$this->db_name = $conf["db_name"];
			$this->username = $conf["username"];
			$this->password = $conf["password"];
			$this->enc = $conf["enc"];
		}
        //получение экземпляра класса
        private function getDb() {
            try{
                    $this->conn = new PDO(
                    "mysql:host=$this->host;
                    port=$this->port;
                    dbname=$this->db_name;
                    charset=$this->enc",
                    $this->username,
                    $this->password,
                    );
                }
                catch(PDOException $exception){
                    echo "Ошибка соединения: " . $exception->getMessage();
                }
            return $this->conn;
       }

        //внесение данных
        public function InsertData($qry, $parm = array()) {
        $rslt = $this->getDb()->prepare($qry);
        $rslt->execute((array)$parm);
        }

        public function getRow($qry, $parm = array()) {
			$rslt = $this->getDb()->prepare($qry);
			$rslt->execute((array)$parm);
			return $rslt->fetch(PDO::FETCH_ASSOC);
			}

        public function getRowCount($qry, $parm = array()) {
			$rslt = $this->getDb()->prepare($qry);
			$rslt->execute((array)$parm);
			$rslt = $rslt->fetchAll(PDO::FETCH_NUM);
			$count = 0;
			foreach ($rslt as $row) {
				$count++;}
			return $count;
			}
        
        public function getAll($qry,$parm = array()){
			$rslt = $this->getDb()->prepare($qry); 
			$rslt->execute((array)$parm);
			return $rslt->fetchAll(PDO::FETCH_ASSOC);
		}
    }
?>
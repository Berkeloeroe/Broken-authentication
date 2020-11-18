<?php

// Define DB Params
// todo 1: zoek uit wat de host, user, password van je database en vul ze hieronder in om de connectie te kunnen maken met je db
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");

// todo 2: vul de naam van de database in op de plek van de empty string.
define("DB_NAME", "brokenauth");

class DB{
	protected $dbh;
	protected $stmt;
    protected $resultSet;

	public function __construct(){
		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $this->resultSet = [];
	}

	public function executeSQL($query){
        $this->stmt = $this->dbh->prepare($query);
		$result = $this->stmt->execute();

		if (!$result) {
    		die('<pre>Oops, Error execute query '. $query .'</pre><br><pre>'.'Result code: '. $result .'</pre>');
   		}

		$row = $this->stmt->fetchAll();

		if(!empty($row)){
			$this->resultSet = $row;
			return $this->resultSet;
		}

		return $this->resultSet;
	}
}

?>

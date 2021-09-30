<?php 

class Mahasiswa_model {
	private $dbh; //DATABASE HANDLER
	private $stmt;

	public function __construct()
	{
		//DATA SOURCE NAMA
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try {
			$this->dbh = new PDO($dsn,'root', '');
		} catch(PDOException $e) {
			die($e->getMessege());
		}
	}



	public function get ALLMahasiswa()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
	}
}
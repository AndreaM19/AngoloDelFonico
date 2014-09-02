<?php

class DbData{
/*Database connection data*/
	private $USER="root";
	private $DB="adf_db";
	private $HOST="localhost";
	private $PASSWORD="andr3a";
	
	public function getDbData(){
		$dbData=Array('USER' => $this->USER, 'DB' => $this->DB, 'HOST' => $this->HOST, 'PASSWORD' => $this->PASSWORD);
		return $dbData;
	}
}

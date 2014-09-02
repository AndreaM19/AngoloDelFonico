<?php
@ require '/include/DB/DbUtility.php';
@ require '/include/DB/DbData.php';
@ require 'Category.php';
@ require 'Instrument.php';
@ require 'InstrumentInfo.php';


class InstrumentDataGetter{
private $db;//object for db connection

	public function __construct(){
 		$dbData=new DbData();
 		$this->db=$dbData->getDbData();
	}
	
	//Get the category list from the database
	public function getCategory(){
		$catList=array();
		$dbConn = DbUtility::connectToDB ( $this->db['HOST'], $this->db['USER'], $this->db['PASSWORD'], $this->db['DB'] );
		$queryText = "SELECT * FROM category ORDER BY categoryName ASC";
		$query = DbUtility::queryToDB ( $dbConn, $queryText );
		while ( $row = mysqli_fetch_array ( $query ) ){
			$cat=new Category($row['categoryId'],$row['categoryName']);
			$catList[]=$cat;
		}
		DbUtility::freeMemoryAfterQuery ( $query );
		DbUtility::disconnectFromDB ( $dbConn );
 		return $catList;
	}
	
	//Get the instrument list from the database
	public function getInstrument($catId){
		$instrList=array();
		$dbConn = DbUtility::connectToDB ( $this->db['HOST'], $this->db['USER'], $this->db['PASSWORD'], $this->db['DB'] );
		$queryText = "SELECT instrumentId, instrumentName, categoryName, categoryId FROM `instrument` INNER JOIN category ON category=categoryName WHERE categoryId=".$catId."";
 		$query = DbUtility::queryToDB ( $dbConn, $queryText );
		while ( $row = mysqli_fetch_array ( $query ) ){
			$instr=new Instrument($row['instrumentId'],$row['instrumentName'],$row['categoryId'],$row['categoryName']);
			$instrList[]=$instr;
		}
		DbUtility::freeMemoryAfterQuery ( $query );
		DbUtility::disconnectFromDB ( $dbConn );
		return $instrList;
		
	}
	
	//Get the instrument infos from the database
	public function getInstrumentData($instrId){
		$instrInfo;
		$dbConn = DbUtility::connectToDB ( $this->db['HOST'], $this->db['USER'], $this->db['PASSWORD'], $this->db['DB'] );
		$queryText = "SELECT * FROM `instrument` INNER JOIN category ON category=categoryName INNER JOIN info ON info=infoId WHERE instrumentId=".$instrId."";
		$query = DbUtility::queryToDB ( $dbConn, $queryText );
		while ( $row = mysqli_fetch_array ( $query ) ){
			$instrInfo=new Instrument($row['instrumentId'],$row['instrumentName'],$row['categoryId'],$row['categoryName']);
			//$desc, $rec, $eq, $comp, $gate, $banner
			$instrInfo->setIstrInfo($row['infoDescription'],$row['infoRecording'],$row['infoEq'],$row['infoCompression'],$row['infoGate'],$row['banner']);
// 			$instrList[]=$instr;
		}
		DbUtility::freeMemoryAfterQuery ( $query );
		DbUtility::disconnectFromDB ( $dbConn );
		return $instrInfo;
	
	}
	
	public function classTester(){
		return $this->db['HOST']; 
	}

}
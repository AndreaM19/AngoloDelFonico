<?php
class Instrument{

	private $instrId;
	private $instrName;
	private $category;
	private $info=NULL;

	public function __construct($id, $name, $catId, $catName){
		$this->instrId=$id;
		$this->instrName=$name;
		$this->category=new Category($catId, $catName);
	}

	public function getInstrId(){
		return $this->instrId;
	}

	public function getInstrName(){
		return $this->instrName;
	}
	
	public function getInstrCat(){
		return $this->category;
	}
	
	public function setIstrInfo($desc, $rec, $eq, $comp, $gate, $banner){
		$this->info=new InstrumentInfo($desc, $rec, $eq, $comp, $gate, $banner);
	}
	
	public function getInstrInfo(){
		return $this->info;
	}
}
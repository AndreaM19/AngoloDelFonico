<?php
class Category{
	
	private $catId;
	private $catName;
	
	public function __construct($id, $name){
		$this->catId=$id;
		$this->catName=$name;
	}
	
	public function getCatId(){
		return $this->catId;
	}
	
	public function getCatName(){
		return $this->catName;
	}
}
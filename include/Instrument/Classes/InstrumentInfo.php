<?php
class InstrumentInfo{

	private $instrDescription;
	private $instrRecording;
	private $instrEq;
	private $instrCompression;
	private $instrGate;
	private $banner;
	
	public function __construct($desc, $rec, $eq, $comp, $gate, $banner){
		$this->instrDescription=$desc;
		$this->instrRecording=$rec;
		$this->instrEq=$eq;
		$this->instrCompression=$comp;
		$this->instrGate=$gate;
		$this->banner=$banner;
	}
	
	public function getInstrDescription(){
		return $this->instrDescription;
	}
	
	public function getInstrRecording(){
		return $this->instrRecording;
	}
	
	public function getInstrEq(){
		return $this->instrEq;
	}
	
	public function getInstrCompression(){
		return $this->instrCompression;
	}
	
	public function getInstrGate(){
		return $this->instrGate;
	}
	
	public function getBanner(){
		return $this->banner;
	}
}
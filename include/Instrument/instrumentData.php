<?php
$instrId=$_GET['instrId'];
$dataGetter=new InstrumentDataGetter();
$instrInfo=$dataGetter->getInstrumentData($instrId);

echo "<p>".$instrInfo->getInstrInfo()->getInstrDescription()."</p>";
?>
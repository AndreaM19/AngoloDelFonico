<?php
$instrId=$_GET['instrId'];
$dataGetter=new InstrumentDataGetter();
$instrInfo=$dataGetter->getInstrumentData($instrId);


echo "<h2>".$instrInfo->getInstrName()."</h2><br>";

echo "<h4>Descrizione:</h4>";
echo "<p>".$instrInfo->getInstrInfo()->getInstrDescription()."</p><br>";

echo "<h4>Tecniche di ripresa:</h4>";
echo "<p>".$instrInfo->getInstrInfo()->getInstrRecording()."</p><br>";

echo "<h4>Equalizzazione:</h4>";
echo "<p>".$instrInfo->getInstrInfo()->getInstrEq()."</p><br>";

echo "<h4>Compressione:</h4>";
echo "<p>".$instrInfo->getInstrInfo()->getInstrCompression()."</p><br>";

echo "<h4>Gate:</h4>";
echo "<p>".$instrInfo->getInstrInfo()->getInstrGate()."</p>";
?>

<script type="text/javascript">
var path='img/instruments/<?php echo $instrInfo->getInstrInfo()->getbanner() ?>.jpg';
$('#banner').attr('src', path);
</script>
<?php 
$catId=$_GET['cat'];
$dataGetter=new InstrumentDataGetter();
$instrList=$dataGetter->getInstrument($catId);

foreach ($instrList as $key => $value) {
	?>
	<a href="instruments.php?loc=instr&action=showInstrData&instrId=<?php echo $value->getInstrId()?>">
	 	<div class="col-md-6">
	       	<div class="instrument-category">
	       	<?php
	       		echo "<h3>" . $value->getInstrName() . "</h3>";
	       	?>
			</div>
 		</div>
 	</a>
	<?php 
}
?>

<h2>Lista degli strumenti</h2>
<h4>Naviga tra gli strumenti e scoprine tutti i segreti!!</h4>
<br>

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

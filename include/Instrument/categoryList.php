<h2>Lista degli strumenti</h2>
<h4>Naviga tra gli strumenti e scoprine tutti i segreti!!</h4>
<br>

<?php 
$dataGetter=new InstrumentDataGetter();
$catList=$dataGetter->getCategory();

foreach ($catList as $key => $value) {
	?>
	<a href="instruments.php?loc=instr&action=showInstr&cat=<?php echo $value->getCatId()?>">
	 	<div class="col-md-6">
	       	<div class="instrument-category">
	       	<?php
	       		echo "<h3>" . $value->getCatName() . "</h3>";
	       	?>
			</div>
 		</div>
 	</a>
	<?php 
}
?>

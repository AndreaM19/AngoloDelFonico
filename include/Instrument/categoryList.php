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

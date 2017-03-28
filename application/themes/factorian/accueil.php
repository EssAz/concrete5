<?php $view->inc('elements/header.php'); ?>


<?php 
$a=new Area('Slide');
$a->display($c);
?>

<div class="col-md-8 col-md-offset-2 group1">
	<div class="col-md-4 colBloc">
		<?php 
		$a=new Area('Col1');
		$a->display($c);
		?>
	</div>
	<div class="col-md-4 colBloc">
		<?php 
		$a=new Area('Col2');
		$a->display($c);
		?>
	</div>
	<div class="col-md-4 colBloc">
		<?php 
		$a=new Area('Col3');
		$a->display($c);
		?>
	</div>
</div>

<div id="bandeauContact" class="row col-md-12">
	<?php 
	$a=new Area('CTA');
	$a->enableGridContainer();
	$a->display($c);
	?>
</div>

<label class="col-md-12" id="labelExemple">We do awesome works for our clients.<br>Check some of our works.</label>
<div class="col-md-8 col-md-offset-2 row group1">
	
		<?php 
		$a=new Area('Col4');
		$a->enableGridContainer();
		$a->display($c);
		?>
	
	</div>
	<a href="#" id="labelExemple" class="col-md-12">View all works</a>


<?php $view->inc('elements/footer.php'); ?>
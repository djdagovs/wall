<?php include 'inc/header.html'; ?>
<?php include 'inc/nav.html'; ?>
<?php include 'core/functions.php';?>
		<hr>
		
    	<div class="row">

    	<div class="col-md-12">

    	<!-- add subcategory if category contains any -->

    	<?php
        $zmienna = ""; //test jeżeli $zmienna jest pusta wyświetla if'a

    		if(empty($zmienna)){
    			echo "<ol class='breadcrumb text-center'>
  <li><a href='#'>10mm</a></li>
  <li><a href='#'>20mm</a></li>
  <li><a href='#'>30mm</a></li>
  <li><a href='#'>50mm</a></li>
  <li><a href='#'>100mm</a></li>";
    		}else{
    			echo "";
    		}
    	?>
    	</div>

    	<div class="col-md-2 col-sm-12">
    		
    		<div class="list-group">
    			<?php show_cat_btn(); ?>
			</div>

    	</div>
    	
		<div class='col-md-5 col-sm-6 col-xs-12'>
			
			    <a href="#"><img  class='img-responsive center-block' src="http://majsterpol.eu/media/djcatalog2/images/item/0/silicone-plaster_f.png" width="400" height="400"></a>
			    <hr>
			    <div class='pull-left'><b>PRIMERS</b> SILICONE</div>
			    <div class='pull-right'><a href="#" class='btn btn-danger btn-xs' role='button'>More info</a></div><br />
			
		</div>

		<div class='col-md-5 col-sm-6 col-xs-12'>
			
			   <a href="#"><img class='img-responsive center-block' src="http://majsterpol.eu/media/djcatalog2/images/item/0/sisi-plaster_f.png" width="400" height="400"></a>
			   <hr>
			    <div class='pull-left'><b>PRIMERS</b> SISI</div>
			    <div class='pull-right'><a href="#" class='btn btn-danger btn-xs' role='button'>More info</a></div><br />
			
		</div>
</div>

    
	</div>





<?php include 'inc/footer.php'; ?>
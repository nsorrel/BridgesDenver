<section id="intro" class="intro-section">

	<div class="container">
	
		<div class="row">
			<div class="">

			<!--
	<?php echo kirbytext($data->text()) ?>
				
				<?php echo html($data->title()) ?>
				<?php echo kirbytext($data->image()) ?>
			
-->
				
				<div class="org">
				 	<div class="inline"> <?php echo kirbytext($data->org()) ?></div>
				 	<div class="inline"> <h1>&nbsp;|&nbsp;</h1> </div>  
				 	<div class="inline"> <?php echo kirbytext($data->orglocation()) ?></div>
				</div>
				<div class="tagline">
				 <?php echo kirbytext($data->tagline()) ?>
				</div>
				
				
				  <?php foreach($data->children()->children()->visible() as $children): ?>
				
				  <div class="banner">
				
				    <figure>
				
				     <img src="<?php echo $children->images()->first()->url() ?>" alt="<?php echo $children->images()->first()->caption() ?> " >
				
				    </figure>
				
				  </div>
				
				  <?php endforeach ?>
				
				
				
				
				

			
			</div>
		
		</div>

		<div class="page-scroll">
			
			<a href="#about" class="scroll-btn">
				<i class="fa fa-chevron-down"></i>
			</a>
		
		</div><!-- end row -->

	</div><!-- end container -->

</section>
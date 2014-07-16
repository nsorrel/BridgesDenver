<section id="staff" class="staff-section">	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php echo kirbytext($data->text()) ?>
				
				<div class="row">
					
					<?php foreach($data->children()->visible() as $staff): ?>
 					<div class="col-sm-6 col-md-4 staff">
	
						<div id="<?php echo $staff->images()->first()->title() ?>" class="staff, <?php echo $i ?>">
							<!--
<div id="" class="staff-summary">
							 	<?php echo html($staff->summary()) ?>
							</div>
-->
							
							<a href="#" onclick="return false;" class="picinfo" title="<?php echo $staff->images()->first()->caption() ?>">												
								<img src="<?php echo $staff->images()->first()->url() ?>" class="img-responsive"  />
							</a>
							<?php if ($staff->summary() !=""): ?>

							<h3>	
								<?php echo html($staff->title()) ?>
							</h3>

							<?php else : ?>

							<h3>
								<?php echo html($staff->title()) ?>
							</h3>

							<?php endif ?>
						
						</div>
			
					</div><!-- end col -->
				
				<?php endforeach ?>
				
				</div><!-- end row -->
			
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->

</section>

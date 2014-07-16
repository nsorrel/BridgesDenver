<section id="events" class="events-section">	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo kirbytext($data->text()) ?>
				
				<div class="row">
					
					<?php foreach($data->children()->visible() as $event): ?>
					
					<div class="col-sm-6 col-md-4 project">
	
						<div class="events">
							
								
	
								<?php if ($event->location() !=""): ?>
									<div class="graphic">
										<?php  snippet( 'map', array(
									    'address' => 'Denver International Airport, USA',
									    'zoom'    => 10,
									    'width'   => 350,
									    'height'  => 275
										));  ?>
								
															</div>
									<?php echo Kirbytext($event->title()) ?></a>
								
	
								<?php else : ?>
									<div class="placeholder">
									<i style="font-size: 5em;" class="fa <?php echo($event->icon());?>"></i>
									</div>
									<?php echo Kirbytext($event->title()) ?>
								
	
								<?php endif ?>
							
							<div class="info">
								<?php echo Kirbytext($event->info()) ?>
							</div>
						
						</div>
			
					</div><!-- end col -->
				
				<?php endforeach ?>
				
				</div><!-- end row -->
			
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->

</section>

<section id="portfolio" class="portfolio-section">	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php echo kirbytext($data->text()) ?>
				
				<div class="row">
					
					<?php foreach($data->children()->visible() as $project): ?>
					
					<div class="col-sm-6 col-md-4 project">
	
						<div class="project">

							<a href="<?php echo $project->images()->first()->url() ?>" class="popup" title="Zoom">												
								<img src="<?php echo $project->images()->first()->url() ?>" class="img-responsive">
							</a>

							<?php if ($project->link() !=""): ?>

							<h3>
								<a href="<?php echo html($project->link()) ?>" title="Launch Website" target="_blank">
								<?php echo html($project->title()) ?></a>
							</h3>

							<?php else : ?>

							<h3>
								<?php echo html($project->title()) ?>
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

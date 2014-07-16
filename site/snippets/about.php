<section id="about" class="about-section">

	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<?php echo kirbytext($data->text()) ?>

				<?php if ($data->email() !="") : ?>
					<hr>
					
					<a href="mailto:<?php echo html($data->email()) ?>">
						<i style="font-size: 2em;" class="fa fa-envelope"></i>
					</a>
					
					
					
					

				<?php endif ?>

			</div>
		</div>

	</div><!-- end container -->

</section>
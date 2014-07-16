<section id="contact" class="contact-section">
	
	<div class="container body-section">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<?php echo kirbytext($data->text()) ?>

				<?php if ($data->email() !="") : ?>

					<a href="mailto:<?php echo html($data->email()) ?>">
						<p class="email"><?php echo html($data->email()) ?></p>
					</a>

				<?php endif ?>

				<hr>

				<div class="social">
				
					<?php if ($data->twitter() !="") : ?>

						<a href="<?php echo html($data->twitter()) ?>">
							<i class="fa fa-twitter"></i>
						</a>

					<?php endif ?>

					<?php if ($data->google() !="") : ?>

						<a href="<?php echo html($data->google()) ?>">
							<i class="fa fa-google-plus"></i>
						</a>

					<?php endif ?>

					<?php if ($data->facebook() !="") : ?>

						<a href="<?php echo html($data->facebook()) ?>">
							<i class="fa fa-facebook"></i>
						</a>

					<?php endif ?>

					<?php if ($data->linkedin() !="") : ?>

						<a href="<?php echo html($data->linkedin()) ?>">
							<i class="fa fa-linkedin"></i>
						</a>

					<?php endif ?>

					<?php if ($data->dribbble() !="") : ?>

						<a href="<?php echo html($data->dribbble()) ?>">
							<i class="fa fa-dribbble"></i>
						</a>

					<?php endif ?>

				</div><!-- end social -->
			</div><!-- end col -->
		</div><!-- end row -->
		
	</div><!-- end container -->

</section>


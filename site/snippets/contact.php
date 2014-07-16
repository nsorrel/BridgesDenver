<section id="contact" class="contact-section">
	
	<div class="container body-section">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?php if ($data->email() !="") : ?>
				<h2><?php echo kirbytext($data->title()) ?></h2><a href="mailto:<?php echo html($data->email()) ?>">
						<i class="fa fa-envelope"></i>
					</a>

				
					
					
					<hr>
					<!--
<a href="mailto:<?php echo html($data->email()) ?>">
						<p class="email"><?php echo html($data->email()) ?></p>
					</a>
-->
					
					<!--
<div class="graphic">
										<?php  snippet( 'map', array(
									    'address' => 'University of Denver, USA',
									    'address' => 'Auraria Campus, USA',
									    'zoom'    => 4,
									    'width'   => 1000,
									    'height'  => 275
										));  ?>
								
															</div>
-->
					

				<?php endif ?>

				<form id="smart-submit" class="contact-section-form" action="<?= url('smart-submit') ?>?email-us.php">
					First Name: <input type="text" name="first_name"><br>
					Last Name: <input type="text" name="last_name"><br>
					Email: <input type="text" name="email"><br>
					Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
						<input class="btn-alert" type="submit" name="submit" value="Submit">
				</form>

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

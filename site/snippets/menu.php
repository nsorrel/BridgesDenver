<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

<div class="container">
	
	<div class="navbar-header page-scroll">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-main">
		<span class="sr-only">Botón navegación</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
		<?php if ($page->isHomePage()) : ?>	
	
			<a class="navbar-brand" href="#page-top"><?php echo html($site->title()) ?></a>

		<?php else : ?>
	
			<a class="navbar-brand" href="<?php echo $site->url(); ?>"><?php echo html($site->title()) ?></a>

		<?php endif ?>
		
	</div>

	<div class="collapse navbar-collapse" id="navbar-main">

		<ul class="nav navbar-nav navbar-right">
			<li class="hidden"><a href="#page-top"></a></li>

			<?php if ($page->isHomePage()) : ?>
	
				<?php foreach($pages->visible()->not('intro') as $section): ?>

				<li class="page-scroll">
					<a href="#<?php echo $section->uid() ?>"><?php echo html($section->title()) ?></a>
				</li>

				<?php endforeach ?>

			<?php else : ?>

				<?php foreach($pages->visible()->not('intro') as $section): ?>

				<li class="page-scroll">
					<a href="/#<?php echo $section->uid() ?>"><?php echo html($section->title()) ?></a>
				</li>

				<?php endforeach ?>

			<?php endif ?>

		</ul>

	</div>

</div><!-- end container -->

</nav>
<?php snippet('header') ?>

<?php snippet('menu') ?>

<?php snippet('submenu') ?>

<main id="content" class="site-main" role="main">

<div class="container">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo html($page->text()) ?>
  </article>

</div>

</main>

<?php snippet('footer') ?>
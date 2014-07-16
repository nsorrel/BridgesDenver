<?php snippet('header') ?>

<?php snippet('menu') ?>

<main id="content" class="site-main" role="main">

<div class="container">

    <h1><?php echo html($page->title()) ?></h1>
    <?php echo html($page->text()) ?>

</div>

</main>

<?php snippet('footer') ?>
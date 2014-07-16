<?php 

snippet('header');

snippet('menu');

?>

<?php 

foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));
}

?>

<?php

snippet('footer');

?>
<?php
echo page('artikel')->children()->visible()->flip()->limit(10)->feed(array(
  'title'       => $page->title(),
  'description' => $page->description()
));
?>

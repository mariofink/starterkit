<?php
$postDate = $article->date("Y-m-d");
setlocale(LC_TIME, "de_DE");
$myDate = utf8_encode(strftime("%e. %B %G", $article->date()));
?>
<p class="published">
    Veröffentlicht am <time datetime="<?php echo $postDate; ?>" pubdate><?php echo $myDate ?></time>
</p>
<?php snippet('header') ?>

<?php
if ($site->uri == "code/css3-box-shadow-fuer-internet-explorer-6-8") {
    go ("http://mariofink.de/artikel/css3-box-shadow-fuer-internet-explorer-6-8");
}
$random = $pages->find('artikel')->children()->shuffle()->limit(5);
?>

    <section>
        <article class="post">
            <h1 class="post-title"><?php echo html($page->title()) ?></h1>
            <?php echo kirbytext($page->text()) ?>
            <ul>
                <?php foreach($random as $post): ?>
                    <li>
                        <a href="<?php echo $post->url() ?>"><?php echo $post->title() ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </article>
    </section>

<?php snippet('footer') ?>
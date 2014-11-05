<?php snippet('header') ?>

<?php
    $articles = $page->children()->visible()->flip()->paginate(5);
?>

    <section>

        <?php foreach($articles as $article): ?>
            <article class="post">
                <?php if($article->subtitle()): ?>
                    <h1 class="post-title has-subtitle"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
                    <h2 class="post-sub-title"><?php echo html($article->subtitle()) ?></h2>
                <?php else: ?>
                    <h1 class="post-title"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
                <?php endif ?>
                <?php echo kirbytext($article->text()) ?>
                <?php snippet('postmeta', array('article' => $article)); ?>
            </article>
            <hr class="post-separator">
        <?php endforeach ?>

        <?php if($articles->pagination()->hasPages()): ?>
            <nav class="post pagination">
                <ul>
                    <?php if($articles->pagination()->hasPrevPage()): ?>
                        <li><a class="next" href="<?php echo $articles->pagination()->prevPageURL() ?>">&#9664; <span>Neuere Artikel</span></a></li>
                    <?php endif ?>
                    <?php if($articles->pagination()->hasNextPage()): ?>
                        <li><a class="prev" href="<?php echo $articles->pagination()->nextPageURL() ?>"><span>&Auml;ltere Artikel</span> &#9654;</a></li>
                    <?php endif ?>
                </ul>
            </nav>
        <?php endif ?>

    </section>

<?php snippet('footer') ?>
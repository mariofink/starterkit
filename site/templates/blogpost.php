<?php snippet('header') ?>

    <section>
        <article class="post">

            <?php if($page->subtitle()): ?>
                <h1 class="post-title has-subtitle"><?php echo html($page->title()) ?></h1>
                <h2 class="post-sub-title"><?php echo html($page->subtitle()) ?></h2>
                <?php else: ?>
                <h1 class="post-title"><?php echo html($page->title()) ?></h1>
            <?php endif ?>
            <?php echo kirbytext($page->text()) ?>
            <?php snippet('postmeta', array('article' => $page)); ?>
        </article>
    </section>

<?php snippet('footer') ?>
<?php snippet('header') ?>

    <section>
        <article class="post">
            <h1 class="post-title"><?php echo html($page->title()) ?></h1>
            <?php echo kirbytext($page->text()) ?>
        </article>
    </section>

<?php snippet('footer') ?>
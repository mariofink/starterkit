<?php snippet('header') ?>

<?php $latestPost = $pages->find("artikel")->children()->visible()->last(); ?>

    <section>
        <article class="post">
            <?php echo kirbytext($page->text()) ?>

            <?php if($latestPost->subtitle()): ?>
                <h2 class="post-title has-subtitle"><?php echo html($latestPost->title()) ?></h2>
                <h3 class="post-sub-title"><?php echo html($latestPost->subtitle()) ?></h3>
            <?php else: ?>
                <h2 class="post-title"><?php echo html($latestPost->title()) ?></h2>
            <?php endif ?>


            <?php echo kirbytext($latestPost->text()) ?>
            <hr>
            <nav class="post pagination">
                <ul>
                    <li><a href='<?php echo $pages->find("artikel")->url()?>'>Weitere Beiträge</a></li>
                </ul>
            </nav>

        </article>

    </section>

<?php snippet('footer') ?>
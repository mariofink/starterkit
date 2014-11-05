<?php
$query = get('q');
$results = $site->search(get('q'));
?>


<?php snippet('header') ?>
    <section>
        <article class="post">
        <h1>Suche nach: <?php echo $query ?></h1>
        <?php if($results): ?>
            <ul>
                <?php foreach($results as $result): ?>
                    <li><a href="<?php echo $result->url() ?>"><?php echo $result->title() ?></a></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
        </article>
    </section>
<?php snippet('footer') ?>

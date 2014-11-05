<?php
//$searchquery = $site->uri()->query('q');
$searchquery = "query";
?>

<form action="<?php echo url() ?>suche" id="searchform">
    <input id="searchterm" type="text" placeholder="Suchen…" name="q" value="<?php echo $searchquery; ?>" />
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery/jquery-1.10.2.min.js"><\/script>')</script>

<?php echo js('assets/mf/scripts-built.js') ?>
<?php if($_SERVER['HTTP_HOST'] == "mariofink.de"): ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-13003749-1', 'auto');
  ga('send', 'pageview');

</script>
<?php endif ?>

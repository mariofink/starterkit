<?php

kirbytext::$tags['github'] = array(
  'attr' => array(
    'text'
  ),
  'html' => function($tag) {
    $githuburl = $tag->attr('github');
    $linktext = $tag->attr('text');
    return '<div class="github-link"><a href="' . $githuburl . '"><span class="icon icon-github"></span><span class="caption">' . $linktext . '</span></a></div>';
  }
);

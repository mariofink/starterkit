<?php if(!defined('KIRBY')) exit ?>

# Blog listing page

title: Page
pages:
  sort: flip
  template: blogpost
files: false
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large
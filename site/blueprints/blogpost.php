<?php if(!defined('KIRBY')) exit ?>

# blog post blueprint

title: Page
pages: false
files: true
fields:
  title: 
    label: Titel
    type:  text
  subtitle:
    label: Untertitel
    type:  text
  description: 
    label: Beschreibung (description metatag)
    type:  text
  date: 
    label: Datum
    type: date
    format: dd.mm.yy  
  text:
    label: Text
    type:  textarea
    size:  large
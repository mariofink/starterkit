<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

c::set('cache', false);
c::set('cache.autoupdate', true);
c::set('cache.data', true);
c::set('cache.html', true);
c::set('cache.ignore', array('sitemap'));

<?php

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

/** @var $blade \Illuminate\View\Factory */
echo $blade->make('tags.index', [])->render();

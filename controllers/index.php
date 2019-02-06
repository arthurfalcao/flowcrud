<?php

$contacts = $app['database']->selectAll('contacts');

require 'views/index.view.php';
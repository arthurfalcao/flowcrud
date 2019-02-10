<?php

$router->get('', 'ContactController@index');
$router->post('contacts', 'ContactController@store');
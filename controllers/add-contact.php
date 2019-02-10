<?php

$app['database']->insert('contacts', [
    'name' => $_POST['name'],
    'email' => 'arthur.falcao@zage.com.br',
    'fone' => '12312889'
]);

header('Location: /');
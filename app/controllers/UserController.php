<?php

require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../dao/UserDao.php";
require_once __DIR__ . "/../services/Connection.php";

class UserController {

    public function __construct() {}

    public function add($user) {
        $user = (new User($user['name'], $user['email'], $user['city'], $user['uf']))
            ->setPassword($user['password']);

        $dao = new UserDao(Connection::getConnection());
        $dao->add($user);
    }
}
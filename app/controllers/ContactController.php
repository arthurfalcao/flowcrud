<?php

require_once __DIR__ . "/../models/Contact.php";
require_once __DIR__ . "/../dao/ContactDao.php";
require_once __DIR__ . "/../services/Connection.php";

class ContactController {

    public function __construct() {}

    public function add($contact) {
        $contact = new Contact($contact['name'], $contact['email'], $contact['fone']);

        $dao = new ContactDao(Connection::getConnection());
        $dao->add($contact);
    }
}
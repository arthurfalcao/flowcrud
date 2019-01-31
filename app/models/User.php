<?php

class User {

    private $id;
    private $name;
    private $email;
    private $password;
    private $city;
    private $uf;

    public function __construct($name, $email, $city, $uf) {
        $this->name = $name;
        $this->email = $email;
        $this->city = $city;
        $this->uf = $uf;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    public function getCity() {
        return $this->city;
    }

    public function getUf() {
        return $this->uf;
    }
}
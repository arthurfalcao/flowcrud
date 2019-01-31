<?php 

class Contact {

    private $id;
    private $name;
    private $email;
    private $fone;
    
    public function __construct(String $name, String $email, Int $fone) {
        $this->name = $name;
        $this->email = $email;
        $this->fone = $fone;
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

    public function getFone() {
        return $this->fone;
    }
}
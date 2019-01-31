<?php

class UserDao {

    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function listAll() {
        
        $users = [];

        $query = "SELECT id, name, email, city, uf FROM users ORDER BY id DESC";
        $stmt = $this->connection->query($query);

        while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($users, $user);
        }

        return $users;
    }

    public function get($id) {
        
        $query = "SELECT id, name, email, city, uf FROM users WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function add(User $user) {

        $query = "INSERT INTO users (name, email, password, city, uf) VALUES (:name, :email, :password, :city, :uf)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':name', $user->getName());
        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':password', $user->getPassword());
        $stmt->bindValue(':city', $user->getCity());
        $stmt->bindValue(':uf', $user->getUf());

        return $stmt->execute();
    }

    public function update(User $user) {
        
        $query = "UPDATE users SET name = :name, password = :password, city = :city, uf = :uf WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':name', $user->getName());
        $stmt->bindValue(':password', $user->getPassword());
        $stmt->bindValue(':city', $user->getCity());
        $stmt->bindValue(':uf', $user->getUf());
        $stmt->bindValue(':id', $user->getId());

        return $stmt-execute();
    }

    public function delete($id) {
        
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
}
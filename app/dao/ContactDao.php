<?php 

class ContactDao {

    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function listAll() {

        $contacts = [];

        $query = "SELECT id, name, email, fone FROM contacts ORDER BY id DESC";
        $stmt = $this->connection->query($query);

        while ($contact = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($contacts, $contact);
        }

        return $contacts;
    }

    public function get($id) {

        $query = "SELECT id, name, email, fone FROM contacts WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function add(Contact $contact) {

        $query = "INSERT INTO contacts (name, email, fone) VALUES (:name, :email, :fone)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':name', $contact->getName());
        $stmt->bindValue(':email', $contact->getEmail());
        $stmt->bindValue(':fone', $contact->getFone());

        return $stmt->execute();
    }

    public function update(Contact $contact) {

        $query = "UPDATE contacts SET name = :name, email = :email, fone = :fone WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':name', $contact->getName());
        $stmt->bindValue(':email', $contact->getEmail());
        $stmt->bindValue(':fone', $contact->getFone());
        $stmt->bindValue(':id', $contact->getId());

        return $stmt-execute();
    }

    public function delete($id) {

        $query = "DELETE FROM contacts WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
}
<?php

namespace app\dao;

use app\core\Connexion;
use app\model\Contact;
use Exception;
use PDO;
use PDOException;

class ContactDAO
{


    public function creatContact(Contact $contact): Contact {
        try {
            $query = "INSERT INTO contacts (photo, firstname, lastname, numero, email) 
                      VALUES (:photo, :firstname, :lastname, :numero, :email)";
    
            $stmt = Connexion::getInstance()->getConnexion()->prepare($query);
    

            $photo = $contact->getPhoto();
            $firstname = $contact->getFirstname();
            $lastname = $contact->getLastname();
            $numero = $contact->getNumero();
            $email = $contact->getEmail();

            $stmt->bindParam(':photo', $photo);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':email', $email);
    
            $stmt->execute();
    
            $contact->setId(Connexion::getInstance()->getConnexion()->lastInsertId());
    
            return $contact;
        } catch (PDOException $e) {
            
            error_log("Error creating contact: " . $e->getMessage()); 
            throw new Exception("Failed to create contact: " . $e->getMessage()); 
        }
    }




    public function deletContact(int $id): int
    {
        $query = "DELETE FROM contacts WHERE id = :id";
        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function updateContact(Contact $contact)
    {
        $query = "UPDATE contacts SET firstname = '"

            . $contact->getFirstname() . "', lastname = '"
            . $contact->getLastname() . "', email = '"
            . $contact->getEmail() . "', email = '"
            . $contact->getPhoto() . "', photo = '"

            . $contact->getNumero() . ";";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);
        $stmt->execute();

        return $contact;
    }


    public static function findContactById(int $id): Contact
    {
        $query = "SELECT * FROM contacts WHERE id = " . $id;

        $statement = Connexion::getInstance()->getConnection()->prepare($query);
        $statement->execute();

        return $statement->fetchObject(Contact::class);
    }

    
    public function getAllContacts(): array
    {
        try {

            $query = "SELECT * FROM contacts";

            $stmt = Connexion::getInstance()->getConnexion()->query($query);
            return $stmt->fetchAll(PDO::FETCH_CLASS, Contact::class);

        } catch (PDOException $e) {

            error_log("Database error: " . $e->getMessage());
            return [];
        }
    }

    public function countContacts(): int {
        try {
            $query = "SELECT COUNT(*) AS total FROM contacts";
            $stmt = Connexion::getInstance()->getConnexion()->query($query);
            
            $result = $stmt->fetchObject();
            
            return (int)$result->total; 
        } catch (PDOException $e) {
            error_log("Count error: " . $e->getMessage());
            return 0;
        }
    }

    
}

<?php

use app\Connexion;

class ContactDAO {



    public function creatContact (Contact $contact):Contact
    {
        $query = "INSERT INTO Contactify (photo, firstname, lastname, nemuro , email)
        VALUES ('".$contact->getPhoto()."','"
        .$contact->getLastname()."','"
        .$contact->getNemuro()."','"
        .$contact->getFirstname()."','"
        .$contact->getEmail().");";

        $stmt =Connexion::getInstance()->getConnexion()->prepare($query);
        $stmt->execute();

        $contact->setId(Connexion::getInstance()->getConnexion()->lastInsertId());

        return $contact ; 
    }

    public function deletContact(int $id):int
    {
        $query = "DELETE FROM Contactify WHERE id = :id"; 
        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);
        $stmt->bindParam(':id',$id);
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function updateContact(Contact $contact)
    {
        $query = "UPDATE Contactify SET firstname = '"

        . $contact->getFirstname() . "', lastname = '"
        . $contact->getLastname() . "', email = '"
        . $contact->getEmail() . "', email = '"
        . $contact->getPhoto() . "', photo = '"

        . $contact->getNemuro() . ";";

        $stmt = Connexion::getInstance()->getConnexion()->prepare($query);
        $stmt->execute();

        return $contact ; 
        
        
    }


    public static function findContactById(int $id): Contact
    {
       $query = "SELECT * FROM Contactify WHERE id = " . $id;
 
       $statement = Connexion::getInstance()->getConnection()->prepare($query);
       $statement->execute();
 
       return $statement->fetchObject(Contact::class);
    }

   
}
<?php

namespace app\controller;

use app\dao\ContactDAO;
use app\model\Contact;


class ContactController
{

    private ContactDAO $contactdao;

    public function __construct()
    {
        $this->contactdao = new ContactDAO();
    }


    public function addContact()
    {
        if (isset($_POST['submit'])) {

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $nemuro = $_POST['numero'];
            $photo = $_POST['photo'];

            // $photo = $_FILES['photo'];
            // $targetDir = "uploads/";
            // $targetFile = $targetDir . basename($photo["name"]);
            // move_uploaded_file($photo["tmp_name"], $targetFile);

            $contact = new Contact();

            $contact->setFirstname($firstname);
            $contact->setLastname($lastname);
            $contact->setEmail($email);
            $contact->setNumero($nemuro);
            $contact->setPhoto($photo);

            if ($this->contactdao->creatContact($contact)) {
                header("Location: contactsdashboard.php");


                exit();
            } else {
                echo "Error creating contact";
            }
        }
    }




    public function deleteContact(int $id) {
        if ($this->contactdao->deletContact($id)) {
            header("Location: contactsdashboard.php");
            exit();
        } else {
            echo "Error deleting contact";
        }
    }

    public function updateContact()
    {
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $firstname = $_POST['editfirstname'];
            $lastname = $_POST['editlastname'];
            $email = $_POST['editemail'];
            $photo = $_POST['editphoto'];
            $nemuro = $_POST['editnemuro'];

            $editcontact = new COntact();
            $editcontact->setFirstname($firstname);
            $editcontact->setLastname($lastname);
            $editcontact->setEmail($email);
            $editcontact->setPhoto($photo);
            $editcontact->setNumero($nemuro);

            if ($this->contactdao->updateContact($editcontact)) {
                header("Location: contactsdashboard.php");

                exit();
            } else {
                echo " eroror updating ";
            }
        }
    }

    
    public function getAllContacts(): array
    {
        return $this->contactdao->getAllContacts();
    }

    public function getContactsCount(): int {
        return $this->contactdao->countContacts();
    }

    
}

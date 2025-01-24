<?php

class Contact {


    private int $id ;
    private string $photo ; 
    private string $firstname ; 
    private string $lastname ; 
    private string $email ; 
    private string $numero ; 
    

    public function __construct()
    {
        
    }

    public function getId ()
    {
        return $this->id  ; 
    }
    public function getFirstname ()
    {
        return $this->firstname  ; 
    }
    public function getLastname()
    {
        return $this->lastname ; 
    }
    public function getEmail()
    {
        return $this->email ; 
    }
    public function getPhoto()
    {
        return $this->photo ; 
    }
    public function getNemuro()
    {
        return $this->numero ; 
    }

    public function setId ($id)
    {
         $this->id = $id  ; 
    }
    public function setFirstname ($firstname)
    {
         $this->firstname = $firstname ; 
    }
    public function setLastname($lastname)
    {
         $this->lastname = $lastname; 
    }
    public function setEmail($email)
    {
         $this->email = $email; 
    }
    public function setPhoto($photo)
    {
         $this->photo = $photo; 
    }
    public function setNumero($numero)
    {
         $this->numero = $numero; 
    }
    

    

}
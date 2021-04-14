<?php

class user {
   private $id;
    private $email;
    private $psw;
            

    function __construct($id,$email,$psw) {
        $this->id =$id;
        $this->email =$email;
         $this->psw =$psw;
    }
     function getId() {
        return $this->id;
    }
    function getEmail() {
        return $this->email;
    }
       function getPsw() {
        return $this->psw;
    }
   
    function setEmail($email) {
        $this->femail=$email;
    }
    function setId($id) {
        $this->id=$id;
    }
     function setPsw($psw) {
        $this->psw=$psw;
    }
}

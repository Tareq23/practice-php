<?php

namespace User;
use DB;
class Person extends DB{
    private $name;
    private $email;
    ///private $id;
    public function __construct($name,$email,$id)
    {
        $this->name = $name;
        $this->email = $email;
        $this->id = $id;
    }
    protected function showPersonInfo()
    {
       $data = array(
           'name' => $this->name,
           'email' => $this->email,
           'id' => $this->id
       );
       return $data;
    }
}


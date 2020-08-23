<?php


class ShowUser extends DB{
    public function showUsers()
    {
        $data = $this->connect()->prepare("select * from users");
         
    }
}







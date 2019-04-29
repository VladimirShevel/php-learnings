<?php


class Customer
{
    public $id;
    public $name;
    public $surname;
    public $email;

    public function __toString()
    {
         return 'Hello customer №' . $this->id;
        // TODO: Implement __toString() method.
    }


}
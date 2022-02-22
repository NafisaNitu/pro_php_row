<?php


namespace App\classes;


class User
{
    protected $name;
    protected $email;
    protected $password;
    protected $phone;
    protected $value;

    public function __construct($post=null)
    {
        if ($post)
        {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->password = $post['password'];
            $this->phone = $post['phone'];
            $this->value = $post;
        }
    }

    public function index()
    {
        return $this->value;
    }
}
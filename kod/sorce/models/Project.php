<?php


class Project
{
    private $name;
    private $email;
    private $description;
    private $image;
    private $phone;

    public function __construct($name,$email,$image,$phone,$description)
    {
        $this->name=$name;
        $this->email=$email;
        $this->image=$image;
        $this->phone=$phone;
        $this->description=$description;

    }

    public function getName(): string
    {
        return $this->name;
    }


    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }


    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email)
    {
        $this->email = $email;
    }


    public function getDescription():string
    {
        return $this->description;
    }


    public function setDescription(string $description)
    {
        $this->description = $description;
    }


    public function getImage():string
    {
        return $this->image;
    }


    public function setImage(string $image)
    {
        $this->image = $image;
    }


}
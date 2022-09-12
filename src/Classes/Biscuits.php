<?php

namespace BisquidsTin\Classes;

class Biscuit
{
    private $id;
    private $name;
    private $img;
    private $rdt;
    private $description;
    private $wikipedia;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Get the value of rdt
     */ 
    public function getRdt()
    {
        return $this->rdt;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of wikipedia
     */ 
    public function getWikipedia()
    {
        return $this->wikipedia;
    }
}
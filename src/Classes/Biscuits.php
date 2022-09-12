<?php

namespace BisquidsTin\Classes;

class Biscuits
{
    private $id;
    private $name;
    private $img;
    private $RDT;
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
    public function getRDT()
    {
        return $this->RDT;
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
<?php

namespace BisquidsTin\Classes;

class Biscuit
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
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of img
     */ 
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * Get the value of rdt
     */ 
    public function getRDT(): int
    {
        return $this->RDT;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get the value of wikipedia
     */ 
    public function getWikipedia(): string
    {
        return $this->wikipedia;
    }
}
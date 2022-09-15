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
    private $dunk;
    private $flunk;

   /**
    * Get the value of id
    *
    * @return integer
    */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

     /**
     * Get the value of img
     *
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

     /**
     * Get the value of RDT
     *
     * @return int
     */
    public function getRDT(): int
    {
        return $this->RDT;
    }

     /**
     * Get the value of desc
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

     /**
     * Get the value of wikipedia
     *
     * @return string
     */
    public function getWikipedia(): string
    {
        return $this->wikipedia;
    }

     /**
     * Get the value of dunk
     *
     * @return int
     */
    public function getDunk(): int
    {
        return $this->dunk;
    }

     /**
     * Get the value of flunk
     *
     * @return int
     */
    public function getFlunk(): int
    {
        return $this->flunk;
    }
}

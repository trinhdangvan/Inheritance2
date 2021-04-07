<?php
namespace Models;
class Product{
    private $name;
    private $price;
    public function __construct($name=NULL,$price=0)
    {
        $this->name=$name;
        $this->price=$price;
    }

    /**
     * @return mixed|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int|mixed
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param mixed|null $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}
<?php

class Parcel
{
    private $id;
    private $description;
    private $address;

    /**
     * Parcel constructor.
     * @param int $id
     * @param string $description
     * @param Address $address
     */
    public function __construct(int $id, string $description, Address $address)
    {
        $this->id = $id;
        $this->description = $description;
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
}
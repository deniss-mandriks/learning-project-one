<?php

class Address
{
    private $houseNumber;
    private $houseName;
    private $houseSecondName;
    private $street;
    private $town;
    private $postcode;
    private $county;
    private $country;

    /**
     * Address constructor.
     * @param $houseNumber
     * @param $houseName
     * @param $houseSecondName
     * @param $street
     * @param $town
     * @param $postcode
     * @param $county
     * @param $country
     */
    public function __construct(
        int $houseNumber = null,
        string $houseName = null,
        string $houseSecondName = null,
        string $street,
        string $town,
        string $postcode,
        string $county,
        string $country
    ) {
        $this->houseNumber = $houseNumber;
        $this->houseName = $houseName;
        $this->houseSecondName = $houseSecondName;
        $this->street = $street;
        $this->town = $town;
        $this->postcode = $postcode;
        $this->county = $county;
        $this->country = $country;
    }

    /**
     * @return int
     */
    public function getHouseNumber(): int
    {
        return $this->houseNumber;
    }

    /**
     * @return string
     */
    public function getHouseName(): string
    {
        return $this->houseName;
    }

    /**
     * @return string
     */
    public function getHouseSecondName(): string
    {
        return $this->houseSecondName;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @return string
     */
    public function getCounty(): string
    {
        return $this->county;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
}
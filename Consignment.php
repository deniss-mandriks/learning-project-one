<?php

class Consignment
{
    private $courier;
    private $parcel;
    private $consignmentNumber;

    /**
     * Consignment constructor.
     * @param CourierInterface $courier
     * @param Parcel $parcel
     */
    public function __construct(CourierInterface $courier, Parcel $parcel)
    {
        $this->courier = $courier;
        $this->parcel = $parcel;
        $this->consignmentNumber = $courier->generateConsignmentNumber();
    }

    /**
     * @return CourierInterface
     */
    public function getCourier(): CourierInterface
    {
        return $this->courier;
    }

    /**
     * @return Parcel
     */
    public function getParcel(): Parcel
    {
        return $this->parcel;
    }

    /**
     * @return string
     */
    public function getConsignmentNumber(): string
    {
        return $this->consignmentNumber;
    }
}
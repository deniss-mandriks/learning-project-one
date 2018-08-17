<?php

class CompanyBCourier implements CourierInterface
{
    private $id;
    private $name;

    /**
     * Courier constructor.
     * @param $id
     * @param $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function generateConsignmentNumber(): string
    {
        return uniqid("CompanyB");
    }

    public function sendList(array $consignmentList): void
    {
        echo "Courier Deliveries(Royal mail): {$this->getId()}, {$this->getName()} \n";
        foreach ($consignmentList as $consignment) {
            echo "    Consignment Parcel      : {$consignment->getParcel()->getId()}, {$consignment->getParcel()->getDescription()} \n";
            echo "      Parcel Tracking number: {$consignment->getConsignmentNumber()} \n";
            echo "      Address postcode      : {$consignment->getParcel()->getAddress()->getPostcode()} \n";
        }

        echo "\n\n\n";
    }
}
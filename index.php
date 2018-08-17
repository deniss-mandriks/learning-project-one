<?php

include "Address.php";
include "Batch.php";
include "Consignment.php";
include "Parcel.php";
include "CourierInterface.php";
include "Couriers\CompanyACourier.php";
include "Couriers\CompanyBCourier.php";


$addressHigh = new Address(
    12,
    null,
    null,
    "High Street",
    "HighTown",
    "AB12 3CD",
    "HighCounty",
    "HighCountry"
);

$addressLow = new Address(
    11,
    null,
    null,
    "Low Street",
    "LowTown",
    "AB12 3CD",
    "LowCounty",
    "LowCountry"
);

$courierA = new CompanyACourier(
    1,
    "John Doe"
);

$courierB = new CompanyBCourier(
    2,
    "Alex Wolf"
);


$parcelOne = new Parcel(1, "Parcel one", $addressHigh);
$parcelTwo = new Parcel(2, "Parcel two", $addressHigh);
$parcelThree = new Parcel(3, "Parcel three", $addressLow);
$parcelFour = new Parcel(4, "Parcel four", $addressLow);

$consignmentOne = new Consignment($courierA, $parcelOne);
$consignmentTwo = new Consignment($courierB, $parcelTwo);
$consignmentThree = new Consignment($courierA, $parcelThree);
$consignmentFour = new Consignment($courierB, $parcelFour);


$batch = new Batch();
$batch->addConsignment($consignmentOne);
$batch->addConsignment($consignmentTwo);
$batch->addConsignment($consignmentThree);
$batch->addConsignment($consignmentFour);
$batch->endBatch();
<?php

interface CourierInterface
{
    public function getId(): int;

    public function getName(): string;

    public function generateConsignmentNumber(): string;

    public function sendList(array $consignmentList): void;
}
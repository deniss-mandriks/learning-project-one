<?php

class Batch
{
    private $consignmentList = [];

    public function addConsignment(Consignment $consignment)
    {
        array_push($this->consignmentList, $consignment);
    }

    public function endBatch()
    {
        $this->sendListToCouriers();
    }

    private function groupByCourier(): array
    {
        $courierConsignmentList = [];

        foreach ($this->consignmentList as $consignment) {
            $courierId = $consignment->getCourier()->getId();

            if (!array_key_exists($courierId, $courierConsignmentList)) {
                $courierConsignmentList[$courierId] = [
                    'courier' => $consignment->getCourier(),
                    'consignments' => []
                ];
            }

            array_push($courierConsignmentList[$courierId]['consignments'], $consignment);
        }

        return $courierConsignmentList;
    }

    private function sendListToCouriers()
    {
        $courierConsignments = $this->groupByCourier();

        foreach ($courierConsignments as $courierConsignment) {
            $courierConsignment['courier']->sendList($courierConsignment['consignments']);
        }
    }
}
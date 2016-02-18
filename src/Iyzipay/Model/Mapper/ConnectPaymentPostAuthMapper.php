<?php

namespace Iyzipay\Model\Mapper;

use Iyzipay\Model\ConnectPaymentPostAuth;

class ConnectPaymentPostAuthMapper extends IyzipayResourceMapper
{
    public static function create()
    {
        return new ConnectPaymentPostAuthMapper();
    }

    public function map(ConnectPaymentPostAuth $postAuth, $jsonResult)
    {
        parent::map($postAuth, $jsonResult);

        if (isset($jsonResult->paymentId)) {
            $postAuth->setPaymentId($jsonResult->paymentId);
        }
        if (isset($jsonResult->price)) {
            $postAuth->setPrice($jsonResult->price);
        }
        if (isset($jsonResult->connectorName)) {
            $postAuth->setConnectorName($jsonResult->connectorName);
        }
        return $postAuth;
    }
}
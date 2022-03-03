<?php


namespace BaseLinkerNts\Enum;


class NtsResponseCode extends Enum
{
    public const Success = 0;
    public const ErrorProcessedData = 1;
    public const ErrorDataBase = 2;
    public const MissingOrderId = 11;
    public const CurrentOrderIdIsProcessed = 12;
    public const DuplicateOrderId = 13;
    public const NotFoundShop = 14;
    public const PaymentMethodIsNotDefined = 15;
    public const DeliveryMethodIsNotDefined = 16;
    public const VoucherIsNotDefined = 17;
    public const WrongQuantity = 18;
}
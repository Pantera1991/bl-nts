<?php


namespace BaseLinkerNts\Enum;


class NtsOrderShippingCode extends Enum
{
    public const INPOST_KURIER_POBRANIE_DARMOWA =  "26";
    public const INPOST_KURIER_POBRANIE =  "25";
    public const INPOST_KURIER =  "24";
    public const INPOST_PACZKOMAT =  "23";
    public const DHL =  "22";
    public const DHL_POBRANIE =  "20";
    public const DHL_POBRANIE_DARMOWA =  "21";
    public const PWR_KURIER = "27";
    public const PWR_POBRANIE = "28";
    public const PWR_POBRANIE_DARMOWE = "29";
    public const KURIER_DPD = "30";
    public const POCZTEX = "31";
    public const POCZTEX_POBRANIE = "32";
    public const POCZTEX_POBRANIE_DARMOWE = "33";
}
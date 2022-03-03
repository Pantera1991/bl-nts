<?php


namespace BaseLinkerNts\Enum;


class NtsOrderPaymentCode extends Enum
{
    public const GOTOWKA_PLN = "GPLN";
    public const KARTA_PLATNICZA = "POLCARD";
    public const POBRANIE_GOTOWKOWE = "Pobranie";
    public const PRZELEW_BANKOWY = "PR";
    public const PRZELEWY = "P24";
    public const DOTPAY = "DOTPAY";
    public const POBRANIE_INPOST = "PobranieI";
    public const PRZELEWY_ALLEGRO = "AP24";
    public const DOTPAY_ALLEGRO = "ADOTAP";
    public const PAYU_ALLEGRO = "APU";
    public const DOTPAY_EMP = "DOTPAY EMP";
    public const POBRANIE_CAC = "OW";
    const POCZTEX = "POCZTEX";
}
<?php


namespace BaseLinkerNts\Enum;


class EmpikDeliveryMethod extends Enum
{
    public const INPOST_PACZKOMAT = "Paczkomaty InPost";
    public const INPOST_KURIER = "KURIER";
    public const INPOST_KURIER_POBRANIE = "Kurier - płatność za pobraniem";
    public const POCZTEX_POBRANIE = "Pocztex - płatność za pobraniem";
    public const POCZTEX = "Pocztex";
}
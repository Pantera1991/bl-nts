<?php


namespace BaseLinkerNts\Enum;


class AllegroDeliveryMethod extends Enum
{
    public const APInPost = "Allegro Paczkomaty InPost";
    public const KInPost = "Kurier InPost";
    public const KInPostP = "Kurier InPost pobranie";
    public const KDhlP = "Kurier DHL pobranie";
    public const KDhl = "Kurier DHL";
    public const PocztexKurier = "Pocztex Kurier48";
    public const PocztexKurierPobranie = "Pocztex Kurier48 pobranie";
    public const AllegroKurierDpD = "Allegro Kurier DPD";
}
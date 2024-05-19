<?php
require_once 'config.php';
require_once 'molad.php';

class Year extends Molad
{
  public function shanim_pshutot($number_of_years)
  {
    $number_of_months = $number_of_years * 12;
    $this->moladim($number_of_months);
  }

  public function shanim_meuvarot($number_of_years)
  {
    $number_of_months = $number_of_years * 13;
    $this->moladim($number_of_months);
  }

  public static function shana_pshuta()
  {
    $shana = new Year();
    $shana->shanim_pshutot(1);
    return $shana;
  }

  public static function sheerit_shana_pshuta()
  {
    $sheerit = Year::shana_pshuta();
    $sheerit->sheerit();
    return $sheerit;
  }

  public static function shana_meuveret()
  {
    $shana = new Year();
    $shana->shanim_meuvarot(1);
    return $shana;
  }

  public static function sheerit_shana_meuveret()
  {
    $sheerit = Year::shana_meuveret();
    $sheerit->sheerit();
    return $sheerit;
  }

  public static function sheerit_machzor()
  {
    $meuvarot = Year::shana_meuveret();
    $meuvarot->multiply(7);
    $pshutot = Year::shana_pshuta();
    $pshutot->multiply(12);
    $meuvarot->add($pshutot);
    $meuvarot->sheerit();
    return $meuvarot;
  }
}
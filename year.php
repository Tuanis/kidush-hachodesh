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

  public static function molad_rosh_hashana ($year)
  {
    $have_passed = before_the_year($year);
    $machzorim = $have_passed['machzorim'];
    $meuvarot = $have_passed['meuvarot'];
    $pshutot = $have_passed['pshutot'];

    $is_year = $meuvarot + $pshutot;
    $is_machzor = $machzorim + 1;

    if ($is_year == YEARS_IN_MACHZOR)
    {
      $is_year = 1;
      $is_machzor++;
    }
    else
    {
      $is_year++;
    }

    $molad_rosh_hashana = Year::calculate_rosh_hashana($machzorim, $pshutot, $meuvarot);
    
    return $molad_rosh_hashana;
  }

  public static function calculate_rosh_hashana($machzorim, $pshutot, $meuvarot)
  {
    $sheerit_machzor = Year::sheerit_machzor();
    $sheerit_pshuta = Year::sheerit_shana_pshuta();
    $sheerit_meuveret = Year::sheerit_shana_meuveret();

    $sheerit_machzor->multiply($machzorim);
    $sheerit_pshuta->multiply($pshutot);
    $sheerit_meuveret->multiply($meuvarot);
  
    $first_molad = new Molad(2, 5, 204); // baharad
  
    $first_molad->add($sheerit_machzor);
    $first_molad->add($sheerit_pshuta);
    $first_molad->add($sheerit_meuveret);
    
    $first_molad->announced_molad();

    return $first_molad;
  }
}
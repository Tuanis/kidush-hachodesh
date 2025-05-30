<?php
  require_once 'molad.php';
  require_once 'year.php';
  
  $machzorim    = $_POST['machzorim'];
  $pshutot      = $_POST['pshutot'];
  $meuvarot     = $_POST['meuvarot'];
  $months2nisan = $_POST['months2nisan'];
  
  $sheerit_machzor  = Year::sheerit_machzor();
  $sheerit_pshuta   = Year::sheerit_shana_pshuta();
  $sheerit_meuveret = Year::sheerit_shana_meuveret();
  $sheerit_machzor->multiply($machzorim);
  $sheerit_pshuta->multiply($pshutot);
  $sheerit_meuveret->multiply($meuvarot);

  $first_molad      = new Molad(2, 5, 204);            // baharad

  $molad_rosh_hashana = Year::calculate_rosh_hashana($machzorim, $pshutot, $meuvarot);


  $months = new Molad();
  $months->moladim($months2nisan);

  $molad_rosh_hashana->add($months);
  $molad_rosh_hashana->announced_molad();

  $json = json_encode(
    array(
      'machzorim' => array(
        'days'     => $sheerit_machzor->days,
        'hours'    => $sheerit_machzor->hours,
        'chalakim' => $sheerit_machzor->chalakim,
      ),
      'pshutot' => array(
        'days'     => $sheerit_pshuta->days,
        'hours'    => $sheerit_pshuta->hours,
        'chalakim' => $sheerit_pshuta->chalakim,
      ),
      'meuvarot' => array(
        'days'     => $sheerit_meuveret->days,
        'hours'    => $sheerit_meuveret->hours,
        'chalakim' => $sheerit_meuveret->chalakim,
      ),
      'months2nisan' => array(
        'days'     => $months->days,
        'hours'    => $months->hours,
        'chalakim' => $months->chalakim,
      ),
      'total' => array(
        'days'     => $molad_rosh_hashana->days,
        'hours'    => $molad_rosh_hashana->hours,
        'chalakim' => $molad_rosh_hashana->chalakim,
      ),
      'translation' => $molad_rosh_hashana->translate(),
    )
  );

  print $json;

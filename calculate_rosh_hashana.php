<?php
  require_once 'molad.php';
  require_once 'year.php';
  
  $machzorim = $_POST['machzorim'];
  $pshutot   = $_POST['pshutot'];
  $meuvarot  = $_POST['meuvarot'];
  
  $sheerit_machzor  = Year::sheerit_machzor();
  $sheerit_pshuta   = Year::sheerit_shana_pshuta();
  $sheerit_meuveret = Year::sheerit_shana_meuveret();

  $sheerit_machzor->multiply($machzorim);
  $sheerit_pshuta->multiply($pshutot);
  $sheerit_meuveret->multiply($meuvarot);

  $first_molad = new Molad(2, 5, 204); // baharad

  $first_molad->add($sheerit_machzor);
  $first_molad->add($sheerit_pshuta);
  $first_molad->add($sheerit_meuveret);
  $first_molad->sheerit();

  $translation = $first_molad->translate();

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
      'total' => array(
        'days'     => $first_molad->days,
        'hours'    => $first_molad->hours,
        'chalakim' => $first_molad->chalakim,
      ),
      'translation' => $translation,
    )
  );

  echo $json;

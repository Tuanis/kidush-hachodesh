<?php
  require_once 'molad.php';
  
  $this_month_days     = $_POST['this_month_days'];
  $this_month_hours    = $_POST['this_month_hours'];
  $this_month_chalakim = $_POST['this_month_chalakim'];
  
  $molad = new Molad($this_month_days, $this_month_hours, $this_month_chalakim);
  $molad->next_molad();
  $molad->announced_molad();

  $translation = $molad->translate();

  $json = json_encode(
    array(
      'next_molad' => array(
        'days'     => $molad->days,
        'hours'    => $molad->hours,
        'chalakim' => $molad->chalakim,
      ),
      'translation' => $translation,
    )
  );

  echo $json;

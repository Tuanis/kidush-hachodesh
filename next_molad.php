<?php
  require_once('classes.php');
  
  $this_month_days     = $_POST['this_month_days'];
  $this_month_hours    = $_POST['this_month_hours'];
  $this_month_chalakim = $_POST['this_month_chalakim'];
  $sheerit_days        = $_POST['sheerit_days'];
  $sheerit_hours       = $_POST['sheerit_hours'];
  $sheerit_chalakim    = $_POST['sheerit_chalakim'];
  
  $molad = new Molad($this_month_days, $this_month_hours, $this_month_chalakim);
  $ib_tashtzag = new Molad($sheerit_days, $sheerit_hours, $sheerit_chalakim);

  $molad->add($ib_tashtzag);
  echo $molad;
?>

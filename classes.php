<?php
define('CHALAKIM_IN_HOUR', 1080);
define('DAYS_IN_MOLAD', 29);
define('HOURS_IN_MOLAD', 12);
define('CHALAKIM_IN_MOLAD', 793);
define('HOURS_IN_DAY', 24);
define('DAYS_IN_WEEK', 7);

class Molad {
  public function moladim($months) {
    $num_days = $months * DAYS_IN_MOLAD;
    $num_hours = $months * HOURS_IN_MOLAD;
    $num_chalakim = $months * CHALAKIM_IN_MOLAD;
    
    $moladim = array("months" => $months, "days" => $num_days, "hours" => $num_hours, "chalakim" => $num_chalakim); 
    return $this->adjust($moladim);
  }

  public function sum($moladim1, $moladim2)
  {
    $sum = array(
      "months"   => $moladim1['months']   + $moladim2['months'],
      "days"     => $moladim1['days']     + $moladim2['days'],
      "hours"    => $moladim1['hours']    + $moladim2['hours'],
      "chalakim" => $moladim1['chalakim'] + $moladim2['chalakim']
    );

    return $this->adjust($sum);
  }

  public function molad_days()
  {
   return DAYS_IN_MOLAD + (HOURS_IN_MOLAD + CHALAKIM_IN_MOLAD / CHALAKIM_IN_HOUR) / HOURS_IN_DAY; 
  }

  // group chalakim into hours, and hours into days
  private function adjust($moladim)
  {
    $moladim['hours'] += intdiv($moladim['chalakim'], CHALAKIM_IN_HOUR);
    $moladim['chalakim'] = $moladim['chalakim'] % CHALAKIM_IN_HOUR;

    $moladim['days'] += intdiv($moladim['hours'], HOURS_IN_DAY);
    $moladim['hours'] = $moladim['hours'] % HOURS_IN_DAY;

    return $moladim;
  }
}

class Sheerit {

  public function __construct()
  {
    global $ezmolad;
    $this->molad = $ezmolad;
  }
  public function sheerit($moladim) {
    unset($moladim['months']);
    $moladim['days'] = $moladim['days'] % DAYS_IN_WEEK;
    return $moladim;
  }
}

class Month {
  public function __construct()
  {
    global $ezmolad;
    global $ezsheerit;

    $this->molad   = $ezmolad;
    $this->sheerit = $ezsheerit;
  }

  public function chodashim($months) {
    return $this->molad->moladim($months);
  }

  public function sheerit_chodesh () {
    $moladim = $this->molad->moladim(1);
    return $this->sheerit->sheerit($moladim);    
  }
}

class Year {
  public function __construct()
  {
    global $ezsheerit;
    global $ezmonth;

    $this->sheerit = $ezsheerit;
    $this->month   = $ezmonth;
  }

  public function shanim_pshutot($years) {
    $months = $years * 12;
    return $this->month->chodashim($months);
  }

  public function shanim_meuvarot($years) {
    $months = $years * 13;
    return $this->month->chodashim($months);    
  }

  public function sheerit_shana_pshuta () {
    $moladim = $this->month->chodashim(12);
    return $this->sheerit->sheerit($moladim);    
  }

  public function sheerit_shana_meuveret () {
    $moladim = $this->month->chodashim(13);
    return $this->sheerit->sheerit($moladim);    
  }
}

$ezmolad   = new Molad();
$ezsheerit = new Sheerit();
$ezmonth   = new Month();
$ezyear    = new Year();
?>
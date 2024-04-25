<?php
define('CHALAKIM_IN_HOUR', 1080);
define('DAYS_IN_MOLAD', 29);
define('HOURS_IN_MOLAD', 12);
define('CHALAKIM_IN_MOLAD', 793);
define('HOURS_IN_DAY', 24);
define('DAYS_IN_WEEK', 7);
define('LEAP_YEARS', [3,6,8,11,14,17,19]); // the seven leap years in the cycle of 19

class Molad {
  public function moladim($months)
  {
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
  public function sheerit($moladim)
  {
    unset($moladim['months']);
    $moladim['days'] = $moladim['days'] % DAYS_IN_WEEK;
    return $moladim;
  }
}

class Month {
  private $molad;
  private $sheerit;

  public function __construct()
  {
    $this->molad   = new Molad();
    $this->sheerit = new Sheerit;
  }

  public function chodashim($months)
  {
    return $this->molad->moladim($months);
  }

  public function sheerit_chodesh()
  {
    $moladim = $this->molad->moladim(1);
    return $this->sheerit->sheerit($moladim);    
  }
}

class Machzor {
  private function get_machzor_info($year, $years_in_cycle)
  {
    $yearNumber = ($year % $years_in_cycle == 0) ? $years_in_cycle : ($year % $years_in_cycle);
    $machzor    = ($yearNumber == $years_in_cycle) ? intdiv($year, $years_in_cycle) : intdiv($year, $years_in_cycle) + 1;
    $lastYear   = $machzor * $years_in_cycle;
    $firstYear  = $lastYear - $years_in_cycle + 1;

    return [
        'machzor' => $machzor,
        'first'   => $firstYear,
        'last'    => $lastYear,
        'year'    => $yearNumber
    ];
  }

  public function get_machzor_katan_info($year)
  {
    return $this->get_machzor_info($year, 19);
  }

  public function get_machzor_gadol_info($year)
  {
    return $this->get_machzor_info($year, 28);
  }
}

class Year {
  private $sheerit;
  private $month;
  private $machzor;
  private $leap_years;

  public function __construct()
  {
    $this->sheerit    = new Sheerit;
    $this->month      = new Month;
    $this->machzor    = new Machzor;
    $this->leap_years = LEAP_YEARS;
  }

  public function shanim_pshutot($years)
  {
    $months = $years * 12;
    return $this->month->chodashim($months);
  }

  public function shanim_meuvarot($years)
  {
    $months = $years * 13;
    return $this->month->chodashim($months);    
  }

  public function sheerit_shana_pshuta()
  {
    $moladim = $this->month->chodashim(12);
    return $this->sheerit->sheerit($moladim);    
  }

  public function sheerit_shana_meuveret()
  {
    $moladim = $this->month->chodashim(13);
    return $this->sheerit->sheerit($moladim);    
  }

  public function is_meuveret($year)
  {
    $machzor_info = $this->machzor->get_machzor_katan_info($year);
    return in_array($machzor_info['year'], $this->leap_years);
  }
}

?>
<?php
require_once('config.php');

class Molad {
  public $days;
  public $hours;
  public $chalakim;

  public function __construct($days = 0, $hours = 0, $chalakim = 0) {
    $this->days = $days;
    $this->hours = $hours;
    $this->chalakim = $chalakim;

    $this->adjust();
  }

  public function moladim($months)
  {
    $this->days = $months * DAYS_IN_MOLAD;
    $this->hours = $months * HOURS_IN_MOLAD;
    $this->chalakim = $months * CHALAKIM_IN_MOLAD;

    $this->adjust();
  }

  // public function sum($moladim1, $moladim2)
  public function add($molad)
  {
    $this->days += $molad->days;
    $this->hours += $molad->hours;
    $this->chalakim += $molad->chalakim;

    $this->adjust();
  }

  // public function difference($moladim1, $moladim2)
  public function subtract($molad) // the molad passed in is assumed to be smaller
  {
    // instead of making sure the numbers in moladim1 are large enough by "borrowing",
    // convert days and hours to chalakim. The adjust function will later fix things
    $molad->chalakim += (($molad->days * HOURS_IN_DAY) + $molad->hours) * CHALAKIM_IN_HOUR;
    $molad->days = $molad->hours = 0;
    $this->chalakim += (($this->days * HOURS_IN_DAY) + $this->hours) * CHALAKIM_IN_HOUR;
    $this->days = $this->hours = 0;
    $this->chalakim -= $molad->chalakim;

    $this->adjust();
  }

  // group chalakim into hours, and hours into days
  // private function adjust($moladim)
  private function adjust()
  {
    $this->hours += intdiv($this->chalakim, CHALAKIM_IN_HOUR);
    $this->chalakim %= CHALAKIM_IN_HOUR;
    $this->days += intdiv($this->hours, HOURS_IN_DAY);
    $this->hours %= HOURS_IN_DAY;
  }

  public function sheerit()
  {
    $this->days %= DAYS_IN_WEEK;
  }

  public function __toString()
  {
    return "{$this->days}:{$this->hours}:{$this->chalakim}";
  }
}

// class Month {
//   private $molad;
//   private $sheerit;

//   public function __construct()
//   {
//     $this->molad   = new Molad();
//     $this->sheerit = new Sheerit;
//   }

//   public function chodashim($months)
//   {
//     return $this->molad->moladim($months);
//   }

//   public function sheerit_chodesh()
//   {
//     $moladim = $this->molad->moladim(1);
//     return $this->sheerit->sheerit($moladim);    
//   }
// }

// class Machzor {
//   private function get_machzor_info($year, $years_in_cycle)
//   {
//     $yearNumber = ($year % $years_in_cycle == 0) ? $years_in_cycle : ($year % $years_in_cycle);
//     $machzor    = ($yearNumber == $years_in_cycle) ? intdiv($year, $years_in_cycle) : intdiv($year, $years_in_cycle) + 1;
//     $lastYear   = $machzor * $years_in_cycle;
//     $firstYear  = $lastYear - $years_in_cycle + 1;

//     return [
//         'machzor' => $machzor,
//         'first'   => $firstYear,
//         'last'    => $lastYear,
//         'year'    => $yearNumber
//     ];
//   }

//   public function get_machzor_katan_info($year)
//   {
//     return $this->get_machzor_info($year, 19);
//   }

//   public function get_machzor_gadol_info($year)
//   {
//     return $this->get_machzor_info($year, 28);
//   }
// }

// class Year {
//   private $sheerit;
//   private $month;
//   private $machzor;
//   private $leap_years;

//   public function __construct()
//   {
//     $this->sheerit    = new Sheerit;
//     $this->month      = new Month;
//     $this->machzor    = new Machzor;
//     $this->leap_years = LEAP_YEARS;
//   }

//   public function shanim_pshutot($years)
//   {
//     $months = $years * 12;
//     return $this->month->chodashim($months);
//   }

//   public function shanim_meuvarot($years)
//   {
//     $months = $years * 13;
//     return $this->month->chodashim($months);    
//   }

//   public function sheerit_shana_pshuta()
//   {
//     $moladim = $this->month->chodashim(12);
//     return $this->sheerit->sheerit($moladim);    
//   }

//   public function sheerit_shana_meuveret()
//   {
//     $moladim = $this->month->chodashim(13);
//     return $this->sheerit->sheerit($moladim);    
//   }

//   public function is_meuveret($year)
//   {
//     $machzor_info = $this->machzor->get_machzor_katan_info($year);
//     return in_array($machzor_info['year'], $this->leap_years);
//   }
// }

?>
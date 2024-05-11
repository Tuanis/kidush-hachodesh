<?php
require_once('config.php');

class Molad {
  public $days;
  public $hours;
  public $chalakim;

  public function __construct($days = 0, $hours = 0, $chalakim = 0) {
    $this->days     = $days;
    $this->hours    = $hours;
    $this->chalakim = $chalakim;

    $this->adjust();
  }

  public function __toString()
  {
    return "{$this->days}:{$this->hours}:{$this->chalakim}";
  }

  public static function ib_tashtzag()
  {
    $molad = new Molad(DAYS_IN_MOLAD, HOURS_IN_MOLAD, CHALAKIM_IN_MOLAD);
    $molad->sheerit();
    return $molad;
  }

  // group chalakim into hours, and hours into days
  // private function adjust($moladim)
  private function adjust()
  {
    $this->hours    += intdiv($this->chalakim, CHALAKIM_IN_HOUR);
    $this->chalakim %= CHALAKIM_IN_HOUR;
    $this->days     += intdiv($this->hours, HOURS_IN_DAY);
    $this->hours    %= HOURS_IN_DAY;
  }

  // public function sum($moladim1, $moladim2)
  public function add($molad)
  {
    $this->days     += $molad->days;
    $this->hours    += $molad->hours;
    $this->chalakim += $molad->chalakim;

    $this->adjust();
  }

  public function subtract($molad) // the molad passed in is assumed to be smaller
  {
    // instead of making sure the numbers in moladim1 are large enough by "borrowing",
    // convert days and hours to chalakim. Then adjust function will later fix things
    $clone = clone $molad;
    $clone->chalakim += (($clone->days * HOURS_IN_DAY) + $clone->hours) * CHALAKIM_IN_HOUR;
    $clone->days      = $clone->hours = 0;

    $this->chalakim  += (($this->days * HOURS_IN_DAY) + $this->hours) * CHALAKIM_IN_HOUR;
    $this->days       = $this->hours  = 0;
    $this->chalakim  -= $clone->chalakim;

    $this->adjust();
  }

  public function multiply($factor)
  {
    // convert days and hours to chalakim. Then adjust function will later fix things
    $this->chalakim += (($this->days * HOURS_IN_DAY) + $this->hours) * CHALAKIM_IN_HOUR;
    $this->days      = $this->hours = 0;
    $this->chalakim  *= $factor;

    $this->adjust();
  }

  public function moladim($months)
  {
    $this->days     = $months * DAYS_IN_MOLAD;
    $this->hours    = $months * HOURS_IN_MOLAD;
    $this->chalakim = $months * CHALAKIM_IN_MOLAD;

    $this->adjust();
  }

  // remove days that form whole weeks
  // i.e. apply modulo 7
  public function sheerit()
  {
    $this->days %= DAYS_IN_WEEK;
  }

  public function next_molad()
  {
    $this->add($this->ib_tashtzag());
  }

  // this is what is announced on shabbos mevarchim "המולד יהיה"
  // basicallty, the same as the sheerit function,
  // but shabbos is 7 instead of 0
  public function announced_molad()
  {
    $this->sheerit();
    $this->days = (int)$this->days ?: DAYS_IN_WEEK;
  }

  public function translate()
  {
    return array(
      'day'      => $this->weekday($this->days),
      'hour'     => $this->real_time($this->hours, $this->chalakim),
      'chalakim' => $this->chalakim % CHALAKIM_IN_MINUTE
    );
  }

  private function weekday($day)
  {
    return match ($day) {
      1 => 'ראשון',
      2 => 'שני',
      3 => 'שלישי',
      4 => 'רביעי',
      5 => 'חמישי',
      6 => 'שישי',
      7 => 'שבת',
    };
  }

  private function real_time($hours, $chalakim)
  {
    $real_hour = ($hours + 18) % HOURS_IN_DAY; // because hours start from 6 pm
    $minutes   = (int) ($chalakim / CHALAKIM_IN_MINUTE);
    $am_pm     = $real_hour < 12 ? ' AM' : ' PM';
    $real_hour = $real_hour % 12 ?: 12;

    return $real_hour.":".($minutes < 10 ? ('0'.$minutes) : $minutes).' '.$am_pm;
  }
}
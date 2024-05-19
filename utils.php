<?php
require_once 'config.php';

function molad_days()
{
 return DAYS_IN_MOLAD + (HOURS_IN_MOLAD + CHALAKIM_IN_MOLAD / CHALAKIM_IN_HOUR) / HOURS_IN_DAY; 
}

function this_year()
{
  list(,,$this_year) = explode('/',jdtojewish(unixtojd()));
  return $this_year;
}

// return the number of machzorim, and years (pshutot and meuvarot) that have elapsed before the given year
function before_the_year($year)
{
  $year--; // since we want the info for last year

  $machzorim = (int) ($year / YEARS_IN_MACHZOR);
  $year %= YEARS_IN_MACHZOR;

  $meuvarot = 0;
  foreach (LEAP_YEARS as $leapYear)
  {
    if ($leapYear <= $year)
      $meuvarot++;
    else
      break;
  } 

  $pshutot = $year - $meuvarot;

  return array(
    'machzorim' => $machzorim,
    'meuvarot'  => $meuvarot,
    'pshutot'   => $pshutot
  );
}

function is_meuveret($year)
{
  $year %= YEARS_IN_MACHZOR;
  if ($year == 0)
    $year = YEARS_IN_MACHZOR; // might as well just return true

  foreach (LEAP_YEARS as $leapYear)
  {
    if ($leapYear == $year)
      return true;
  } 
 
  return false;
}

function is_pshuta($year)
{
  return !is_meuveret($year);
}

function most_recent_meuveret()
{
  $this_year = this_year();
  while (true)
  {
    if (is_meuveret($this_year))
      return $this_year;
    $this_year--;
  }
}

getJSConstants();
?>

<script type="text/javascript">
  function before_the_year(year)
  {
    year--; // since we want the info for last year

    let machzorim = Math.floor(year / YEARS_IN_MACHZOR);
    year %= YEARS_IN_MACHZOR;

    let meuvarot = 0;
    for (let leapYear of LEAP_YEARS)
    {
      if (leapYear <= year)
        meuvarot++;
      else
        break;
    }

    let pshutot = year - meuvarot;

    return {machzorim: machzorim, meuvarot: meuvarot, pshutot: pshutot};
  }
</script>
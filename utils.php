<?php
include_once('config.php');

function molad_days()
{
 return DAYS_IN_MOLAD + (HOURS_IN_MOLAD + CHALAKIM_IN_MOLAD / CHALAKIM_IN_HOUR) / HOURS_IN_DAY; 
}

function this_year()
{
  list(,,$this_year) = explode('/',jdtojewish(unixtojd()));
  return $this_year;
}



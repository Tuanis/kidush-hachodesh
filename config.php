<?php
define('CHALAKIM_IN_HOUR', 1080);
define('CHALAKIM_IN_MINUTE', 18); // 1080 / 60
define('DAYS_IN_MOLAD', 29);
define('HOURS_IN_MOLAD', 12);
define('CHALAKIM_IN_MOLAD', 793);
define('HOURS_IN_DAY', 24);
define('DAYS_IN_WEEK', 7);
define('YEARS_IN_MACHZOR', 19);
define('LEAP_YEARS', [3, 6, 8, 11, 14, 17, 19]); // the seven leap years in the cycle of 19

function getJSConstants()
{
  $constants = [
    'CHALAKIM_IN_HOUR'   => CHALAKIM_IN_HOUR,
    'CHALAKIM_IN_MINUTE' => CHALAKIM_IN_MINUTE,
    'DAYS_IN_MOLAD'      => DAYS_IN_MOLAD,
    'HOURS_IN_MOLAD'     => HOURS_IN_MOLAD,
    'CHALAKIM_IN_MOLAD'  => CHALAKIM_IN_MOLAD,
    'HOURS_IN_DAY'       => HOURS_IN_DAY,
    'DAYS_IN_WEEK'       => DAYS_IN_WEEK,
    'YEARS_IN_MACHZOR'   => YEARS_IN_MACHZOR,
    'LEAP_YEARS'         => json_encode(LEAP_YEARS),
  ];

  print '<script>';
  foreach ($constants as $key => $value)
    print 'const ' . $key . ' = ' . $value . ';';
  print '</script>';
}
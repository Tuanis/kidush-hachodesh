<!DOCTYPE html>
<html>

<head>
<?php
  $title = 'קידוש החודש'. '&nbsp;|&nbsp;' .'חשבונות';
  include('header.php');
?>
</head>
<body lang="he_IL" dir="rtl">
  <?php
    require_once('classes.php');
    require_once('utils.php');

    $ezmolad   = new Molad();
  ?>
  <table class="table table-bordered table-striped w-auto">
    <thead>
      <tr>
        <th>שארית</th>
        <th>ימים</th>
        <th>שעות</th>
        <th>חלקים</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sheerit_machzor = $ezsheerit->sheerit($total);
    ?>
    <tr>
      <td>שארית מחזור</td>
      <td><?= $sheerit_machzor['days']; ?></td>
      <td><?= $sheerit_machzor['hours']; ?></td>
      <td><?= $sheerit_machzor['chalakim']; ?></td>
      <td>בי"ו תקצ"ה</td>
    </tr>
    </tbody>
  </table>

  <?php
    $this_year = this_year();
  ?>
  <table class="table table-bordered table-striped w-auto">
    <thead>
      <tr>
        <th>השנה</th>
        <th>היא שנת</th>
        <th>ממחזור קטן</th>
        <th>ושנת</th>
        <th>ממחזור גדול</th>
        <th>שנה מעוברת</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $machzor_katan = $ezmachzor->get_machzor_katan_info($this_year);
      $first = $machzor_katan['first'];
      $last = $machzor_katan['last'];
      for ($year = $first; $year <= $last + 1; $year++)
      {
        $is_meuveret   = $ezyear->is_meuveret($year);
        $machzor_katan = $ezmachzor->get_machzor_katan_info($year);
        $machzor_gadol = $ezmachzor->get_machzor_gadol_info($year);
    ?>
      <tr>
        <td <?= ($year == $this_year) ? 'class="text-decoration-underline"' : ''; ?>'><?= $year; ?></td>
        <td><?= $machzor_katan['year']; ?></td>
        <td><?= $machzor_katan['machzor']; ?></td>
        <td><?= $machzor_gadol['year']; ?></td>
        <td><?= $machzor_gadol['machzor']; ?></td>
        <td><?= $is_meuveret ? 'כן' : 'לא'; ?></td>
      </tr>
    <?php
      }
    ?>
    </tbody>
  </table>

</body>
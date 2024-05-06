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
    $ezsheerit = new Sheerit();
    $ezmonth   = new Month();
    $ezyear    = new Year();
    $ezmachzor = new Machzor();
  ?>
  <h1><center>הלכות קידוש החודש להרמב"ם</center></h1>

  <table class="table table-bordered table-striped w-auto">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th>חודשים</th>
        <th>ימים</th>
        <th>שעות</th>
        <th>חלקים</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $pshutot = $ezyear->shanim_pshutot(12);
      ?>
      <tr>
        <td>פשוטות</td>
        <td>12</td>
        <td><?= $pshutot['months'] ?></td>
        <td><?= $pshutot['days'] ?></td>
        <td><?= $pshutot['hours'] ?></td>
        <td><?= $pshutot['chalakim'] ?></td>
      </tr>
      <?php
        $meuvarot = $ezyear->shanim_meuvarot(7);
      ?>
      <tr>
        <td>מעוברות</td>
        <td>7</td>
        <td><?= $meuvarot['months'] ?></td>
        <td><?= $meuvarot['days'] ?></td>
        <td><?= $meuvarot['hours'] ?></td>
        <td><?= $meuvarot['chalakim'] ?></td>
      </tr>
      <?php
        $total = $ezmolad->sum($pshutot, $meuvarot);
      ?>
      <tr>
        <td>סה"כ</td>
        <td>19</td>
        <td><?= $total['months'] ?></td>
        <td><?= $total['days'] ?></td>
        <td><?= $total['hours'] ?></td>
        <td><?= $total['chalakim'] ?></td>
      </tr>
    </tbody>
  </table>

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
      <td><?= $sheerit_machzor['days'] ?></td>
      <td><?= $sheerit_machzor['hours'] ?></td>
      <td><?= $sheerit_machzor['chalakim'] ?></td>
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
        <td <?= ($year == $this_year) ? 'class="text-decoration-underline"' : '' ?>'><?= $year ?></td>
        <td><?= $machzor_katan['year'] ?></td>
        <td><?= $machzor_katan['machzor'] ?></td>
        <td><?= $machzor_gadol['year'] ?></td>
        <td><?= $machzor_gadol['machzor'] ?></td>
        <td><?= $is_meuveret ? 'כן' : 'לא' ?></td>
      </tr>
    <?php
      }
    ?>
    </tbody>
  </table>

</body>
<!DOCTYPE html>
<html lang="he_IL" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>קידוש החודש</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
  <?php require_once('classes.php'); ?>
  <h1>
    <center>הלכות קידוש החודש להרמב"ם</center>
  </h1>
  <?php $molad = $ezmolad->molad_days(); ?>
  <h6>חז"ל קיבלו שהמולד קורה בממוצע כל 29 יום, 12 שעות, 793 חלקים. דהיינו כל  <?= $molad ?> ימים.</h6>
  <table class="table table-bordered table-striped w-auto">
    <thead>
      <tr>
        <th>חודשים</th>
        <th>ימים</th>
        <th>שעות</th>
        <th>חלקים</th>
      </tr>
    </thead>
    <tbody>
    <?php
      for ($months = 1; $months <= 13; $months++)
      {
        $moladim = $ezmonth->chodashim($months);
        echo '<tr><td>' . $moladim['months'] . '</td><td>' . $moladim['days'] . '</td><td>' . $moladim['hours'] . '</td><td>' . $moladim['chalakim'] . '</td></tr>';
      }
    ?>
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
      foreach ([1, 12, 13] as $months)
      {
        echo '<tr>';
        switch ($months)
        {
          case 1:
            echo '<td>'.'שארית חודש'.'</td>';
            $sheerit = $ezmonth->sheerit_chodesh();
            $remez = 'אי"ב תשצ"ג';
            break;
          case 12:
            echo '<td>'.'שארית שנה פשוטה'.'</td>';
            $sheerit = $ezyear->sheerit_shana_pshuta();
            $remez = 'ד"ח תתע"ו';
            break;
          case 13:
            echo '<td>'.'שארית שנה מעוברת'.'</td>';
            $sheerit = $ezyear->sheerit_shana_meuveret();
            $remez = 'הכ"א תקפ"ט';
            break;
        }
        echo '<td>' . $sheerit['days'] . '</td><td>' . $sheerit['hours'] . '</td><td>' . $sheerit['chalakim'] . '</td><td>'.$remez.'</td></tr>';
      }
    ?>
    </tbody>
  </table>

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
</body>
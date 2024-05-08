<!DOCTYPE html>
<html>

<head>
<?php
  $title = 'קידוש החודש'. '&nbsp;|&nbsp;' .'פרק ו';
  include('header.php');
?>
</head>

<body lang="he_IL" dir="rtl">
  <?php
  require_once('utils.php');
  require_once('classes.php'); 
  // $ezmonth   = new Month();
  // $ezyear    = new Year();
  // $ezmachzor = new Machzor();
  ?>
  <div class="container">
    <h1><center>הלכות קידוש החודש להרמב"ם</center></h1>
    <h2><center>פרק ו'</center></h2>

    <a href="#6-1">הלכה א</a>&ThickSpace;
    <a href="#6-2">הלכה ב</a>&ThickSpace;
    <a href="#6-3">הלכה ג</a>&ThickSpace;
    <a href="#6-4">הלכה ד</a>&ThickSpace;
    <a href="#6-5">הלכה ה</a>&ThickSpace;
    <a href="#6-6">הלכה ו</a>&ThickSpace;

    <h3 id="6-1">הלכה א</h3>
    <p>בזמן שעושין על הראייה, היו מחשבין ויודעין שעה שיתקבץ בו הירח עם החמה בדקדוק הרבה, כדרך שהאיצטגנינין עושין, כדי לידע אם יראה הירח או לא יראה. ותחלת אותו החשבון הוא החשבון שמחשבין אותו בקירוב, ויודעין שעת קיבוצן בלא דקדוק. [ושעת קיבוצן בלא דקדוק] אלא במהלכם האמצעי, הוא הנקרא <b>מולד</b>. ועיקרי החשבון שמחשבין בזמן שאין שם בית דין שיקבעו בו על הראייה, והוא חשבון שאנו מחשבין היום, הוא הנקרא <b>עיבור</b>:</p>
    
    <h3 id="6-2">הלכה ב</h3>
    <p>היום והלילה כ"ד שעות בכל זמן: י"ב ביום וי"ב בלילה.<br>והשעה מחולקת לאלף ושמנים (1080) חלקים.</p>
    <div class="row row-cols-auto">
      <div class="col">
        <table class="table table-bordered table-striped w-auto">
          <thead>
            <tr>
              <th>דקות</th>
              <th>חלקים</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($minute = 1; $minute <= 10; $minute++)
              echo '<tr><td>' . $minute . '</td><td>' . $minute * CHALAKIM_IN_MINUTE . '</td></tr>';
            ?>
          </tbody>
        </table>
      </div>
      <div class="col">
        <table class="table table-bordered table-striped w-auto">
          <thead>
            <tr>
              <th>דקות</th>
              <th>חלקים</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($minute = 11; $minute <= 20; $minute++)
              echo '<tr><td>' . $minute . '</td><td>' . $minute * CHALAKIM_IN_MINUTE . '</td></tr>';
            ?>
          </tbody>
        </table>
      </div>
      <div class="col">
        <table class="table table-bordered table-striped w-auto">
          <thead>
            <tr>
              <th>דקות</th>
              <th>חלקים</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($minute = 21; $minute <= 30; $minute++)
              echo '<tr><td>' . $minute . '</td><td>' . $minute * CHALAKIM_IN_MINUTE . '</td></tr>';
            ?>
          </tbody>
        </table>
      </div>
      <div class="col">
        <table class="table table-bordered table-striped w-auto">
          <thead>
            <tr>
              <th>דקות</th>
              <th>חלקים</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($minute = 31; $minute <= 40; $minute++)
              echo '<tr><td>' . $minute . '</td><td>' . $minute * CHALAKIM_IN_MINUTE . '</td></tr>';
            ?>
          </tbody>
        </table>
      </div>
      <div class="col">
        <table class="table table-bordered table-striped w-auto">
          <thead>
            <tr>
              <th>דקות</th>
              <th>חלקים</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($minute = 41; $minute <= 50; $minute++)
              echo '<tr><td>' . $minute . '</td><td>' . $minute * CHALAKIM_IN_MINUTE . '</td></tr>';
            ?>
          </tbody>
        </table>
      </div>
      <div class="col">
        <table class="table table-bordered table-striped w-auto">
          <thead>
            <tr>
              <th>דקות</th>
              <th>חלקים</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($minute = 51; $minute <= 60; $minute++)
              echo '<tr><td>' . $minute . '</td><td>' . $minute * CHALAKIM_IN_MINUTE . '</td></tr>';
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <p>ולמה חלקו השעה למנין זה? לפי שמנין זה יש בו חצי (1&frasl;2) ורביע (1&frasl;4) ושמין (1&frasl;8), ושליש (1&frasl;3) ושתות (1&frasl;6) ותשיע (1&frasl;9), וחומש (1&frasl;5) ועישור (1&frasl;10). והרבה חלקים יש לכל אלו השמות.</p>
    <p class="explanation p-2">1080 מתחלק ב- 1, 2, 3, 4, 5, 6, 8, 9, 10, 12, 15, 18, 20, 24, 27, 30,&#8230;<br>אבל הרי גם 360 מתחלק בכל הנ"ל (חוץ מ- 27)! א"כ למה חילקו את השעה ל- 1080?<br>וי"ל כי רק אז יש למולד מספר שלם של חלקים (793)<br>-עתים לבינה</p>

    <h3 id="6-3">הלכה ג</h3>
    <p>משיתקבץ הירח והחמה לפי חשבון זה, עד שיתקבצו פעם שנייה במהלכם האמצעי, כ"ט יום וי"ב שעות מיום שלשים מתחלת לילו, ושבע מאות ושלשה ותשעים חלקים (793) משעת י"ג. וזה הוא הזמן שבין כל מולד ומולד, וזה הוא <b>חדשה של לבנה</b>.</p>

    <?php
      $molad = molad_days();

      $minutes_float = CHALAKIM_IN_MOLAD / CHALAKIM_IN_HOUR * 60;
      $minutes = (int)$minutes_float;
      $seconds = ($minutes_float - $minutes) * 60;
    ?>
    <p class="explanation p-2">חז"ל קיבלו שהמולד קורה בממוצע כל 29 יום, 12 שעות, 793 חלקים. דהיינו כל  <?= $molad ?> ימים.<br>793 חלקים = <?= $minutes ?> דקות + 1 חלק = <?= number_format($minutes_float, 4) ?> דקות = <?= $minutes ?> דקות + <?= number_format($seconds, 2) ?> שניות</p>

    <h3 id="6-4">הלכה ד</h3>
    <p><b>שנה של לבנה</b>:<br>אם תהיה שנים עשר חדש מחדשים אלו, יהיה כללה שלש מאות יום וארבעה וחמשים (354) יום, ושמנה שעות, ושמנה מאות וששה ושבעים (876) חלקים.<br>ואם תהיה מעוברת –ותהיה השנה שלשה עשר חדש– יהיה כללה שלש מאות ושמונים ושלשה (383) יום, ואחת ועשרים שעות, וחמש מאות תשעה ושמונים (589) חלקים.</p>

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
        $month = new Molad();
        for ($months = 1; $months <= 13; $months++)
        {
          $month->moladim($months);
          echo '<tr><td>' . $months . '</td><td>' . $month->days . '</td><td>' . $month->hours . '</td><td>' . $month->chalakim . '</td></tr>';
        }
      ?>
      </tbody>
    </table>

    <p>ו<b>שנת החמה</b> היא שלש מאות חמשה וששים (365) יום ושש שעות.<br>נמצא, תוספת שנת החמה על שנת הלבנה: עשרה ימים, ואחת ועשרים שעות, ומאתים וארבעה חלקים.</p>

    <table class="table table-bordered table-striped w-auto">
      <thead>
        <tr>
          <th></th>
          <th>ימים</th>
          <th>שעות</th>
          <th>חלקים</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $solar_year = new Molad(365, 6);
        $lunar_year = new Molad();
        $lunar_year->moladim(12);
      ?>
      <tr>
        <td>שנת החמה</td>
        <td><?= $solar_year->days ?></td>
        <td><?= $solar_year->hours ?></td>
        <td><?= $solar_year->chalakim ?></td>
      </tr>
      <tr>
        <td>שנת הלבנה</td>
        <td><?= $lunar_year->days ?></td>
        <td><?= $lunar_year->hours ?></td>
        <td><?= $lunar_year->chalakim ?></td>
      </tr>
      <?php
        $solar_year->subtract($lunar_year);
      ?>
      <tr class="total">
        <td>תוספת</td>
        <td><?= $solar_year->days ?></td>
        <td><?= $solar_year->hours ?></td>
        <td><?= $solar_year->chalakim ?></td>
      </tr>
      </tbody>
    </table>

    <h3 id="6-5">הלכה ה</h3>
    <p>כשתשליך ימי חדש הלבנה שבעה שבעה, שהן ימי השבוע, ישאר יום אחד וי"ב שעות ושבע מאות ושלשה ותשעים (793) חלקים; סימן להם אי"ב תשצ"ג, וזו היא <b>שארית חדש הלבנה</b>.<br>וכן כשתשליך ימי שנת הלבנה שבעה שבעה: אם שנה פשוטה היא, ישאר ממנה ארבעה ימים ושמנה שעות ושמנה מאות וששה ושבעים (876) חלקים; סימן לה ד"ח תתע"ו, וזו היא <b>שארית שנה פשוטה</b>.<br>ואם <b>שנה מעוברת</b> היא, תהיה שאריתה חמשה ימים ואחת ועשרים שעות וחמש מאות תשעה ושמונים (589) חלקים; סימן להם הכ"א תקפ"ט</p>

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
        $sheerit = new Molad();
        foreach ([1, 12, 13] as $months)
        {
          echo '<tr>';
          $sheerit->moladim($months);
          $sheerit->sheerit();
          switch ($months)
          {
            case 1:
              echo '<td>'.'שארית חודש'.'</td>';
              $remez = 'אי"ב תשצ"ג';
              break;
            case 12:
              echo '<td>'.'שארית שנה פשוטה'.'</td>';
              $remez = 'ד"ח תתע"ו';
              break;
            case 13:
              echo '<td>'.'שארית שנה מעוברת'.'</td>';
              $remez = 'הכ"א תקפ"ט';
              break;
          }
          echo '<td>' . $sheerit->days . '</td><td>' . $sheerit->hours . '</td><td>' . $sheerit->chalakim . '</td><td>'.$remez.'</td></tr>';
        }
      ?>
      </tbody>
    </table>

    <h3 id="6-6">הלכה ו</h3>
    <p>כשיהיה עמך ידוע מולד חדש מן החדשים, ותוסיף עליו אי"ב תשצ"ג, יצא מולד חדש שאחריו; ותדע באי זה יום מימי השבוע, ובאי זו שעה ובכמה חלקים יהיה.</p>

    <table class="table table-bordered table-striped w-auto">
      <thead>
        <tr>
          <th></th>
          <th>יום</th>
          <th>שעות</th>
          <th>חלקים</th>
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>חודש זה:</td>
        <td><input id="this_month_days"     type="number" min="1" max="7"     step="1" onchange="calculate_next_month()" value="4"></td>
        <td><input id="this_month_hours"    type="number" min="0" max="23"    step="1" onchange="calculate_next_month()" value="23"></td>
        <td><input id="this_month_chalakim" type="number" min="0" max="1079"  step="1" onchange="calculate_next_month()" value="1079"></td>
      </tr>
      <?php
        $ib_tashtzag = Molad::ib_tashtzag();
      ?>
      <tr>
        <td>אי"ב תשצ"ג:</td>
        <td><?= $ib_tashtzag->days ?></td>
        <td><?= $ib_tashtzag->hours ?></td>
        <td><?= $ib_tashtzag->chalakim ?></td>
      </tr>
      <tr class="total">
        <td>חודש הבא</td>
        <td id="next_month_days"></td>
        <td id="next_month_hours"></td>
        <td id="next_month_chalakim"></td>
      </tr>
      <tr>
        <td>תרגומו:</td>
        <td id="translation_days"></td>
        <td id="translation_hours" dir="ltr" style="text-align: center;"></td>
        <td id="translation_chalakim"></td>
      </tr>
      </tbody>
    </table>
    <div hidden id="hidden_nextmonth">
  </div>
</body>
<script type="text/javascript">
  function calculate_next_month()
  {
    let this_month_days      = $("#this_month_days").val();
    let this_month_hours     = $("#this_month_hours").val();
    let this_month_chalakim  = $("#this_month_chalakim").val();

    let next_month_days      = $("#next_month_days");
    let next_month_hours     = $("#next_month_hours");
    let next_month_chalakim  = $("#next_month_chalakim");

    let translation_days     = $("#translation_days");
    let translation_hours    = $("#translation_hours");
    let translation_chalakim = $("#translation_chalakim");

    $("#hidden_nextmonth").load('next_molad.php',
      {
        'this_month_days'    : this_month_days,
        'this_month_hours'   : this_month_hours,
        'this_month_chalakim': this_month_chalakim
      },
      function()
      {
        let next_month = $(this).text();
        next_month = JSON.parse(next_month);

        next_month_days.text(next_month.next_molad.days);
        next_month_hours.text(next_month.next_molad.hours + '  (מ- 6 אחה"צ)');
        next_month_chalakim.text(next_month.next_molad.chalakim);
        
        translation_days.text(next_month.translation.day);
        translation_hours.text(next_month.translation.hour);
        translation_chalakim.text(next_month.translation.chalakim);
      }
    );
  }

  calculate_next_month();
</script>
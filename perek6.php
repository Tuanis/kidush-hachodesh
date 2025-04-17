<!DOCTYPE html>
<html>

<head>
  <?php
  $title = 'קידוש החודש' . '&nbsp;|&nbsp;' . 'פרק ו';
  include('header.php');
  ?>
</head>

<body lang="he_IL" dir="rtl">
  <?php
  require_once 'utils.php';
  require_once 'molad.php';
  require_once 'year.php';

  $ib_tashtzag      = Molad::ib_tashtzag();
  $solar_year       = new Molad(365, 6);
  $shana_pshuta     = Year::shana_pshuta();
  $shana_meuveret   = Year::shana_meuveret();
  $sheerit_pshuta   = Year::sheerit_shana_pshuta();
  $sheerit_meuveret = Year::sheerit_shana_meuveret();

  ?>
  <a href="./"><i class="fas fa-arrow-alt-circle-up" style="font-size: 24px; color: #337ab7;" title="לתפריט הראשי"></i></a>
  <div class="container">
    <h1>
      <center>הלכות קידוש החודש להרמב"ם</center>
    </h1>
    <h2>
      <center>פרק ו'</center>
    </h2>

    <a href="#6-1">הלכה א</a>&ThickSpace;
    <a href="#6-2">הלכה ב</a>&ThickSpace;
    <a href="#6-3">הלכה ג</a>&ThickSpace;
    <a href="#6-4">הלכה ד</a>&ThickSpace;
    <a href="#6-5">הלכה ה</a>&ThickSpace;
    <a href="#6-6">הלכה ו</a>&ThickSpace;
    <a href="#6-7">הלכה ז</a>&ThickSpace;
    <a href="#6-8">הלכה ח</a>&ThickSpace;
    <a href="#6-9">הלכה ט</a>&ThickSpace;
    <a href="#6-10">הלכה י</a>&ThickSpace;
    <a href="#6-11">הלכה יא</a>&ThickSpace;
    <a href="#6-12">הלכה יב</a>&ThickSpace;
    <a href="#6-13">הלכה יג</a>&ThickSpace;
    <a href="#6-14">הלכה יד</a>&ThickSpace;
    <a href="#6-15">הלכה טו</a>&ThickSpace;

    <?php
    #region Halacha 1
    ?>
    <h3 id="6-1">הלכה א</h3>
    <p>בזמן שעושין על הראייה, היו מחשבין ויודעין שעה שיתקבץ בו הירח עם החמה בדקדוק הרבה, כדרך שהאיצטגנינין עושין, כדי לידע אם יראה הירח או לא יראה. ותחלת אותו החשבון הוא החשבון שמחשבין אותו בקירוב, ויודעין שעת קיבוצן בלא דקדוק. [ושעת קיבוצן בלא דקדוק] אלא במהלכם האמצעי, הוא הנקרא <b>מולד</b>. ועיקרי החשבון שמחשבין בזמן שאין שם בית דין שיקבעו בו על הראייה, והוא חשבון שאנו מחשבין היום, הוא הנקרא <b>עיבור</b>.</p>
    <?php
    #endregion
    #region Halacha 2
    ?>
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
    <?php
    #endregion
    #region Halacha 3
    ?>
    <h3 id="6-3">הלכה ג</h3>
    <p>משיתקבץ הירח והחמה לפי חשבון זה, עד שיתקבצו פעם שנייה במהלכם האמצעי, כ"ט יום וי"ב שעות מיום שלשים מתחלת לילו, ושבע מאות ושלשה ותשעים חלקים (793) משעת י"ג. וזה הוא הזמן שבין כל מולד ומולד, וזה הוא <b>חדשה של לבנה</b>.</p>

    <?php
    $molad = molad_days();

    $minutes_float = CHALAKIM_IN_MOLAD / CHALAKIM_IN_HOUR * 60;
    $minutes = (int)$minutes_float;
    $seconds = ($minutes_float - $minutes) * 60;
    ?>
    <p class="explanation p-2">חז"ל קיבלו שהמולד קורה בממוצע כל 29 יום, 12 שעות, 793 חלקים. דהיינו כל <?= $molad ?> ימים.<br>שים לב בטבלאות בהלכה ב', איפה נמצא החלק 793&hellip;<br>793 חלקים = <?= $minutes ?> דקות + 1 חלק = <?= number_format($minutes_float, 4) ?> דקות = <?= $minutes ?> דקות + <?= number_format($seconds, 2) ?> שניות</p>
    <?php
    #endregion
    #region Halacha 4
    ?>
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
        <tr>
          <td>שנת החמה</td>
          <td><?= $solar_year->days ?></td>
          <td><?= $solar_year->hours ?></td>
          <td><?= $solar_year->chalakim ?></td>
        </tr>
        <tr>
          <td>שנת הלבנה</td>
          <td><?= $shana_pshuta->days ?></td>
          <td><?= $shana_pshuta->hours ?></td>
          <td><?= $shana_pshuta->days ?></td>
        </tr>
        <?php
        $difference = clone $solar_year;
        $difference->subtract($shana_pshuta);
        ?>
        <tr class="total">
          <td>תוספת</td>
          <td><?= $difference->days ?></td>
          <td><?= $difference->hours ?></td>
          <td><?= $difference->chalakim ?></td>
        </tr>
      </tbody>
    </table>
    <?php
    #endregion
    #region Halacha 5
    ?>
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
              echo '<td>' . 'שארית חודש' . '</td>';
              $remez = 'אי"ב תשצ"ג';
              break;
            case 12:
              echo '<td>' . 'שארית שנה פשוטה' . '</td>';
              $remez = 'ד"ח תתע"ו';
              break;
            case 13:
              echo '<td>' . 'שארית שנה מעוברת' . '</td>';
              $remez = 'הכ"א תקפ"ט';
              break;
          }
          echo '<td>' . $sheerit->days . '</td><td>' . $sheerit->hours . '</td><td>' . $sheerit->chalakim . '</td><td>' . $remez . '</td></tr>';
        }
        ?>
      </tbody>
    </table>
    <?php
    #endregion
    #region Halacha 6
    ?>
    <h3 id="6-6">הלכה ו</h3>
    <p>כשיהיה עמך ידוע מולד חדש מן החדשים, ותוסיף עליו אי"ב תשצ"ג, יצא מולד חדש שאחריו; ותדע באי זה יום מימי השבוע, ובאי זו שעה, ובכמה חלקים יהיה.</p>

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
          <td><input id="this_month_days" type="number" min="1" max="7" step="1" onchange="calculate_next_month()" value="4"></td>
          <td><input id="this_month_hours" type="number" min="0" max="23" step="1" onchange="calculate_next_month()" value="23"></td>
          <td><input id="this_month_chalakim" type="number" min="0" max="1079" step="1" onchange="calculate_next_month()" value="1079"></td>
        </tr>
        <tr>
          <td>אי"ב תשצ"ג:</td>
          <td><?= $ib_tashtzag->days ?></td>
          <td><?= $ib_tashtzag->hours ?></td>
          <td><?= $ib_tashtzag->chalakim ?></td>
        </tr>
        <tr class="total">
          <td>חודש הבא:</td>
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
    <?php
    #endregion
    #region Halacha 7
    ?>
    <h3 id="6-7">הלכה ז</h3>
    <p>כיצד? הרי שהיה מולד ניסן באחד בשבת, בחמש שעות ביום, ומאה ושבעה חלקים; סימן להם אהק"ז. כשתוסיף עליו שארית חדש הלבנה, והוא אי"ב תשצ"ג, יצא מולד אייר בליל שלישי, חמש שעות בלילה, ותשע מאות חלקים; סימן להם ג"ה תת"ק. ועל דרך זו עד סוף העולם, חדש אחר חדש.</p>

    <p class="explanation p-2">לכאורה הפשט הוא כך (ע' שנו"ס שי"ג אי"ז ק"ז במקום אהק"ז):</p>
    <table class="table table-bordered table-striped w-auto">
      <thead>
        <tr>
          <th></th>
          <th>יום</th>
          <th>שעות</th>
          <th>חלקים</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ניסן:</td>
          <td>1</td>
          <td>17</td>
          <td>107</td>
          <td>חמש שעות ביום (נץ = 6)</td>
        </tr>
        <tr>
          <td>אי"ב תשצ"ג:</td>
          <td><?= $ib_tashtzag->days ?></td>
          <td><?= $ib_tashtzag->hours ?></td>
          <td><?= $ib_tashtzag->chalakim ?></td>
          <td></td>
        </tr>
        <?php
        $molad = new Molad(1, 17, 107);
        $molad->next_molad();
        $molad->announced_molad();

        $translation = $molad->translate();
        ?>
        <tr class="total">
          <td>אייר:</td>
          <td><?= $molad->days; ?></td>
          <td><?= $molad->hours; ?></td>
          <td><?= $molad->chalakim; ?></td>
          <td>חמש שעות בלילה (שקיעה = 6)</td>
        </tr>
        <tr>
          <td>תרגומו:</td>
          <td><?= $translation['day']; ?></td>
          <td dir="ltr" style="text-align: center;"><?= $translation['hour']; ?></td>
          <td><?= $translation['chalakim']; ?></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <?php
    #endregion
    #region Halacha 8
    ?>
    <h3 id="6-8">הלכה ח</h3>
    <p>וכן כשיהיה עמך ידוע מולד שנה זו, ותוסיף שאריתה על ימי המולד; אם פשוטה היא שארית הפשוטה, ואם מעוברת היא שארית המעוברת. יצא לך מולד שנה שלאחריה. וכן שנה אחר שנה, עד סוף העולם.</p>
    <div class="row row-cols-auto">
      <div class="col">
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
            <?php
              $before_meuveret = most_recent_meuveret() - 1;
              $molad = Year::molad_rosh_hashana($before_meuveret);
            ?>
            <tr>
              <td>תשרי <?= $before_meuveret ?>:</td>
              <td><?= $molad->days; ?></td>
              <td><?= $molad->hours; ?></td>
              <td><?= $molad->chalakim; ?></td>
            </tr>
            <tr>
              <td>שארית שנה פשוטה:</td>
              <td><?= $sheerit_pshuta->days ?></td>
              <td><?= $sheerit_pshuta->hours ?></td>
              <td><?= $sheerit_pshuta->chalakim ?></td>
            </tr>
            <?php
              $molad->add($sheerit_pshuta);
              $molad->announced_molad();
            ?>
            <tr class="total">
              <td>תשרי <?= $before_meuveret + 1 ?>:</td>
              <td><?= $molad->days; ?></td>
              <td><?= $molad->hours; ?></td>
              <td><?= $molad->chalakim; ?></td>
            </tr>
            <?php $translation = $molad->translate(); ?>
            <tr>
              <td>תרגומו:</td>
              <td><?= $translation['day']; ?></td>
              <td dir="ltr" style="text-align: center;"><?= $translation['hour']; ?></td>
              <td><?= $translation['chalakim']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col">
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
              <td>תשרי <?= $before_meuveret + 1 ?>:</td>
              <td><?= $molad->days; ?></td>
              <td><?= $molad->hours; ?></td>
              <td><?= $molad->chalakim; ?></td>
            </tr>
            <tr>
              <td>שארית שנה מעוברת:</td>
              <td><?= $sheerit_meuveret->days ?></td>
              <td><?= $sheerit_meuveret->hours ?></td>
              <td><?= $sheerit_meuveret->chalakim ?></td>
            </tr>
            <?php
              $molad->add($sheerit_meuveret);
              $molad->announced_molad();
            ?>
            <tr class="total">
              <td>תשרי <?= $before_meuveret + 2 ?>:</td>
              <td><?= $molad->days; ?></td>
              <td><?= $molad->hours; ?></td>
              <td><?= $molad->chalakim; ?></td>
            </tr>
            <?php $translation = $molad->translate(); ?>
            <tr>
              <td>תרגומו:</td>
              <td><?= $translation['day']; ?></td>
              <td dir="ltr" style="text-align: center;"><?= $translation['hour']; ?></td>
              <td><?= $translation['chalakim']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <p>ו<b>המולד הראשון</b> שממנו תתחיל, הוא מולד שהיה בשנה הראשונה של יצירה; והוא היה בליל שני, חמש שעות בלילה, ומאתים וארבעה חלקים - סימן להם <b>בהר"ד</b>. וממנו הוא תחלת החשבון.</p>
    <p class="explanation p-2">הוא המולד של חודש תשרי של שנה שלא היתה בעולם - החודש תשרי שלפני אותו חודש אלול שבו התחילו שישה ימי בראשית. שנה לפני יצירת האדם. "שנת תוהו".</p>
    <?php
    #endregion
    #region Halacha 9
    ?>
    <h3 id="6-9">הלכה ט</h3>
    <p>בכל החשבונות האלו שתדע מהן המולד, כשתוסיף שארית עם שארית: כשיתקבץ מן החלקים אלף ושמנים, תשליך שעה אחת ותוסיף אותו למנין השעות; וכשיתקבץ מן השעות ארבע ועשרים, תשליך יום ותוסיף ממנו למנין הימים; וכשיתקבץ מן הימים יותר על שבעה, תשליך שבעה מן המנין ותניח השאר. שאין אנו מחשבין לידע מניין הימים; אלא לידע באי זה יום מימי השבוע, ובאי זה שעה, ואי זה חלק יהיה המולד.</p>
    <?php
    #endregion
    #region Halacha 10
    ?>
    <h3 id="6-10">הלכה י</h3>
    <p>כל תשע עשרה שנה שיהיו מהן שבע שנים מעוברות וי"ב פשוטות נקרא <b>מחזור</b>. ולמה סמכנו על מנין זה? שבזמן שאתה מקבץ מנין ימי י"ב שנה פשוטות ושבע מעוברות ושעותיהן וחלקיהן, ותשליך כל אלף ושמנים חלקים שעה, וכל ארבע ועשרים שעות יום, ותוסיף למנין הימים&hellip;</p>
    <table class="table table-bordered table-striped w-auto">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>ימים</th>
          <th>שעות</th>
          <th>חלקים</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $num_pshutot = 12;
        $months_pshuta = 12;
        $pshutot = new Year();
        $pshutot->shanim_pshutot($num_pshutot);
        ?>
        <tr>
          <td>פשוטות</td>
          <td><?= $num_pshutot; ?></td>
          <td><?= $pshutot->days; ?></td>
          <td><?= $pshutot->hours; ?></td>
          <td><?= $pshutot->chalakim; ?></td>
        </tr>
        <?php
        $num_meuvarot = 7;
        $months_meuveret = 13;
        $meuvarot = new Year();
        $meuvarot->shanim_meuvarot($num_meuvarot);
        ?>
        <tr>
          <td>מעוברות</td>
          <td><?= $num_meuvarot; ?></td>
          <td><?= $meuvarot->days; ?></td>
          <td><?= $meuvarot->hours; ?></td>
          <td><?= $meuvarot->chalakim; ?></td>
        </tr>
        <?php
        $total_lunar = clone $pshutot;
        $total_lunar->add($meuvarot);
        ?>
        <tr class="total">
          <td>סה"כ</td>
          <td><?= $num_pshutot + $num_meuvarot; ?></td>
          <td><?= $total_lunar->days; ?></td>
          <td><?= $total_lunar->hours; ?></td>
          <td><?= $total_lunar->chalakim; ?></td>
        </tr>
      </tbody>
    </table>
    <p>תמצא הכל תשע עשרה שנה משני החמה, שכל שנה מהן שלש מאות וחמשה וששים (365) יום ושש שעות בשוה.</p>
    <table class="table table-bordered table-striped w-auto">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>ימים</th>
          <th>שעות</th>
          <th>חלקים</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $solar_years = clone $solar_year;
        $solar_years->multiply(19);
        ?>
        <tr>
          <td>שנות חמה</td>
          <td>19</td>
          <td><?= $solar_years->days; ?></td>
          <td><?= $solar_years->hours; ?></td>
          <td><?= $solar_years->chalakim; ?></td>
        </tr>
      </tbody>
    </table>
    <p>ולא ישאר ממנין ימי החמה בכל תשע עשרה שנה חוץ משעה אחת, וארבע מאות ושמנים וחמשה (485) חלקים. סימן להם אתפ"ה.</p>
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
        <tr>
          <td>שנות חמה</td>
          <td><?= $solar_years->days; ?></td>
          <td><?= $solar_years->hours; ?></td>
          <td><?= $solar_years->chalakim; ?></td>
        </tr>
        <tr>
          <td>שנות מחזור</td>
          <td><?= $total_lunar->days; ?></td>
          <td><?= $total_lunar->hours; ?></td>
          <td><?= $total_lunar->chalakim; ?></td>
        </tr>
        <?php
        $solar_years->subtract($total_lunar);
        ?>
        <tr class="total">
          <td>הפרש</td>
          <td><?= $solar_years->days; ?></td>
          <td><?= $solar_years->hours; ?></td>
          <td><?= $solar_years->chalakim; ?></td>
        </tr>
      </tbody>
    </table>
    <?php
    #endregion
    #region Halacha 11
    ?>
    <h3 id="6-11">הלכה יא</h3>
    <p>נמצא במחזור שהוא כזה, החדשים כולם חדשי הלבנה והשנים שני החמה. והשבע שנים המעוברות שבכל מחזור ומחזור לפי חשבון זה הם: שנה שלישית מן המחזור, וששית, ושמינית, ושנת אחת עשרה, ושנת ארבע עשרה, ושנת שבע עשרה, ושנת תשע עשרה. סימן להם גו"ח י"א י"ד י"ז י"ט.</p>
    <?php
    #endregion
    #region Halacha 12
    ?>
    <h3 id="6-12">הלכה יב</h3>
    <p>כשתקבץ שארית כל שנה משתים עשרה שנה הפשוטות (שהיא ד"ח תתע"ו), ושארית כל שנה משבע שנים המעוברות (שהיא הכ"א תקפ"ט), ותשליך הכל שבעה שבעה, ישאר שני ימים ושש עשרה שעות וחמש מאות וחמשה ותשעים חלקים. סימן להם בי"ו תקצ"ה. וזה הוא <b>שארית המחזור</b>.</p>
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
        <tr>
          <td>מחזור</td>
          <td><?= $total_lunar->days; ?></td>
          <td><?= $total_lunar->hours; ?></td>
          <td><?= $total_lunar->chalakim; ?></td>
        </tr>
        <?php
        $total_lunar->sheerit();
        ?>
        <tr>
          <td>שארית מחזור</td>
          <td><?= $total_lunar->days; ?></td>
          <td><?= $total_lunar->hours; ?></td>
          <td><?= $total_lunar->chalakim; ?></td>
        </tr>
      </tbody>
    </table>
    <?php
    #endregion
    #region Halacha 13
    ?>
    <h3 id="6-13">הלכה יג</h3>
    <p>כשיהיה לך ידוע מולד תחלת מחזור, ותוסיף עליו בי"ו תקצ"ה, יצא לך תחלת המחזור שאחריו. וכן מולד כל מחזור ומחזור, עד סוף העולם. וכבר אמרנו שמולד תחלת המחזור הראשון היה לבהר"ד. ומולד השנה הוא מולד תשרי של אותה השנה.</p>
    <?php
    #endregion
    #region Halacha 14
    ?>
    <h3 id="6-14">הלכה יד</h3>
    <p>ובדרך הזאת תדע מולד כל שנה ושנה שתרצה, ומולד כל חדש וחדש שתרצה; משנים שעברו, או משנים שעתידים לבא. כיצד? תקח שני יצירה שעברו וגמרו, ותעשה אותם מחזורין של תשע עשרה תשע עשרה שנה, עד תשרי של אותה השנה. ותדע מנין המחזורין שעברו, ומנין השנים שעברו ממחזור שעדיין לא נשלם. ותקח לכל מחזור ומחזור בי"ו תקצ"ה. ולכל שנה ושנה פשוטה משני המחזור שלא נשלם ד"ח תתע"ו. ולכל שנה מעוברת הכ"א תקפ"ט. ותקבץ הכל ותשליך החלקים שעות. ותשליך השעות ימים. והימים תשליכם שבעה שבעה. והנשאר מן הימים ומן השעות והחלקים הוא מולד שנה הבאה שתרצה לידע מולדה.</p>
    <?php
    $this_year = this_year();
    ?>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">השנה</span>
      </div>
      <input id="the_year" type="number" min="1" max="9999" step="1" oninput="calculate_machzor()" placeholder="הכנס שנה" value="<?= $this_year; ?>" style="width: 60px; background-color: azure;">
      <div class="input-group-prepend">
        <span class="input-group-text">היא השנה</span>
      </div>
      <input id="is_year" type="text" style="width: 30px;" readonly>
      <div class="input-group-prepend">
        <span class="input-group-text">ממחזור קטן</span>
      </div>
      <input id="of_machzor" type="text" style="width: 40px;" readonly>
    </div>

    <table class="mb-3">
      <thead>
        <tr>
          <th colspan="2">כבר עברו</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="w-25">מחזורים</td>
          <td><input id="machzorim_passed" type="text" style="width: 40px;" readonly></td>
        </tr>
        <tr>
          <td class="w-25">שנים פשוטות</td>
          <td><input id="pshutot_passed" type="text" style="width: 40px;" readonly></td>
        </tr>
        <tr>
          <td class="w-25">שנים מעוברות</td>
          <td><input id="meuvarot_passed" type="text" style="width: 40px;" readonly></td>
        </tr>
      </tbody>
    </table>

    <table class="table table-bordered table-striped w-auto">
      <thead>
        <tr>
          <th></th>
          <th>ימים</th>
          <th>שעות</th>
          <th>חלקים</th>
          <th style="background-color:unset;background-image:unset;border:unset;font-weight:normal;">כפול</th>
          <th>ימים</th>
          <th>שעות</th>
          <th>חלקים</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>שארית מחזור:</td>
          <td id="machzorim_days"><?= $total_lunar->days; ?></td>
          <td id="machzorim_hours"><?= $total_lunar->hours; ?></td>
          <td id="machzorim_chalakim"><?= $total_lunar->chalakim; ?></td>
          <td id="machzorim_times" style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"></td>
          <td id="machzorim_days_total"></td>
          <td id="machzorim_hours_total"></td>
          <td id="machzorim_chalakim_total"></td>
        </tr>
        <tr>
          <td>שארית שנה פשוטה:</td>
          <td id="pshutot_days"><?= $sheerit_pshuta->days ?></td>
          <td id="pshutot_hours"><?= $sheerit_pshuta->hours ?></td>
          <td id="pshutot_chalakim"><?= $sheerit_pshuta->chalakim ?></td>
          <td id="pshutot_times" style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"></td>
          <td id="pshutot_days_total"></td>
          <td id="pshutot_hours_total"></td>
          <td id="pshutot_chalakim_total"></td>
        </tr>
        <tr>
          <td>שארית שנה מעוברת:</td>
          <td id="meuvarot_days"><?= $sheerit_meuveret->days ?></td>
          <td id="meuvarot_hours"><?= $sheerit_meuveret->hours ?></td>
          <td id="meuvarot_chalakim"><?= $sheerit_meuveret->chalakim ?></td>
          <td id="meuvarot_times" style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"></td>
          <td id="meuvarot_days_total"></td>
          <td id="meuvarot_hours_total"></td>
          <td id="meuvarot_chalakim_total"></td>
        </tr>
        <tr>
          <td>המולד הראשון (בהר"ד):</td>
          <td></td>
          <td></td>
          <td></td>
          <td style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"></td>
          <td id="baharad_days">2</td>
          <td id="baharad_hours">5</td>
          <td id="baharad_chalakim">204</td>
        </tr>
        <tr class="total">
          <td>סה"כ:</td>
          <td></td>
          <td></td>
          <td></td>
          <td style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"></td>
          <td id="total_days"></td>
          <td id="total_hours"></td>
          <td id="total_chalakim"></td>
        </tr>
        <tr>
          <td>תרגומו (מולד ר"ה):</td>
          <td></td>
          <td></td>
          <td></td>
          <td style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"></td>
          <td id="total_translation_days"></td>
          <td id="total_translation_hours"></td>
          <td id="total_translation_chalakim"></td>
        </tr>
      </tbody>
    </table>
    <div hidden id="hidden_machzor"></div>

    <?php
    #endregion
    #region Halacha 15
    ?>
    <h3 id="6-15">הלכה טו</h3>
    <p>מולד השנה שיצא בחשבון זה הוא מולד ראש חדש תשרי. וכשתוסיף עליו אי"ב תשצ"ג, יצא מולד מרחשון. וכשתוסיף על מרחשון אי"ב תשצ"ג, יצא מולד כסליו. וכן לכל חדש וחדש, זה אחר זה עד סוף העולם.</p>
    <?php
    #endregion
    ?>
  </div>
  <a href="/perek7.php"><i class="fas fa-arrow-alt-circle-left float-start" style="font-size: 24px; color: #337ab7;" title="לפרק הבא"></i></a>
</body>
<script type="text/javascript">
  function calculate_next_month() {
    let this_month_days = $("#this_month_days").val();
    let this_month_hours = $("#this_month_hours").val();
    let this_month_chalakim = $("#this_month_chalakim").val();

    let next_month_days = $("#next_month_days");
    let next_month_hours = $("#next_month_hours");
    let next_month_chalakim = $("#next_month_chalakim");

    let translation_days = $("#translation_days");
    let translation_hours = $("#translation_hours");
    let translation_chalakim = $("#translation_chalakim");

    $("#hidden_nextmonth").load('next_molad.php', {
        'this_month_days': this_month_days,
        'this_month_hours': this_month_hours,
        'this_month_chalakim': this_month_chalakim
      },
      function() {
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

  function calculate_machzor() {
    let year = $("#the_year").val();

    let have_passed = before_the_year(year);
    let machzorim = have_passed.machzorim;
    let meuvarot = have_passed.meuvarot;
    let pshutot = have_passed.pshutot;

    let is_year = meuvarot + pshutot;
    let is_machzor = machzorim + 1;

    if (is_year == YEARS_IN_MACHZOR)
    {
      is_year = 1;
      is_machzor++;
    }
    else
    {
      is_year++;
    }

    $('#is_year').val(is_year);
    $('#of_machzor').val(is_machzor);

    $('#machzorim_passed').val(machzorim);
    $('#pshutot_passed').val(pshutot);
    $('#meuvarot_passed').val(meuvarot);
    $('#machzorim_times').text(machzorim);
    $('#pshutot_times').text(pshutot);
    $('#meuvarot_times').text(meuvarot);

    $("#hidden_machzor").load('calculate_rosh_hashana.php', {
        'machzorim': machzorim,
        'pshutot': pshutot,
        'meuvarot': meuvarot,
      },
      function() {
        let machzor_info = $(this).text();
        machzor_info = JSON.parse(machzor_info);

        $('#machzorim_days_total').text(machzor_info.machzorim.days);
        $('#machzorim_hours_total').text(machzor_info.machzorim.hours);
        $('#machzorim_chalakim_total').text(machzor_info.machzorim.chalakim);
        
        $('#pshutot_days_total').text(machzor_info.pshutot.days);
        $('#pshutot_hours_total').text(machzor_info.pshutot.hours);
        $('#pshutot_chalakim_total').text(machzor_info.pshutot.chalakim);

        $('#meuvarot_days_total').text(machzor_info.meuvarot.days);
        $('#meuvarot_hours_total').text(machzor_info.meuvarot.hours);
        $('#meuvarot_chalakim_total').text(machzor_info.meuvarot.chalakim);

        $('#total_days').text(machzor_info.total.days);
        $('#total_hours').text(machzor_info.total.hours);
        $('#total_chalakim').text(machzor_info.total.chalakim);

        $('#total_translation_days').text(machzor_info.translation.day);
        $('#total_translation_hours').text(machzor_info.translation.hour);
        $('#total_translation_chalakim').text(machzor_info.translation.chalakim);
      }
    );
  }

  calculate_next_month();
  calculate_machzor();
</script>
<!DOCTYPE html>
<html>

<head>
  <?php
  $title = 'קידוש החודש' . '&nbsp;|&nbsp;' . 'פרק ט';
  include('header.php');
  ?>
</head>

<body lang="he_IL" dir="rtl">
  <?php
  require_once 'utils.php';
  require_once 'molad.php';
  require_once 'year.php';

  ?>
  <a href="./"><i class="fas fa-arrow-alt-circle-up" style="font-size: 24px; color: #337ab7;" title="לתפריט הראשי"></i></a>
  <div class="container">
    <h1>
      <center>הלכות קידוש החודש להרמב"ם</center>
    </h1>
    <h2>
      <center>פרק ט'</center>
    </h2>

    <a href="#9-1">הלכה א</a>&ThickSpace;
    <a href="#9-2">הלכה ב</a>&ThickSpace;
    <a href="#9-3">הלכה ג</a>&ThickSpace;
    <a href="#9-4">הלכה ד</a>&ThickSpace;
    <a href="#9-5">הלכה ה</a>&ThickSpace;
    <a href="#9-6">הלכה ו</a>&ThickSpace;
    <a href="#9-7">הלכה ז</a>&ThickSpace;
    <a href="#9-8">הלכה ח</a>&ThickSpace;
    <a href="#9-Cheshbonot">חשבונות</a>&ThickSpace;

    <?php
    #region Halacha 1
    ?>
    <h3 id="9-1">הלכה א</h3>
    <p class="mb-0">שנת החמה:</p>
    <ul class="mb-0">
      <li><p class="mb-0">יש מחכמי ישראל שאומרים שהיא שס"ה (365) יום ורביע יום, שהוא שש שעות.</p></li>
      <li><p class="mb-0">ויש מהן שאומרים שהוא פחות מרביע היום.</p></li>
    </ul>
    <p>וכן חכמי יון ופרס יש ביניהן מחלוקת בדבר זה</p>

    <?php
    #endregion
    #region Halacha 2
    ?>
    <h3 id="9-2">הלכה ב</h3>
    <p class="mb-0">מי שהוא אומר שהיא שס"ה יום ורביע יום, ישאר מכל מחזור של י"ט שנה שעה אחת ותפ"ה חלקים כמו שאמרנו.</p>
    <p class="explanation p-2 mb-0">זו שארית מהלך השמש על מהלך הלבנה בכל מחזור של 19 שנים [<a href="/perek6.php#6-10">פ"ו ה"י</a>]</p>
    <p class="mb-0">ויהיה בין תקופה לתקופה אחד ותשעים יום ושבע שעות וחצי שעה.</p>
    <p class="explanation p-2 mb-0"><span>$365\frac{1}{4} \div 4$</span> = 91.3125 = <span>91 יום</span> + <span>7.5 שעות</span></p>
    <p>ומשתדע תקופה אחת באי זה יום באיזו שעה היא, תתחיל למנות ממנה לתקופה השניה שאחריה, ומן השניה לשלישית, עד סוף העולם.</p>

    <?php
    #endregion
    #region Halacha 3
    ?>
    <h3 id="9-3">הלכה ג</h3>
    <p class="mb-0">תקופת <b>ניסן</b> היא השעה והחלק שתכנס בו השמש בראש מזל <b>טלה</b>.</p>
    <p class="mb-0">ותקופת <b>תמוז</b> היות השמש בראש מזל <b>סרטן</b>.</p>
    <p class="mb-0">ותקופת <b>תשרי</b> היות השמש בראש מזל <b>מאזנים</b>.</p>
    <p class="mb-0">ותקופת <b>טבת</b> היות השמש בראש מזל <b>גדי</b>.</p>
    <p>ותקופת ניסן היתה בשנה הראשונה של יצירה לפי חשבון זה, קודם מולד ניסן בשבעה ימים ותשע שעות ותרמ"ב (642) חלקים. סימנה ז"ט תרמ"ב.</p>
    
    <table class="table table-bordered table-striped w-auto">
      <thead>
        <tr>
          <th></th>
          <th>ימים</th>
          <th>שעות</th>
          <th>חלקים</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $baharad = new Molad(2, 5, 204);
          ?>
          <td>מולד תשרי הראשון:</td>
          <td><?= $baharad->days; ?></td>
          <td><?= $baharad->hours; ?></td>
          <td><?= $baharad->chalakim; ?></td>
          <td>[<a href="/perek6.php#6-8">פ"ו ה"ח</a>]</td>
        </tr>
        <tr>
          <?php
            $months = new Molad();
            $months_full = clone $months;
            $months->moladim(6);
            $months_full->moladim(6, false);
          ?>
          <td>6 חודשים:</td>
          <td><?= $months->days; ?></td>
          <td><?= $months->hours; ?></td>
          <td><?= $months->chalakim; ?></td>
          <td></td>
        </tr>
        <tr>
          <?php
            $molad = clone $baharad;
            $molad_full = clone $molad;
            $molad->add($months);
            $molad_full->add($months_full, false);
          ?>
          <td>סה"כ:</td>
          <td class="total"><?= $molad->days; ?></td>
          <td class="total"><?= $molad->hours; ?></td>
          <td class="total"><?= $molad->chalakim; ?></td>
          <td></td>
        </tr>
        <tr>
          <?php
            $molad->sheerit();
          ?>
          <td>מולד ניסן הראשון:</td>
          <td><?= $molad->days; ?></td>
          <td><?= $molad->hours; ?></td>
          <td><?= $molad->chalakim; ?></td>
          <td></td>
        </tr>
        <tr>
          <?php
            $tkufat_nissan = new Molad(172, 0, 0); // 23 Adar
            $molad_full->subtract($tkufat_nissan);
            $tkufat_nissan->sheerit();
          ?>
          <td>תקופת ניסן:</td>
          <td><?= $tkufat_nissan->days; ?></td>
          <td><?= $tkufat_nissan->hours; ?></td>
          <td><?= $tkufat_nissan->chalakim; ?></td>
          <td>(תחילת יום רביעי כג אדר של שנה ראשונה)</td>
        </tr>
        <tr>
          <td>מוקדם ב:</td>
          <td class="total"><?= $molad_full->days; ?></td>
          <td class="total"><?= $molad_full->hours; ?></td>
          <td class="total"><?= $molad_full->chalakim; ?></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <?php
    #endregion
    #region Halacha 5
    ?>
    <h3 id="9-4">הלכה ד</h3>
    <p class="mb-0">דרך חשבון התקופה כך היא:</p>
    <ol>
      <li><p class="mb-0">תדע תחלה כמה מחזורין שלמים משנת היצירה עד מחזור שתרצה.</p></li>
      <li><p class="mb-0">וקח לכל מחזור מהן שעה אחת ותפ"ה חלקים.</p></li>
      <li><p class="mb-0">קבץ כל החלקים שעות, וכל השעות ימים.</p></li>
      <li><p class="mb-0">ותגרע מן הכל שבעה ימים וט' שעות ותרמ"ב חלקים.</p></li>
      <li><p class="mb-0">והשאר תוסיף אותו על מולד ניסן של שנה ראשונה מן המחזור.</p></li>
      <li><p class="mb-0">יצא לך באי זו שעה ובכמה בחדש תהיה תקופת ניסן של אותה השנה הראשונה באותו מחזור, וממנה תתחיל למנות אחד ותשעים יום ושבע שעות ומחצה לכל תקופה ותקופה.</p></li>
    </ol>
    <p class="mb-0">ואם תרצה לידע תקופת ניסן של שנה זו שהיא שנת כך וכך במחזור שאתה עומד בו:</p>
    <ol>
      <li><p class="mb-0">קח לכל המחזורין השלמים שעה ותפ"ה לכל מחזור.</p></li>
      <li><p class="mb-0">ולכל השנים הגמורות ששלמו מן המחזור, עשרה ימים וכ"א שעות ור"ד חלקים לכל שנה וקבץ הכל.</p></li>
      <li><p class="mb-0">ותגרע ממנו ז' ימים וט' שעות ותרמ"ב חלקים.</p></li>
      <li><p class="mb-0">והשאר תשליכם חדשי הלבנה כ"ט יום וי"ב שעות וז' מאות וצ"ג חלקים.</p></li>
      <li><p class="mb-0">והנשאר פחות מחדש הלבנה תוסיף אותו על מולד ניסן של אותה השנה, ותדע זמן תקופת ניסן של אותה השנה בכמה יום בחדש היא ובכמה שעה.</p></li>
    </ol>
    <ul>
      <li>
        <p class="mb-0">תקופת <b>ניסן</b> לפי חשבון זה אינה לעולם אלא</p>
        <ul>
          <li><p class="mb-0">או בתחלת הלילה,</p></li>
          <li><p class="mb-0">או בחצי הלילה,</p></li>
          <li><p class="mb-0">או בתחלת היום,</p></li>
          <li><p class="mb-0">או בחצי היום.</p></li>
        </ul>
      </li>
      <li>
        <p class="mb-0">ותקופת <b>תמוז</b> לעולם אינה אלא</p>
        <ul>
          <li><p class="mb-0">או בז' שעות ומחצה,</p></li>
          <li><p class="mb-0">או בשעה אחת ומחצה בין ביום בין בלילה.</p></li>
        </ul>
      </li>
      <li>
        <p class="mb-0">ותקופת <b>תשרי</b> לעולם אינה אלא</p>
        <ul>
          <li><p class="mb-0">או בט' שעות,</p></li>
          <li><p class="mb-0">או בג' שעות בין ביום בין בלילה.</p></li>
        </ul>
      </li>
      <li>
        <p class="mb-0">ותקופת <b>טבת</b> לעולם אינה אלא</p>
        <ul>
          <li><p class="mb-0">או בעשר שעות ומחצה,</p></li>
          <li><p class="mb-0">או בארבע שעות ומחצה בין ביום בין בלילה.</p></li>
        </ul>
      </li>
    </ul>
    <p class="mb-0">אם תרצה לידע <b>באי זה יום מימי השבוע ובאי זו שעה</b> תהיה התקופה:</p>
    <ol class="mb-0">
      <li><p class="mb-0">קח שנים גמורות שעברו משנת היצירה עד שנה שתרצה, והשלך הכל כ"ח כ"ח.</p></li>
      <li><p class="mb-0">והנשאר יותר מכ"ח, קח לכל שנה ושנה יום אחד ו' שעות, וקבץ הכל.</p></li>
      <li><p class="mb-0">והוסיף עליו ג'.</p></li>
      <li><p class="mb-0">והשלך הכל ז' ז'.</p></li>
      <li><p class="mb-0">והנשאר מן הימים ומן השעות תתחיל למנותו מתחלת ליל אחד בשבת.</p></li>
      <li><p class="mb-0">ולאשר יגיע החשבון, בו תהיה תקופת ניסן.</p></li>
    </ol>
    <p class="mb-0">ולמה מוסיפין שלשה? לפי שתקופה ראשונה של שנת יצירה היתה בתחלת ליל רביעי.</p>
    <p class="explanation p-2">בא להגיד לנו דרך  יותר קצר: בשנה של חמה יש 52 שבועות שלמים (364 יום) + יום ורבע, ותוספת זו מגיע למספר שלם של שבועות (5) אחרי 28 שנים. לכן יותר קל לעבוד עם המחזור הגדול של 28 שנה.</p>

    <?php
    #endregion
    #region Halacha 5
    ?>
    <h3 id="9-5">הלכה ה</h3>
    <p class="mb-0">כיצד? הרי שרצינו לידע תקופת ניסן של שנת ל' וט' מאות וארבעת אלפים (4930) ליצירה.</p>
      <ol class="mb-0">
        <li><p class="mb-0">כשתשליך הכל כ"ח כ"ח, תשאר שנה אחת.</p></li>
        <li><p class="mb-0">תקח לה יום אחד ושש שעות.</p></li>
        <li><p class="mb-0">ותוסיף עליו ג'.</p></li>
      <ul class="mb-0">
        <li><p class="mb-0">נמצאת תקופת ניסן בליל חמישי שש שעות בלילה.</p></li>
        <li><p class="mb-0">וכשתוסיף עליה שבע שעות ומחצה, תהיה תקופת תמוז בשעה ומחצה מיום ה'.</p></li>
        <li><p class="mb-0">וכשתוסיף עליה שבע שעות ומחצה, תהיה תקופת תשרי בט' שעות מיום ה'.</p></li>
        <li><p class="mb-0">וכשתוסיף עליה שבע שעות ומחצה, תהיה תקופת טבת בד' שעות ומחצה מליל ז'.</p></li>
        <li><p class="mb-0">וכשתוסיף עליה שבע שעות ומחצה, תהיה תקופת ניסן הבאה בתחלת יום ו'.</p></li>
      </ul>
      </ol>
    <p>ועל דרך זו עד סוף העולם, תקופה אחר תקופה.</p>

    <?php
    #endregion
    #region Halacha 6
    ?>
    <h3 id="9-6">הלכה ו</h3>
    <p class="mb-0">אם תרצה לידע <b>בכמה יום בחדש</b> תהיה תקופת ניסן של שנה זו:</p>
    <ol class="mb-0">
      <li><p class="mb-0">תדע תחלה באי זה יום מימי השבוע תהיה.</p></li>
      <li><p class="mb-0">ובאי זה יום יקבעו ניסן של שנה זו.</p></li>
      <li><p class="mb-0">וכמה שנים גמורות עברו מן המחזור, ותקח לכל שנה י"א יום.</p></li>
      <li><p class="mb-0">ותוסיף על סכום הימים ז' ימים בזמנים אלו.</p></li>
      <li>
        <p class="mb-0">והשלך הכל ל' ל'.</p>
        <p class="explanation p-2 mb-0">
          <span>המחזור כאן הוא מחזור הלבנה של י"ט שנה. ומה שמוסיף לכל שנה 11 יום הוא "עיגול למעלה" של "תוספת שנת החמה על שנת הלבנה" [<a href="/perek6.php#6-4">פ"ו ה"ד</a>]. </span>
          <span>אבל צריך להוריד הל' יום שהוסיפה כל שנה מעוברת שעברה מן המחזור. </span>
          <span>וביאור מה שמוסיף 7 ימים "בזמנים אלו" הוא ע"פ מה שהזכיר (ה"ב) שמחזור של 19 שנים של לבנה עדיין אינו בדיוק כמו 19 שנים של חמה, ונשאר הפרש של כמעט שעה וחצי. הרמ' כתב את חיבורו במחזור 260, ועד אז כבר הספיק ההפרש הזה להגיע ל יותר מ- 15.7 ימים. אלא שגם אמר (ה"ד) שצריכים להוריד יותר מ-7 ימים. לכן בסה"כ מוסיף 7. ובימינו ודאי שצריכים להוסיף הרבה יותר (קרוב ל-11). </span>
        </p>
      </li>
      <li><p class="mb-0">והנשאר פחות מל' תתחיל למנותו מראש חדש ניסן.</p></li>
      <li><p class="mb-0">אם יגיע ליום התקופה, מוטב.</p></li>
      <li><p class="mb-0">ואם לאו, הוסיף יום, או שני ימים, או שלשה ימים, על המנין; עד שיגיע ליום התקופה.</p></li>
      <li><p class="mb-0">ואם תהיה השנה מעוברת, תתחיל למנות מראש חדש אדר-שני.</p></li>
    </ol>
    <p>וליום שיגיע החשבון, באותו היום מן החדש תהיה התקופה.</p>

    <?php
    #endregion
    #region Halacha 7
    ?>
    <h3 id="9-7">הלכה ז</h3>
    <p class="mb-0">כיצד? הרי שרצינו לידע בכמה בחדש תהיה תקופת ניסן של שנת תתק"ל (4930) שהיא שנה תשיעית ממחזור ר"ס (260).</p>
    <ol class="mb-0">
      <li><p class="mb-0">מצאנו ראש חדש ניסן נקבע בה בחמישי, ותקופת ניסן בחמישי.</p></li>
      <li><p class="mb-0">ולפי שהיתה שנה זו תשיעית למחזור, יהיו השנים הגמורות שמנה.</p></li>
      <li><p class="mb-0">כשתקח לכל שנה מהן י"א יום, יהיו כל הימים פ"ח (88).</p></li>
      <li><p class="mb-0">תוסיף ז' הרי הכל צ"ה (95).</p></li>
      <li><p class="mb-0">תשליך הכל ל' ל' נשארו ה' ימים.</p></li>
      <li><p class="mb-0">כשתתחיל למנות ה' ימים מראש חדש ניסן, שהיה בחמישי, יגיע החשבון ליום שני.</p></li>
      <li><p class="mb-0">וכבר ידענו שאין התקופה בשני בשבת, אלא בחמישי. לפיכך תוסיף יום אחר יום עד שתגיע לחמישי שהוא יום התקופה.</p></li>
      <li><p class="mb-0">נמצאת תקופת ניסן בשנה זו ביום שמיני מחדש ניסן.</p></li>
    </ol>
    <p>ועל הדרך הזאת תעשה בכל שנה ושנה.</p>

    <?php
    #endregion
    #region Halacha 8
    ?>
    <h3 id="9-8">הלכה ח</h3>
    <p>זה שאמרנו "תוסיף יום אחר יום עד שתגיע ליום התקופה", לעולם לא תהיה צריך להוסיף אלא יום אחד, או ב', או ג'; ופלא גדול הוא שתהיה צריך להוסיף ארבעה ימים! ואם מצאת שאתה צריך להוסיף יום על זה, תדע שטעית בחשבון ותחזור ותחשוב בדקדוק.</p>

    <?php
    #endregion
    #region Chesbonot
    ?>
    <h3 id="9-Cheshbonot">חשבונות</h3>
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
          <?php
            $sheerit_machzor = Year::sheerit_machzor();
          ?>
          <td>שארית מחזור:</td>
          <td id="machzorim_days"><?= $sheerit_machzor->days; ?></td>
          <td id="machzorim_hours"><?= $sheerit_machzor->hours; ?></td>
          <td id="machzorim_chalakim"><?= $sheerit_machzor->chalakim; ?></td>
          <td id="machzorim_times" style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"></td>
          <td id="machzorim_days_total"></td>
          <td id="machzorim_hours_total"></td>
          <td id="machzorim_chalakim_total"></td>
        </tr>
        <tr>
          <?php
            $sheerit_pshuta = Year::sheerit_shana_pshuta();
          ?>
          <td>שארית שנה פשוטה:</td>
          <td id="pshutot_days"><?= $sheerit_pshuta->days; ?></td>
          <td id="pshutot_hours"><?= $sheerit_pshuta->hours; ?></td>
          <td id="pshutot_chalakim"><?= $sheerit_pshuta->chalakim; ?></td>
          <td id="pshutot_times" style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"></td>
          <td id="pshutot_days_total"></td>
          <td id="pshutot_hours_total"></td>
          <td id="pshutot_chalakim_total"></td>
        </tr>
        <tr>
          <?php
            $sheerit_meuveret = Year::sheerit_shana_meuveret();
          ?>
          <td>שארית שנה מעוברת:</td>
          <td id="meuvarot_days"><?= $sheerit_meuveret->days; ?></td>
          <td id="meuvarot_hours"><?= $sheerit_meuveret->hours; ?></td>
          <td id="meuvarot_chalakim"><?= $sheerit_meuveret->chalakim; ?></td>
          <td id="meuvarot_times" style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"></td>
          <td id="meuvarot_days_total"></td>
          <td id="meuvarot_hours_total"></td>
          <td id="meuvarot_chalakim_total"></td>
        </tr>
        <tr>
          <?php
              $ib_tashtzag = Molad::ib_tashtzag();
          ?>
          <td>חודשים:</td>
          <td><?= $ib_tashtzag->days; ?></td>
          <td><?= $ib_tashtzag->hours; ?></td>
          <td><?= $ib_tashtzag->chalakim; ?></td>
          <?php
            $months2nisan = is_meuveret($this_year) ? 7 : 6;
            $ib_tashtzag->multiply($months2nisan);
          ?> 
          <td id="months2nisan" style="background-color:unset;background-image:unset;border:unset;font-weight:normal;"><?= $months2nisan; ?></td>
          <td id="months2nisan_days"><?= $ib_tashtzag->days; ?></td>
          <td id="months2nisan_hours"><?= $ib_tashtzag->hours; ?></td>
          <td id="months2nisan_chalakim"><?= $ib_tashtzag->chalakim; ?></td>
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
          <td>תרגומו (מולד ניסן):</td>
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
    ?>
  </div>

  <a href="/perek10.php" style="pointer-events: none;"><i class="fas fa-arrow-alt-circle-left float-start" style="font-size: 24px; color: #337ab7; opacity: 0.5;"></i></a>
  <a href="/perek8.php"><i class="fas fa-arrow-alt-circle-right float-end" style="font-size: 24px; color: #337ab7;"></i></a>
</body>
<script type="text/javascript">
  function calculate_machzor() {
    let year = $("#the_year").val();
    let months2nisan = is_meuveret(year) ? 7 : 6;

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

    $("#hidden_machzor").load('calculate_tkufas_nisan.php', {
        'machzorim'   : machzorim,
        'pshutot'     : pshutot,
        'meuvarot'    : meuvarot,
        'months2nisan': months2nisan,
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

        $('#months2nisan').text(months2nisan);
        $('#months2nisan_days').text(machzor_info.months2nisan.days);
        $('#months2nisan_hours').text(machzor_info.months2nisan.hours);
        $('#months2nisan_chalakim').text(machzor_info.months2nisan.chalakim);

        $('#total_days').text(machzor_info.total.days);
        $('#total_hours').text(machzor_info.total.hours);
        $('#total_chalakim').text(machzor_info.total.chalakim);

        $('#total_translation_days').text(machzor_info.translation.day);
        $('#total_translation_hours').text(machzor_info.translation.hour);
        $('#total_translation_chalakim').text(machzor_info.translation.chalakim);
      }
    );
  }
  
  calculate_machzor();
  //TODO: Calculate tkufas nisan!
</script>
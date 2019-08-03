<?php
/**
 * The common simplified chinese file of zentaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
/* Some global items. */
$lang->zentaophp = '孫大俠的博客';
$lang->welcome   = '孫大俠, 做最更高水平的程序員！';
$lang->intro     = '<strong>孫大俠的博客</strong> 記錄所涉及到的技術細節......';
$lang->more      = '進入博客 &raquo;';
$lang->save      = '保存';
$lang->loading   = '稍後...';
$lang->goback    = '返回';
$lang->slogan->first = '非常努力';
$lang->slogan->second = '步履不停';
$lang->slogan->third = '心若陽光';
$lang->slogan->fourth = '獨立特行';
$lang->slogantext->first = '非常努力，毫不費力';
$lang->slogantext->second = '步履不停，人生暢行';
$lang->slogantext->third = '心若陽光，無畏悲傷';
$lang->slogantext->fourth = '獨立特行，自命不凡';

/* The menu items. */
$lang->menu = new stdclass();
$lang->menu->index = '葰洧妏嶂';
//$lang->menu->blog  = '演示';
$lang->menu->dev  = '開發';
$lang->menu->service  = '運維';
$lang->menu->tool  = '工具';
$lang->menu->read  = '讀書';
$lang->menu->sport  = '運動';

/* Error message. */
$lang->error = new stdclass();
$lang->error->length          = array("『%s』長度錯誤，應當為『%s』", "『%s』長度應當不超過『%s』，且不小於『%s』。");
$lang->error->reg             = "『%s』不符合格式，應當為:『%s』。";
$lang->error->unique          = "『%s』已經有『%s』這條記錄了。";
$lang->error->notempty        = "『%s』不能為空。";
$lang->error->empty           = "『%s』必須為空。";
$lang->error->equal           = "『%s』必須為『%s』。";
$lang->error->int             = array("『%s』應當是數字。", "『%s』應當介於『%s-%s』之間。");
$lang->error->float           = "『%s』應當是數字，可以是小數。";
$lang->error->email           = "『%s』應當為合法的EMAIL。";
$lang->error->date            = "『%s』應當為合法的日期。";
$lang->error->account         = "『%s』應當為合法的用戶名。";
$lang->error->passwordsame    = "兩次密碼應當相等。";
$lang->error->passwordrule    = "密碼應該符合規則，長度至少為六位。";

/* Pager items. */
$lang->pager = new stdclass();
$lang->pager->noRecord  = "暫時沒有記錄";
$lang->pager->digest    = "共<strong>%s</strong>條記錄，每頁 <strong>%s</strong>條，頁面：<strong>%s/%s</strong> ";
$lang->pager->first     = "首頁";
$lang->pager->pre       = "上頁";
$lang->pager->next      = "下頁";
$lang->pager->last      = "末頁";
$lang->pager->locate    = "GO!";

/* Datetime settings. */
define('DT_DATETIME1',  'Y-m-d H:i:s');
define('DT_DATETIME2',  'y-m-d H:i');
define('DT_MONTHTIME1', 'n/d H:i');
define('DT_MONTHTIME2', 'n月d日 H:i');
define('DT_DATE1',      'Y-m-d');
define('DT_DATE2',      'Ymd');
define('DT_DATE3',      'Y年m月d日');
define('DT_TIME1',      'H:i:s');
define('DT_TIME2',      'H:i');

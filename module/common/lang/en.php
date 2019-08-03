<?php
/**
 * The common english language file of ZenTaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
$lang->zentaophp = "Chivalrous Sun's Blog";
$lang->welcome   = 'Chivalrous Sun ,will become a more skilled programer.';
$lang->intro     = '<strong>Chivalrous Sun\'s  Blog</strong> record the detail of technoligies.';
$lang->more      = 'Go into &raquo;';
$lang->save      = 'Save';
$lang->loading   = 'Loading...';
$lang->goback    = 'Go back';
$lang->slogan->first = 'Work Hard';
$lang->slogan->second = 'Walk On';
$lang->slogan->third = 'Keep Kind';
$lang->slogan->fourth = 'Stand Alone';
$lang->slogantext->first = 'Work Hard,Get Easy';
$lang->slogantext->second = 'Walk On,Live Better';
$lang->slogantext->third = 'Keep Kind,Sad Away';
$lang->slogantext->fourth = 'Stand Alone,Feel StandOut';


/* The menu items. */
$lang->menu = new stdclass();
//$lang->menu->index = 'Home';
//$lang->menu->blog  = 'Demo';

$lang->menu->index = 'all Blogs';
//$lang->menu->blog  = '演示';
$lang->menu->dev  = 'develop';
$lang->menu->service  = 'service';
$lang->menu->tool  = 'tool';
$lang->menu->read  = 'read';
$lang->menu->sport  = 'sport';


/* Error info. */
$lang->error = new stdclass();
$lang->error->companyNotFound = "The domain %s does not exist.";
$lang->error->length          = array("『%s』length should be『%s』", "『%s』length should between『%s』and 『%s』.");
$lang->error->reg             = "『%s』should like『%s』";
$lang->error->unique          = "『%s』has『%s』already.";
$lang->error->notempty        = "『%s』can not be empty.";
$lang->error->empty           = "『%s』 must be empty.";
$lang->error->equal           = "『%s』must be『%s』.";
$lang->error->int             = array("『%s』should be interger", "『%s』should between『%s-%s』.");
$lang->error->float           = "『%s』should be a interger or float.";
$lang->error->email           = "『%s』should be email.";
$lang->error->date            = "『%s』should be date";
$lang->error->account         = "『%s』should be a valid account.";
$lang->error->passwordsame    = "Two passwords must be the same";
$lang->error->passwordrule    = "Password should more than six letters.";

/* Pager. */
$lang->pager = new stdclass();
$lang->pager->noRecord  = "No records yet.";
$lang->pager->digest    = "<strong>%s</strong> records, <strong>%s</strong> per page, <strong>%s/%s</strong> ";
$lang->pager->first     = "First";
$lang->pager->pre       = "Previous";
$lang->pager->next      = "Next";
$lang->pager->last      = "Last";
$lang->pager->locate    = "GO!";

/* Date times. */
define('DT_DATETIME1',  'Y-m-d H:i:s');
define('DT_DATETIME2',  'y-m-d H:i');
define('DT_MONTHTIME1', 'n/d H:i');
define('DT_MONTHTIME2', 'F j, H:i');
define('DT_DATE1',     'Y-m-d');
define('DT_DATE2',     'Ymd');
define('DT_DATE3',     'F j, Y ');
define('DT_TIME1',     'H:i:s');
define('DT_TIME2',     'H:i');

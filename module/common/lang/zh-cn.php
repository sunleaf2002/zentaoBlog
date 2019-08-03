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
$lang->zentaophp = '孙大侠的博客';
$lang->welcome   = '孙大侠, 做最更高水平的程序员！';
$lang->intro     = '<strong>孙大侠的博客</strong> 记录所涉及到的技术细节......';
$lang->more      = ' 进入博客 &raquo;';
$lang->save      = '保存';
$lang->loading   = '稍后...';
$lang->goback    = '返回';
$lang->slogan->first = '非常努力';
$lang->slogan->second = '步履不停';
$lang->slogan->third = '心若阳光';
$lang->slogan->fourth = '独立特行';
$lang->slogantext->first = '非常努力，毫不费力';
$lang->slogantext->second = '步履不停，人生畅行';
$lang->slogantext->third = '心若阳光，无畏悲伤';
$lang->slogantext->fourth = '独立特行，自命不凡';

/* The menu items. */
$lang->menu = new stdclass();
$lang->menu->index = '所有文章';
//$lang->menu->blog  = '演示';
$lang->menu->dev  = '开发';
$lang->menu->service  = '运维';
$lang->menu->tool  = '工具';
$lang->menu->read  = '读书';
$lang->menu->sport  = '运动';

/* Error message. */
$lang->error = new stdclass();
$lang->error->length          = array("『%s』长度错误，应当为『%s』", "『%s』长度应当不超过『%s』，且不小于『%s』。");
$lang->error->reg             = "『%s』不符合格式，应当为:『%s』。";
$lang->error->unique          = "『%s』已经有『%s』这条记录了。";
$lang->error->notempty        = "『%s』不能为空。";
$lang->error->empty           = "『%s』必须为空。";
$lang->error->equal           = "『%s』必须为『%s』。";
$lang->error->int             = array("『%s』应当是数字。", "『%s』应当介于『%s-%s』之间。");
$lang->error->float           = "『%s』应当是数字，可以是小数。";
$lang->error->email           = "『%s』应当为合法的EMAIL。";
$lang->error->date            = "『%s』应当为合法的日期。";
$lang->error->account         = "『%s』应当为合法的用户名。";
$lang->error->passwordsame    = "两次密码应当相等。";
$lang->error->passwordrule    = "密码应该符合规则，长度至少为六位。";

/* Pager items. */
$lang->pager = new stdclass();
$lang->pager->noRecord  = "暂时没有记录";
$lang->pager->digest    = "共<strong>%s</strong>条记录，每页 <strong>%s</strong>条，页面：<strong>%s/%s</strong> ";
$lang->pager->first     = "首页";
$lang->pager->pre       = "上页";
$lang->pager->next      = "下页";
$lang->pager->last      = "末页";
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

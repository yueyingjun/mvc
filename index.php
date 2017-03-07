<?php
define("MVC","yes");
define("ROOT_URL",__DIR__);
define("LIBS_URL",ROOT_URL."/libs");
define("TPL_INDEX_URL",ROOT_URL."/template/index");
define("TPL_ADMIN_URL",ROOT_URL."/template/admin");

define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));

define("FILE_URL","http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]);

define("CSS_PATH",HTTP_URL."/static/css");
define("JS_PATH",HTTP_URL."/static/js");
define("IMG_PATH",HTTP_URL."/static/imgs");
define("EDIT_PATH",HTTP_URL."/static/edit");
define("FONT_PATH",ROOT_URL."/static/font");

include LIBS_URL."/db.class.php";
include LIBS_URL."/session.class.php";
require LIBS_URL."/code.class.php";
require LIBS_URL."/pages.class.php";
require LIBS_URL."/infinite.class.php";
require LIBS_URL."/indexMain.class.php";
require LIBS_URL."/functions.php";
include LIBS_URL."/main.class.php";
include LIBS_URL."/route.class.php";
require LIBS_URL."/smarty/Smarty.class.php";

$route=new route();
$route->init();











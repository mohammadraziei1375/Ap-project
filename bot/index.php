<?php

$token = "541079227:AAF8bMN4TZWTIU92Q5DpSMMQIMc5veSelec";

if( !isset($_GET["token"]))
    exit();
if( $_GET["token"] != $token )
    exit();

require_once ("sql_class.php");
require_once ("bot_class.php");
require_once ("input_analyzer_class.php");
require_once ("stack_class.php");

$input = file_get_contents('php://input');
$input = json_decode($input, TRUE);


$DB_arr = array("127.0.0.1","telegr28_admin","Pwu-Buu-2yY-b2Q","telegr28_bot");

$DB = new sql_class( $DB_arr );
$input_anz = new input_analyzer_class( $input );
$user = new user_class($input[$input_anz->slug]["from"] , $DB);
$BOT = new bot_class( $token , $user );


$BOT->init();
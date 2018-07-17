<?php

require_once("bot.php");

$token = "541079227:AAF8bMN4TZWTIU92Q5DpSMMQIMc5veSelec";

$bot = new BOT( $token, 1 , $DB_conn ); //DB_conn default false || 1 : bot 1 in DB

$bot->init();
///------------------------------------------------------------

public function init(){

    $command = $this->command();
    $this->user->update();

    if( $command == "start" || $command == "restart" || $command = "update"){
        $btn = array(
            array("فارسی"),
            array("English")
        );
        $this->sendMessage($this->default->parse("init","chooseLang"),$btn);
        $user->stack->go(1);//1
        die();
    }
    if( $user->stack->Status() == 1 ){
        if( $this->text() == "English" ) {
            $this->set_lang("en");

        }elseif( $this->text() == "فارسی" ) {
            $this->set_lang("fa");
        }
        else {
            die();
        }
        $user->stack->go(2);
    }

    if( $user->stack->at(0) == 0){

        switch ( $user->stack->Status() ) {
            case 2:
                $btn = array(
                  array( $this->default->parse("init","logUp") ),
                  array( $this->default->parse("init","logIn") ),
                  array( $this->default->parse("init","skip") )
                );
                $this->sendMessage( $this->default->parse("init","skip")  ,$btn);
                $user->stack->go(3);
                break;
            case 3:


        }

    }


}

///------------------------------------------------------------

//read file with lang
$prs = new parser( $bot->lang() , false );//access lang file --->  functions: parse,langFile,lang,subFile
// (example):::::  parse(class : "default buttons" , string : $str )


$default_btn = array(
    array($prs->parse("chat_buttons","profile"),$prs->parse("chat_buttons","menu")),
    array($bot->defaults->parse("buttons","contactUs"),$bot->defaults->parse("default buttons","help"),$bot->defaults->parse("default buttons","donate")),
    array( ":arrow_left:", ":stop_button:", ":arrow_right:" , ":arrows_counterclockwise:")
);
//this is return of create_default_keyboard() in bot_class;
// bot_class has $defaults = new parser( $this->lang() );

//$added_btn = $default_btn + array(array($prs->parse("chat_buttons","new"), $prs->parse("chat_buttons","join") )); //  $prs.parse("chat_buttons","search")


switch ( $bot->text ){

    //////defaults//////
    case  $prs->parse("chat_buttons","help") :
        $bot->defults->sendfile($prs->subFile("help.pdf"));//$bot.sendfile("help-".$lang.".pdf");
        break;
    case $bot->defults->parse("chat_buttons","donate") :
        $bot->user->stack->go(90);
        exit();
        break;
    case $bot->defults->parse("chat_buttons","contactUs") :
        $bot->user->stack->go(80);
        exit();
        break;
    case $bot->defults->parse("chat_buttons","profile") :
        $bot->profile();
        $bot->user->stack->go(50);
        exit();
        break;
    case ":arrow_left:" :
        $bot->user->stack->back();
        exit();
        break;
    case ":stop_button:" :
        $bot->user->stack->home();
        exit();
        break;
    case ":arrow_right:" :
        $bot->user->stack->forward();
        exit();
        break;
    case ":arrows_counterclockwise:" :
        $bot->restart();
        exit();
        break;
    ///////END defaults/////////



}

switch ( $bot->user->stack )
{
    //////defaults//////
    case 90 :
        $bot->sendMessage($bot->defaults->parse("errors","sorry"));
        break;
    case 80 :
        $bot->sendMessage($bot->defaults->parse("errors","sorry"));
        break;
    case 50 :
        switch ($bot->text )
        {
            case $bot->default->parse("profile","thisBot") :
                require_once("branchProfile.php");
                $bot->user->stack->go(500);
                exit();
                break;
            case $bot->default->parse("profile","AllBots") :
                require_once("profile.php");
                exit();
                break;
        }
        break;
    ///////END defaults/////////

}


switch ( $bot->text ){

    case $prs->parse("chat_buttons","menu") :
        $btn = array($prs->parse("menu","new_branch"),$prs->parse("menu","join_branch"));
        $bot->sendMessage($bot->defaults->parse("menu","init"),$btn + $bot->tooltips());
        $bot->user->stack->go(100);
        exit();
        break;

}

switch ( $bot->user->stack ) {
    case 100 :
        if ($bot->text == $prs->parse("menu", "new_branch")) {
            $bot->sendMessage($prs->parse("menu", "chooseName"));
            $bot->user->stack->next();
            exit();

        } elseif ($bot->text == $prs->parse("menu", "join_branch")) {
            $bot->sendMessage($prs->parse("menu","enterChannelORsearch"));
            $USER = $bot->user->chat_id();
            $bot->sendMessage( ($prs->parse("menu","useLink"))."http://telegramadminpro.ml/channel_manager?ID=$USER");
            $bot->user->stack->go(104);
            exit();

        } else {
            $bot->sendMessage($bot->defaults->parse("errors", "notSupport"));
        }
        $bot->sendMessage($bot->defaults->parse("errors", "sorry"));

        break;
    case 101 :
        $check = $bot->branch->addBranch($bot->text);
        if ($check == null) {
            $bot->sendMessage($bot->default->parse("errors", "notResponding"));
            exit();
        } elseif ($check == false) {
            $bot->sendMessage($bot->defaults->parse("errors", "rename"));
            exit();
        }

        $bot->branch->setPrority($bot->user,10);
        $bot->sendMessage($prs->parse("menu","setCoAdmin"));
        $bot->user->stack->next();
        exit();
        break;
    case 102 :
        $check = $bot->text;
        if($check = "done"){
            $bot->sendMessage($prs->parse("menu","new_coAdmin_finish"),$bot->defaulbtn() );
            $bot->user->stack->home();
            exit();
        }
        $tempUser = $bot->branch->find_user_by_telegramID($check);
        if( $tempUser ){
            $bot->branch->add_user_to_branch($tempUser, $Name);
            $bot->branch->setPriority($tempUser,9);

        } else {
            $check = $bot->from();
            $tempUser = $bot->branch->find_user_by_telegramID($check);
            if ($tempUser) {
                $bot->branch->add_user_to_branch($tempUser, $Name);
                $bot->branch->setPriority($tempUser,9);
            }else{
                $check = $bot->text;
                $tempUser = $bot->branch->find_user_by_chatID($check);
                if( $tempUser ){
                    $bot->branch->add_user_to_branch($tempUser, $Name);
                    $bot->branch->setPriority($tempUser,9);

                }else{
                    $bot->sendMessage( $prs->parse("errors","not_user") );
                    exit();
                }
            }
        }

        $bot->sendMessage($prs->parse("menu","press_done_or_continue"),array(array("done")));
        exit();
        break;
    case 104 :
        $Name = $bot->branch->find_branch_byName($bot->text);
        if( $Name ){
            $bot->branch->add_user_to_branch($bot->user, $Name);
            $bot->user->stack->next();
        }else{
            $bot->sendMessage($bot->defaults->parse("errors", "rename"));
            exit();
        }
        break;
    case 105: /// site status
        $bot->sendMessage( ($prs->parse("menu","welcome_branch_1")).$Name.($prs->parse("menu","welcome_branch_2")) );
        $bot->user->stack->home();
        break;
    case 500:
        $state = $bot->command();
        if( ! is_numeric($state) ) {
            $bot->sendMessage( $bot->default->parse("errors","tryAgain") );
            exit();
        }
        $state = $bot->branch->selectBranch($state);
        if( !$state ) {
            $bot->sendMessage( $bot->default->parse("errors","tryAgain") );
            exit();
        }
        $bot->sendMessage($prs->parse("profile", "sendMessage"), $bot->tooltips());
        $bot->user->stack->next();
        exit();
        break;

    case 501 :
        $bot->sendMessage($prs->parse("profile","welldone"));
        $check =  $bot->branch->send_to_channel($bot->text,$bot->brancch->chooseBranch() );
        if($check)
        {
            $bot->sendMessage($prs->parse("profile","posted"));
        }
        else
        {
            $bot->sendMessage( $bot->default->parse("errors","unknown") );
        }
        $bot->user->stack->home();
        exit();
        break;
}














/*
$bot.start();
$bot.add_new_user();
$bot.update_by_json();

// add user to database
$user_id = $input[$slug]["from"]["id"];

$tmp = 'user_id='.(int)$user_id;
$user = $DB_conn->fetch('users',$tmp,true);
$sql = "SELECT * FROM ".$users_table." WHERE user_id=".(int)$user_id;
$user = check_exists($sql);

//NEW USER
if( !$user ){
 $digits = 7;
 srand(microtime());
 $rand = rand(pow(10, $digits-1), pow(10, $digits)-1);
 $serialized_user = serialize($input[$slug]["from"]);
 $username = (isset($input[$slug]["from"]["username"]))?$input[$slug]["from"]["username"]:"NO-USERNAME";
 $sql = sprintf('INSERT INTO `'.$users_table.'` (user_id,unique_id,chat_id,username,status_branch,lang_code) VALUES ('.$user_id.','.$rand.','.$input[$slug]["chat"]["id"].',"'.$username.'",0,"'.$input[$slug]["from"]["language_code"].'")', $conn->real_escape_string($serialized_user));
 $id_of_user = insert_data( $sql);
 $sql = "SELECT * FROM `".$users_table."` WHERE(id = ".$id_of_user.")";
 $user = fetch_data($sql);

}else{
 $id_of_user = $user[0]["ID"];
}


// if($bot->start())

// if(isset($input[$slug]["entities"][0]["type"]) and $input[$slug]["entities"][0]["type"] == "bot_command"){

//         $command = $input[$slug]["text"];
//         $command = explode(" ", $command);
//         if($command[0] == "/start"){


//          $sql = "UPDATE ".$users_table." SET status=1 WHERE ID=".$id_of_user;
         
//          if($conn->query($sql)){

//    }else{
//     log_status("Error: " . $sql . "<br>" . $conn->error);
//    }


//             $btn = array(array('فارسی'),array('English'));
//             $markup = array(
//                 'keyboard' => array($btn[0],$btn[1]),
//                 'resize_keyboard' => true, 
//                 'one_time_keyboard' => true
//             );
//             //$text = $lang["choose_languadge"];
//             $text = "زبان خود را انتخاب کنید";
//             send_message($input[$slug]["chat"]["id"],$text,$markup);
//         }
//         if($command[0] == "/help"){
//             $text = "ﺳﻼﻡ \n";
//             $text .= "ایﻥ ﺭاﻫﻨﻤﺎﻋﻪ: ﺑﻌﻨﻮاﻥ ﺭاﻫﻨﻤﺎیی ایﻧﻮ ﺑﺪﻭﻥ کﻩ ﺑﺎیﺩ کیﺭ ﺑﺨﻮﺭی\n";
//             $text .= $command[1];

//             send_message($input[$slug]["chat"]["id"],$text);
//         }
// }


?>*/
<?php

require_once ("sql_class.php");
require_once ("bot_class.php");
require_once ("pstack_class.php");
require_once ("analyzer.php");

$input = file_get_contents('php://input');
$input = json_decode($input, TRUE);

$anz = new analyzer($input);

// connecting to mysql
$DB_arr = array("127.0.0.1","telegr28_admin","Pwu-Buu-2yY-b2Q","telegr28_bot");

$DB_conn = new SQL($DB_arr);



// $users_table = "users";

// $conn = new mysqli($mysql_server, $DB_user, $DB_pass, $DB_name); 

// if($conn->connect_error){
//  if(isset($slug) and $slug == "message"){
//   log_status("Connection failed: " . $conn->connect_error);
//   send_message($input[$slug]["chat"]["id"],"ﻣﺘﺎﺳﻔﺎﻧﻪ ﺩﺭ ﺣﺎﻝ ﺣﺎﻇﺮ ﺑﺮای ﺳﺮﻭﺭ ﻣﺶکﻝی پیﺵ ﺁﻣﺪﻩ اﺳﺖ، ﻟﻄﻔﺎ ﺑﺎ ﺁیﺩی ﺩاﺧﻞ ﺗﻮﺽیﺣﺎﺕ ﺑﺎﺕ، ﺗﻤﺎﺱ ﺏگیﺭیﺩ");
//  }
//  die();
// }
// //MAIN BODY


// // add user to database
// $user_id = $input[$slug]["from"]["id"];
// $sql = "SELECT * FROM ".$users_table." WHERE user_id=".(int)$user_id;
// $user = check_exists($sql);

// //NEW USER
// if( !$user ){
//  $digits = 7;
//  srand(microtime());
//  $rand = rand(pow(10, $digits-1), pow(10, $digits)-1);
//  $serialized_user = serialize($input[$slug]["from"]);
//  $username = (isset($input[$slug]["from"]["username"]))?$input[$slug]["from"]["username"]:"NO-USERNAME";
//  $sql = sprintf('INSERT INTO `'.$users_table.'` (user_id,unique_id,chat_id,username,status_branch,lang_code) VALUES ('.$user_id.','.$rand.','.$input[$slug]["chat"]["id"].',"'.$username.'",0,"'.$input[$slug]["from"]["language_code"].'")', $conn->real_escape_string($serialized_user));
//  $id_of_user = insert_data( $sql);
//  $sql = "SELECT * FROM `".$users_table."` WHERE(id = ".$id_of_user.")";
//  $user = fetch_data($sql);

// }else{
//  $id_of_user = $user[0]["ID"];
// }


// // message proccessign
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
// else{
//  if( (int)$user[0]["status"] == 1 ){
//   if( $input[$slug]["text"] == "فارسی" ){
//    $sql = "UPDATE ".$users_table." SET lang_code=\"fa-IR\",status=0 WHERE ID=".$id_of_user;
         
//          if($conn->query($sql)){

//    }else{
//     log_status("Error: " . $sql . "<br>" . $conn->error);
//    }
//    send_message($input[$slug]["chat"]["id"],"ﺯﺑﺎﻥ ﺷﻤﺎ فارسی اﺳﺖ");
//   }
//   elseif( $input[$slug]["text"] == "English" ){
//    $sql = "UPDATE ".$users_table." SET lang_code=\"en-US\",status=0 WHERE ID=".$id_of_user;
         
//          if($conn->query($sql)){

//    }else{
//     log_status("Error: " . $sql . "<br>" . $conn->error);
//    }
//    send_message($input[$slug]["chat"]["id"],"your languadge is English now");
//   }
//  }

// }
        
// function send_message ( $chatId, $message, $keyboard_markup = false ) {

//     if( !$keyboard_markup ){
//         $url = $GLOBALS["website"]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
//     }
//     else{
//         $keyboard_markup = json_encode($keyboard_markup);
//         $url = $GLOBALS["website"]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message)."&reply_markup=".$keyboard_markup;
//     }
//     file_get_contents($url);

// }

// function log_status( $log , $is_s = false ){
    
//     $time = date('m-d-Y - H:i:s');
    
//     if( !$is_s )
//         $log  = '::Log:: ' . $time . ' // ' . $log . PHP_EOL;
//     else
//         $log  = PHP_EOL . $log . PHP_EOL;
    
//     $path = dirname(__FILE__) . '/log.txt';
    
//     $file = fopen( $path , 'a' );
    
//     fwrite($file, $log);

//     // $file.fcolse();
// }

// function check_exists( $sql){

//  global $conn;

//  $result = $conn->query($sql);

//  if ($result->num_rows == 0){
//   return false;
//  }
//  else{
//   $i = 0;
//   $res = array();
//   while($row = $result->fetch_assoc()) {
//    $res[$i] = $row;
//    $i++;
//   }
//   return $res;
//  }

// }
// function fetch_data( $sql){
//  global $conn;

//  $result = $conn->query($sql);
//  if ($result->num_rows > 0){
//   $i = 0;
//   $res = array();
//   while($row = $result->fetch_assoc()) {
//    $res[$i] = $row;
//    $i++;
//   }
//   return $res;
//  }
//  else
//   return false;
// }

// function insert_data( $sql){
//  global $conn;
//  if ($conn->query($sql) == TRUE) {
//      return $conn->insert_id;
//  } else {
//      log_status("Error: " . $sql . "<br>" . $conn->error);
//  }

// }
?>
<?php

class bot_class{

	private $token;
	private $DB;
	private $input;
	private $anz;
	private $stack;
	private $user_table_name;
	private $user;

	public function __construct( $t , $user ) {
	    global $input_anz;

	    $this->user = $user;
	    $this->user_table_name = "User_Bot";
	    $this->anz = $input_anz;
	    $this->DB = $DB;
		$this->token = $t;
        $this->stack = new stack_class();
//        $this->input =
	}

	public function init(){

	    global $user;

	    $commands = $anz->bot_commands();

	    if( $commands and (int)$commands[0]["offset"] == 0 and $commands[0]["text"] == "start" ){

	        if( !$user->user_id ){
                $this->reply("لطفا زبان خود را انتخاب کنید");
                $user->stack->go(1);
            }
            else{

            }

            if( $user->is_new() ){

	            if($user->stack->Status() == 1){
	                $opp = $this->set_lang($this->anz->the_text());
	                if( $opp->ok )
	                    $user->stack->go(2);
	                else
	                    $this->reply( $opp->error );

                }
                elseif ($user->stack->Status() == 2){

                }

            }

        }
    }










	public function input_text() {
        return $this->input[$this->anz.slug];
	}

	public function add_user(){

	    $user_args = array(
	        "Bot"   => $this->Bot_id,
            "user"  => $this->user->user_id,
            "status"=> $this->user->stack->Status,
            "path"  => $this->user->stack->Path
        );

	    $this->DB->insert_row( $this->user_table_name, $user_args);

	}

	public function update_user($DB_conn , $user_data){

	}
	public function update_user_status($user_id , $pstack){

	}

	public function send_message( $text, $chat_id , $keyboard_markup = false ) {

	}

	public function create_inline_keyboard( $btn ) {
		$markup = array(
			"inline_keyboard" => $btn
		);
	}

	public function start() {

		if($this->input) {

			if(isset($input[$slug]["entities"][0]["type"]) and $input[$slug]["entities"][0]["type"] == "bot_command"){

		        $command = $input[$slug]["text"];
		        $command = explode(" ", $command);
		        if($command[0] == "/start"){
		        	// $sql = "UPDATE ".$users_table." SET status=1 WHERE ID=".$id_of_user;
		        	$stack = new pstack("0 1",1);
		        	$this->update_user_status($user_id,$stack);
		        	// $this->DB_conn->update_row($sql);
		        }
		        else 
		        	return false;
		   	}
		   	else
		   		return false;

		}
		
	}
	public function forward_message() {

	}

//	public function init() {
//
//	    if($this->input.command() == "start"){
//
//	        if(true){
//                $this->add_user();
//            }
//
//        }
//        $this->update_user();
//
//    }
}



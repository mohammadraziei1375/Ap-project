<?php

class user_class{

    public $user_id;
    public $user_obj;
	public $chat_id;
	public $data;
	public $stack;
	private $DB;
	private $table_name;

	public function __construct( $data , $DB ) {

	    $this->DB = $DB;
	    $this->table_name = "User_Massengers";

		$this->chat_id = (int)$data["chat_id"];
		$this->data = $data;

        $this->add_new();

        $this->stack = new stack_class($this->user_obj["path"] , (int)$this->user_obj["status"]);

	}

	private function check_exists(){

        if( !$this->user_obj )
            return false;
        else
            return $this->user_obj["ID"];
    }

    private function get_user_obj(){

        global $DB;

        $user_obj = $DB->get_user_by_chat_id( $this->chat_id );

        if(!$user_obj)
            return false;
        else
            return $user_obj[0];

    }

    public function is_new(){
        if( $this->stack->at(0) == 0 )
            return true;
        else
            return false;
    }

    public function add_new(){

	    $this->user_obj = $this->get_user_obj();

	    if( !$this->user_obj ){

	        $user_args = array(
	            "Massenger" => "telegram",
                "user_id"   => $this->chat_id,
                "user_name" => $this->data["username"],
                "last_time" => time(),
                "priority"  => 0
            );

	        $this->DB->insert_row( $this->table_name, $user_args);

            $this->user_obj = $this->get_user_obj();
        }

        $this->user_id = $this->check_exists();


    }

    public function __destruct()
    {
        $this->update();
    }


}
<?php

class user{
	public $ID;
	public $user_id;
	public $chat_id;
	public $unique_id;
	public $username;
	public $is_programmer;
	public $is_banned;
	public $email;
	public $password;

	public function __construct( $user_arr ){
		$this->ID = $user_arr["id"];
	}

    public function get_user_by_id($user_id) {

    }
    public function get_user_by_telegramID($user_id) {//raz

    }

    public function get_user_by_query($filter_query) {

	}

	public function update_user($user_id,$arr) {

	}

	public function update_user_by_json($json_arr) {

	}

	public function add_new_user() {

	}

	public function delete_user() {

	}

	public function update_status( $new_status ) {

	}

	// ? public function load_sql( $ID ) {
	// ?
	// ? }


}
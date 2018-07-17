<?php

	class sql_class{

        private $conn;

		public function __construct( $arr ) {
			$this->conn = new mysqli($arr[0], $arr[1], $arr[2], $arr[3]);
			if( $this->conn->connect_error){

			}
		}

//        private function connect($sql) {
//            if( $this->conn->query( $sql ) )
//                return true;
//            else
//                return $this->conn->error;
//        }


		public function get_user_by_chat_id( $chat_id ){

			$table_name = "User_Massengers";
			$sql = "SELECT * FROM table_name WHERE(user_id=". (int)$chat_id .")";

			$result = $this->conn->query( $sql );

			if( $result->num_rows == 0 )
				return false;
			else
				return $result->fetch_array();

		}


		public function insert_row( $table, $arr) {

			$key_text = "";
			$value_text = "";

			foreach ($arr as $key => $value) {
				$key_text .= $key . ",";
				$value_text .= $value . ",";
			}

			$key_text = rtrim($key_text,',');
			$value_text = rtrim($value_text,',');

			$sql = "INSERT INTO `". $table ."` (". $key_text .") VALUES( ". $value_text .")";

            return $this->conn->query($sql);
		}

		public function update_row( $table, $set, $filter_query)
		{
			$set_text = "";
			foreach ($set as $key => $value) {
				$set_text .= $key ."=". $value ." , ";
			}
			$set_text = rtrim($set_text,',');

			$sql = "UPDATE `". $table ."` SET (". $set_text .") WHERE (". $filter_query .")";

			return $this->connect($sql);

		}

		public function delete_row($table,$filt)
		{
			$sql= "DELETE `".$table . "` WHERE (".$filt .")";
            return $this->connect($sql);
		}
	
		public function fetch( $table , $filter_query , $message_to_banned = false )
		{
			$sql = "SELECT * FROM `". $table ."` WHERE( ". $filter_query ;
			if(!$message_to_banned)
				$sql .= " and banned <> 1";
			$sql .= " )";
			$result =  $this->conn->query($sql);

			if ($result->num_rows > 0){
				
				$res = array();
				while($row = $result->fetch_assoc()) {

					array_push($res,$row);
					
				}
				return $res;
			}
			else
				return false;
		}


        public function create_table($table_name, $fields) {
            $sql = "CREATE TABLE ".$table_name." (";
            $set_text = "";
            foreach ($fields as $field) {
                $set_text .= $field["name"]." ".$field["type"]." ".$field["additional"]." , ";
            }
            $set_text = rtrim($set_text,',');
            return $this->connect($sql);
        }
//        public function drop_table() {
//
//        }
//        public function alter_table() {
//
//        }

	}

?>


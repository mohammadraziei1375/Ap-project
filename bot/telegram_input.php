<?php


class telegram_input
{
    private $input;
    private $message;
    private $entities;


    public function __construct( $telegram_message )
    {
        $this->input = $telegram_message;
        $this->determine_message_slug();

    }

    private function check_entities(){
        if(isset($this->message["entities"])){
            $this->entities = &$this->message["entities"];
        }else{
            $this->entities = false;
        }
    }

    private function determine_message_slug(){
        foreach ($this->input as $key) {
            switch( $key ){
                case "callback_query":
                    $this->message = &$this->input["callback_query"]["message"];
                    break;
                case defaut:
                    if( in_array( $key , array("message","edited_message","channel_post","edited_channel_post"))){
                        $this->message = &$this->input[$key];
                    }
                    else{
                        $this->message = false;
                    }
                    break;
            }
        }
        $this->check_entities();
    }

    public function default_keyboard()
    {
        $btn = array(array("راهنما", "ارتباط با ما"), array("donate", "پروفایل من"));
        $this->create_reply_keyboard($btn);
    }


    public function create_reply_keyboard( $btn, $resize_keyboard = true, $one_time_keyboard = true ) {
        $markup = array(
            'keyboard' => $btn,
            'resize_keyboard' => true,
            'one_time_keyboard' => true
        );
        return $markup;
    }

    public function get_message() {
        return $this->message;
    }

    public function get_message_text() {
        if(!$this->message)
            return false;
        else
            return $this->message->text;
    }

    public function bot_command(){
        foreach ($this->entities as $key=>$value){
            if($value["type"] == "bot_command"){
                $command = $this->message["text"];
                $command = substr( $command , $value["offset"] , $value["length"]);
                return $command;
            }
        }
        return false;
    }





//    from,get comment, get message, get type, user id, chat id, message id, date,

}
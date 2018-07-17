<?php

class input_analyzer_class
{
    private $input;
    public $slug;
    public $type;

    public function __construct($input)
    {
        $this->input = $input;
        $this->analyze();
    }

    private function analyze(){

        $this->slug = false;

        if(!isset($this->input["callback_query"]))
            foreach ($this->input as $key => $value) {
                switch ($key) {
                    case 'message':
                        $this->slug = "message";
                        break;
                }
            }

        if((!$this->slug) and (!isset($this->input["callback_query"])))
            die();

        if(isset($this->input["callback_query"]))
            $this->slug = "callback_query";
//log_status($this->slug);
        $this->type = false;
        if(!isset($this->input["callback_query"]))
            foreach ($this->input[$this->slug] as $key => $value) {
                switch ($key) {
                    case 'text':
                        $this->type = "text";
                        break;

                    case 'voice':
                        $this->type = "voice";
                        break;

                    case 'audio':
                        $this->type = "audio";
                        break;
                }
            }
        if((!$this->type) and (!isset($this->input["callback_query"])))
            die();
        if(isset($this->input["callback_query"]))
            $this->type = "text";
    }

    public function input_entities(){

        if( isset($this->input[$this->slug]["entities"]) ){

            $new_arr = $this->input[$this->slug]["entities"];
            $text = $this->the_text();

            foreach ( $new_arr as $key=>$value ){
                $new_arr[$key]["text"] = substr( $text, $value["offset"]+1,$value["length"]);
            }

            return $new_arr;
        }
        else{
            return false;
        }

    }

    public function bot_commands(){

        $ents = $this->input_entities();

        if( !$ents )
            return false;

        $cmnds = array();
        foreach ($ents as $key=>$value) {
            if($value["type"] == "bot_command")
                array_push( $cmnds, $value);
        }

        if( count($cmnds) > 0)
            return $cmnds;
        else
            return false;
    }

    public function the_text(){
        return $this->input[$this->slug]["text"];
    }

}
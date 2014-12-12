<?php

class DB{
    public $host;
    public $user;
    public $password;
    public $dbname;
    public $table;
    public $id;
    public $title;
    public $text;
    public function __construct($host, $user, $password, $dbname){
        mysql_connect($this -> host,$this -> user, $this -> password);
        mysql_select_db($this -> dbname);
    }
    public function Add_news($table, $title, $text){

        mysql_query("INSERT INTO" . $this -> table (title, text). VALUES($this-> title, $this -> text));
    }
    public function All_news($table){

        $res = mysql_query("SELECT * FROM" . $this ->table);
        if (!$res)
        {
            echo mysql_error();
            return [];
        }

        $ret = [];
        while ($row = mysql_fetch_assoc($res))
        {
            $ret[] = $row;
        }
        return $ret;
    }
}

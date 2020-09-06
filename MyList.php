<?php


class MyList
{
    public $size;
    public $elements;

    public function __construct($elements = "")
    {
        if (is_array($elements)){
            $this->size = $elements;
        } else {
            $this->elements = array();
        }
    }
    public function insert($index, $obj){

    }
    public function add($obj){
        array_push($this->elements, $obj);
    }
    public function remove($index){

    }
    public function get($index){
        if ($this->)
    }
    public function clear(){

    }
    public function addAll($arr){

    }
    public function indexOf($obj){

    }
    public function isEmpty(){

    }
    public function sort(){

    }
    public function reset(){

    }
    public function size(){

    }
}
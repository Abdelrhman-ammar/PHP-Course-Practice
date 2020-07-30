<?php


class task{
    protected $id;
    protected $description;
    protected $complete;
    public function isComplete(){
        return $this->completed;
    }
    public function completeTask(){
        $this->complete = true;
    }
    public function printObj(){
        echo '<pre>';
        var_dump($this);
        echo '</pre>';
    }
    public function getId(){
        return $this->id;
    }
    public function getDescription(){
        return $this->description;
    }
}
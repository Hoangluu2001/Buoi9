<?php
include_once ("Node.php");
class LinkList{
    private $firstNode;
    private $lastNode;
    private $count;
    function __construct()
    {
        $this->firstNode = NULL ;
        $this->lastNode = NULL ;
        $this->count = 0 ;
    }
    public function insertFirst($data){
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ( $this->lastNode == NULL ){
            $this->lastNode = $link;
            $this->count++;
        }
    }
    public function insertLast($data){
        if($this->firstNode != NULL ){
            $link = new Node($data);
            $this->lastNode->next = $link;
            $this->next = NULL ;
            $this->lastNode =$link;
            $this->count++;
        }else{
            $this->insertFirst($data);
        }
    }
    public function totalNodes(){
        return $this->count;
    }
    public function readList(){
        $lisData = array();
        $current = $this->firstNode;
        while ($current != NULL){
            array_push($lisData,$current->readNode());
            $current = $current->next;
        }
        return $lisData;

    }
}
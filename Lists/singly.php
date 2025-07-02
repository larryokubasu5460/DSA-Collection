<?php


class Node{
    public $data;
    public $next;
}

class LinkedList{
    private $head;

    public function __construct(){
        $this->head = null;
    }

    //ADD a new element at the end of the list
    public function push_back($newElement){

        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null;

        if($this->head == null){
            $this->head = $newNode;
        }else{
            $temp = $this->head;
            while($temp->next != null){
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }

    //Display the contents of the list
    public function printList(){
        $temp = new Node();
        $temp = $this->head;
        if($temp!=null){
            print("The list contains ");
            echo "\n";
            while($temp != null){
                print_r($temp->data. " ");
                $temp = $temp->next;
            }
        }
        else{
            print("The list is empty");
        }
    }
}

$myList = new LinkedList();

$myList->push_back(10);
$myList->push_back(20);
$myList->push_back(30);
$myList->printList();
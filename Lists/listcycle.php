<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        
        if($head == null){
            return false;
        }
        $slow = $head;
        $fast = $head;

        if($fast!=null && $fast->next!=null){
            $slow = $slow->next;
            $fast=$fast->next->next;
            if($fast===$slow){
                return true;
            }
        }
        return false;
    }
}

function hasCycle2($head){
    if($head == null){
        return false;
    }
    $slow = $head;
    $fast = $head->next;
    
    while($slow != $fast){

        if($fast == null && $fast->next ==null ){
            return false;
        }
        $slow = $slow->next;
        $fast = $fast->next->next;
    }
}
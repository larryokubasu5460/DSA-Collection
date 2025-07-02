<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
     $current_node = $head;
     
     while($current_node!=null && $current_node->next!=null){
        if($current_node->next->val == $current_node->val){
            $current_node->next = $current_node->next->next;
        }else{
            $current_node = $current_node->next;
        }
     }
     return $head;
    }
}
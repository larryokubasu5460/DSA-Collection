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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        while($head != null && $head->val==$val){
            $head = $head->next;
        }

        $current_node = $head;
        while($current_node!=null && $current_node->next!=null){
            if($current_node->next->val == $val){
                $current_node->next = $current_node->next->next;
            }else{
                $current_node = $current_node->next;
            }
        }
        return $head;
    }
}
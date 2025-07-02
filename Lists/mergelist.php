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
class Solution{
/**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
    
        $list3 = new ListNode(0);
        $current_node = $list3;
        while($list1!= null && $list2!=null){
            if($list1->val < $list2->val){
            $current_node->next = $list1;
            $list1 = $list1->next;
            }else{
                $current_node->next = $list2;
                $list2=$list2->next;
            }

            $current_node = $current_node->next;
        }

        if($list1!=null){
            $current_node->next = $list1;
            $list1=$list1->next;
        }
        if($list2 != null){
            $current_node->next = $list2;
            $list2 = $list2->next;
        }

        return $list3->next;
    }
}
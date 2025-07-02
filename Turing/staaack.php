<?php

// Implement a Stack which can...

// push an element onto the stack
// pop remove the top element from the stack and return the element
// count the number of elements on the stack
// peek at the top element without removing it
// max find the largest value in the stack
// You can assume that this stack only holds integers.
class Stack
{
    private $stuck;
    public function __construct(){
        $this->stuck = [];
    }
    public function pushStack($val)
    {
        return $this->stuck[] = $val;
    }

    public function popStack(){
        $n = sizeof($this->stuck)-1;
        $res = $this->stuck[$n];
        unset($this->stuck[$n]);
        return $res;
    }

    public function countStack(){
        $idx = 0;
        if(empty($this->stuck))
        {
            return 0;
        } else {
            foreach ($this->stuck as $val) {
                $idx++;
            }
            return $idx;
        }
    }

    public function peekStack()
    {
        $n = sizeof($this->stuck)-1;
        return $this->stuck[$n];
    }

    public function maxStack(){
       
        $max = $this->stuck[0];
        foreach($this->stuck as $val){
            if($val > $max){
                $max = $val;
            }
        }
        return $max;
    }
}


$stak = new Stack();
print("Stack created");
echo "\n";
print("Count stack: ");
print_r($stak->countStack());
echo "\n";
print("Push into stack " . $stak->pushStack(4));
echo "\n";
print("Count stack: " . $stak->countStack());
echo "\n";
print("Peek" . $stak->peekStack());
echo "\n";
print("Count stack: " . $stak->countStack());
echo "\n";
print("Push into stack " . $stak->pushStack(5));
echo "\n";
print("Push into stack " . $stak->pushStack(3));
echo "\n";
print("Pop item : " . $stak->popStack());
echo "\n";
print("Count items in stack: " . $stak->countStack());
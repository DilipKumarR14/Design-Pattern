<?php
class utility
{
    public function getstring()
    {
        $name = readline();
        if (preg_match('/[0-9]/', $name)) {
            echo "enter valid string \n";
            return $this->getstring();
        } else {
            return $name;
        }
    }
    public function getint()
    {
        fscanf(STDIN, '%d', $num);
        if (filter_var($num, FILTER_VALIDATE_INT)) {
            return $num;
        } else {
            echo "enter valid number \n";
            return $this->getInt();
        }
    }
    function test(){
        $e1 = new Emp();
        $e1->set('Dilip',1,21);
        
      
        echo 'Name  : '.$e1->getName()."\n";
        echo 'id  : '.$e1->getId()."\n";
        echo 'age : '.$e1->getAge()."\n";
      
      echo "\n";
      //cloning the previous Object of type e1
        $name2 = clone $e1;
        $name2->set('SUman',2,24);
        
      
        echo 'Name  : '.$name2->getName()."\n";
        echo 'id  : '.$name2->getId()."\n";
        echo 'age  : '.$name2->getAge()."\n";
      }
}

<?php
class utility
{
    public function getstring()
    {
        $name = readline();
        if (preg_match('/[0-9]/', $name)) {
            echo "enter valid string \n";
            return $this->getSting();
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
}

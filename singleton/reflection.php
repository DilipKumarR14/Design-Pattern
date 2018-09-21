<?php
class User 
{
    protected $loggedin=false;
    protected $data=[];
        

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
    public function isLoggedIn(){
        return $this->$loggedin;
    }
}

$rc=new ReflectionClass();
echo print_r(get_class_methods($rc),true);
// echo $rc->getMethod('setData');
?>
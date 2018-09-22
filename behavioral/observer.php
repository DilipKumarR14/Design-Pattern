<?php
/*******************************************************************************
* @description : Observer design pattern
* @register() :User is able to Register to the particular subject
* @unregister() : User is able to un-Register to the particular subject
* @notifyObserver() :user will be notified of any update
* @getUpdate() : user is able to get update
* @update() : fetch the update
* @setSubject() : set the subject to get update
*******************************************************************************/

/*@var $obj = Receive the object of type Observer*/
interface Subject
{
    public function register(Observer $obj);
    public function unregister(Observer $obj);
    public function notifyObserver();
    public function getUpdate(Observer $obj);
}
/*@var $sub = Receive the object of type Subject*/

interface Observer
{
    public function update();
    public function setSubject(Subject $sub);
}
//Subscriber
class MyTopic implements Subject
{
    public $observers;
    private $message;
    // private $changed;

    public function __construct()
    {
        $observers = array();
    }
    /**
     * user is able to register 
     */
    public function register(Observer $obj)
    {
        print("Subject: Attached an observer.\n");
        $this->observers[] = $obj;

    }
    /**
     * user is able to unregister 
     */
    public function unregister(Observer $obj)
    {
        foreach ($this->observers as $key => $s) {
            if ($s === $obj) {
                unset($this->observers[$key]);
                print("Subject: Detached an observer.\n");
            }
        }
    }
    /**
     * user will be notified 
     */
    public function notifyObserver()
    {
        print("Subject: Notifying observers...\n");
        foreach ($this->observers as $obj) {
            $this->getUpdate($obj);
        }
    }
    /**
     * user is able to get update available 
     */
    public function getUpdate(Observer $obj)
    {
        return $this->message;
    }
    /**
     * posting the message to user 
     */
    public function postMessage($message)
    {
        $this->message = $message;
        $this->changed = true;
        $this->notifyObserver();
    }

}

class MyTopicSubscriber implements Observer
{
    private $name;
    private $topic;
    public function __construct($name,$topic)
    {
        $this->name = $name;
        $this->topic = $topic;
    }
    /**
     * Channel give the update to user 
     */
    public function update()
    {
        echo "Today topic is on  : " . $this->name . "\n";
        echo "New Video is Added : ".$this->topic."\n";
    }
    /**
    *set the subject to get update
    */
    public function setSubject(Subject $sub)
    {
        $this->topic = $sub;
    }
}


?>
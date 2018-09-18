<?php
interface Subject
{
    public function register(Observer $obj);
    public function unregister(Observer $obj);
    public function notifyObserver();
    public function getUpdate(Observer $obj);
}
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
    public function setSubject(Subject $sub)
    {
        $this->topic = $sub;
    }
}

$t = new MyTopic();
$o = new MyTopicSubscriber('New video Added','ganganmstyle.mp4');
$o1 = new MyTopicSubscriber('New video Added','ganganmstyle.mp4');
$o2 = new MyTopicSubscriber('New video Added','gangnamstyle.mp4');
$t->register($o);
$t->register($o1);
$t->register($o2);
$t->unregister($o1);
$t->notifyObserver();
$t->getUpdate($o);
$t->postMessage("Updated Available\n");
$o->update();

print_r($t);
echo "\n";

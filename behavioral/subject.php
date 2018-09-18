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
class MyTopic implements Subject
{
    public $observers;
    private $message;
    private $changed;

    public function __construct()
    {
        $observers = array();
        $this->message = $this->getUpdate();
        $this->changed = $this->notifyObserver();
    }
    public function register(Observer $obj)
    {
        print("Subject: Attached an observer.\n");
        $this->observers[] = $obj;

    }
    public function unregister(Observer $obj)
    {
        foreach ($this->observers as $key => $s) {
            if ($s === $obj) {
                unset($this->observers[$key]);
                print("Subject: Detached an observer.\n");
            }
        }
    }
    public function notifyObserver()
    {
        print("Subject: Notifying observers...\n");
        foreach ($this->observers as $obj) {
            $res = "subscription is getting expired\n";
            echo $res;
            echo "\n";
        }
    }

    public function getUpdate(Observer $obj)
    {
        foreach ($obj as $key => $value) {
            $res = "new video is added\n";
            echo $res;
            echo "\n";
        }
    }
    public function postMessage()
    {
        $res = "new Update is available\n";
        return $res;
    }

}

class MyTopicSubscriber implements Observer
{
    public function update()
    {
        $t = new MyTopic();
        $t->getUpdate();

    }
    public function setSubject(Subject $sub)
    {
        $sub = $this->update();
        return $sub;
    }
}

$t = new MyTopic();
$o = new MyTopicSubscriber();
$o1 = new MyTopicSubscriber();
$o2 = new MyTopicSubscriber();

$t->register($o);
$t->register($o1);
$t->register($o2);
print_r($t);

?>
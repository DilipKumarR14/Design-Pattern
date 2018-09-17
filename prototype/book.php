<?php

abstract class BookPrototype {
    protected $title;
    protected $topic;
    abstract function __clone();
    function getTitle() {
        return $this->title;
    }
    function setTitle($titleIn) {
        $this->title = $titleIn;
    }
    function getTopic() {
        return $this->topic;
    }
}

class PHPBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'PHP';
    }
    function __clone() {
    }
}
$phpProto = new PHPBookPrototype();

$book1 = clone $phpProto;
$book1->setTitle('SQL For Cats');
echo('Book 1 topic: '.$book1->getTopic())."\n";
echo('Book 1 title: '.$book1->getTitle())."\n";
echo('');


?>
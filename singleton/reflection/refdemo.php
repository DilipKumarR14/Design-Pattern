<?php
 namespace Facebook\Entities;

class UUID {}  
abstract class Entity {}  
interface Friendable {}  
interface Likeable {}  
interface Postable {}

class User extends Entity implements Friendable, Likeable, Postable {  
public function __construct($name, UUID $uuid){}  
public function like(Likebable $entity){}  
public function friend(User $user){}  
public function post(Post $post){}  
}

$reflection = new \ReflectionClass(new User("YourSelf", new UUID(1234)));  

echo $reflection->getName()."\n";
echo $reflection->getParentClass()."\n";
$res= $reflection->getInterfaceNames();
var_dump($res);
echo $reflection->getConstructor()."\n";

?>
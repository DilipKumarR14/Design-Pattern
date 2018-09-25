<?php
// Composer autoloader - used for autoloading doctrine components
require_once 'vendor/autoload.php';
// Contains blueprints of the different annotations types as classes
require_once 'annotations.php';
//The example class to demonstrate annotations
/**
 * @AnnotatedDescription("The class demonstrates the use of annotations")
 */
class AnnotationDemo
{
    /**
     * @AnnotatedDescription("The property is made private for a subtle reason")
     */
    private $property = "I am a private property!";
    /**
     * @AnnotatedDescription(desc ="The property is made private for a subtle reason", type="getter")
     */
    public function  getProperty()
    {
        return $this->getProperty();
    }
}
// Lets parse the annotations
use Doctrine\Common\Annotations\AnnotationReader;
$annotationReader = new AnnotationReader();
//Get class annotation
$reflectionClass = new ReflectionClass('AnnotationDemo');
$classAnnotations = $annotationReader->getClassAnnotations($reflectionClass);
echo "========= CLASS ANNOTATIONS =========" . PHP_EOL;
var_dump($classAnnotations);
// You can also pass ReflectionObject to the same method to read annotations in runtime
$annotationDemoObject = new AnnotationDemo();
$reflectionObject = new ReflectionObject($annotationDemoObject);
$objectAnnotations = $annotationReader->getClassAnnotations($reflectionObject);
echo "========= OBJECT ANNOTATIONS =========" . PHP_EOL;
var_dump($objectAnnotations);
//Property Annotations
$reflectionProperty = new ReflectionProperty('AnnotationDemo', 'property');
$propertyAnnotations = $annotationReader->getPropertyAnnotations($reflectionProperty);
echo "=========   PROPERTY ANNOTATIONS =========" . PHP_EOL;
var_dump($propertyAnnotations);
// Method Annotations
$reflectionMethod = new ReflectionMethod('AnnotationDemo', 'getProperty');
$methodAnnotations = $annotationReader->getMethodAnnotations($reflectionMethod);
echo "=========   Method ANNOTATIONS =========" . PHP_EOL;
var_dump($propertyAnnotations);
?>
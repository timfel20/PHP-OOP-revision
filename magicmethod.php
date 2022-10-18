<?php
class MagicMethod
{
    // Static properties..... Their value can change but they remain same fot class anad instances
    public static int $count = 0;


   //Increamenting count behind the scenes 
    public function __construct(){
    self::$count++;
    }

    public function getCount(){
    return self::$count;
    }

    //we can use unset to stop the action but it might not work if the desctructor is not backing it up
    public function __destruct()
    {
        self::$count--;
    }

}

$magicMethod = new MagicMethod();
$magicMethod2 = new MagicMethod();
unset($magicMethod2);

//random note---print_r is used to view variables e.g print_r($magicMethod2)
echo $magicMethod->getCount();

//there are more ecamples like 
// __get(for accessing private and protected properties), __toString(), __call(), __set(), __unset()
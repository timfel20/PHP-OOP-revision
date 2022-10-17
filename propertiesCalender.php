<!-- properties, class constant and static properties-->
<?php
class PropertiesCalender
{
    // Static properties..... Their value can change but they remain same fot class anad instances
    public static $count = 0;

    const MONTHS_IN_YEAR = 12;

    //to access the constant in the class we can use the self keyword

    public function getMonthsInYear(){
        return self::MONTHS_IN_YEAR;
    }

    public function __construct(){
    self::$count++;
    }
}

$propertiesCalender = new PropertiesCalender;

// to access the constant outside it's class, we can use this way called scope resolutional operator 
echo PropertiesCalender::MONTHS_IN_YEAR . PHP_EOL;
//PHP_EOL is like <br>. For line break

//printinmg it out because we've already use getter to  make the const accessible, 
$propertiesCalender->getMonthsInYear();

//for the static property 
echo PropertiesCalender::$count;

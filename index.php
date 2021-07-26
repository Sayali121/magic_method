<?php
function __autoload($className)
{
	include_once"classes/$className.php";
}
$obj = new ABC();
$obj1 = new XYZ();
//print_r($obj);
//echo get_class($obj);
//echo $obj;
echo $obj(3,4,6);

$obj->Demo('2','3','4','5');
ABC::Show('Sayali','Pooja');
var_dump(isset($obj1->def));

// $array = ['a'=>'value of a','b'=>'value of b'];
// print_r($array);
// unset($array['a']);
// print_r($array);
//echo $obj1->xyz;
unset($obj1->xyz);
echo $obj1->xyz;
?>
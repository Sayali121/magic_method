<?php
class ABC
{
	private $abc;
	public function __toString()
	{
		return get_class($this);
	}
    
    public function __invoke($a,$b,$c)
    {
        echo "value of para1 : $a";
        echo "value of para1 : $b";
        echo "value of para1 : $c";
    }


	public static function __callstatic($name,$array)
	{
		echo"Trying to call a Static function named is $name";

		print_r($array);
	}

	public function __call($name,$array)
	{
		echo"Trying to call a function named is $name";
		echo "<pre>";
		print_r($array);
	}

}
?>
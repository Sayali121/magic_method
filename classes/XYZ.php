<?php
class XYZ
{
	private $array=['abc'=>'value of abc','xyz'=>'value of xyz'];
	//public $xyz = "Sayali";
	//public $def="hi";
	public function __toString()
	{
		return get_class($this);
	}

	public function __unset($name)
	{
       unset($this->array[$name]);
	}
	public function __isset($name)
	{
		if(array_key_exists($name, $this->array))
		{
			return $this->array[$name];
		}
		else
		{
			return false;
		}
	}

	public function __get($name)
	{
		if(array_key_exists($name, $this->array))
		{
			return $this->array[$name];
		}
		else
		{
			echo "Trying to access non existing variable $name";
		}
	}
}
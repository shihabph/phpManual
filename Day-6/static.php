<?php 
class StaClass{
	public static $var="HEy Man!!";
	public static function funcname()
	{
		echo self::$var;
	}
}
// StaClass::$var;
StaClass::funcname();
?>
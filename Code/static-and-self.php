<?php 

	class A 
	{
	    public static function get_self()
	    {
	        return new self();
	    }

	    public static function get_static()
	    {
	        return new static();
	    }
	}

	class B extends A { }

	var_dump( B::get_self() );  // A
	
	var_dump( B::get_static() ); // B

	var_dump( A::get_self() ); // A
	
	var_dump( A::get_static() ); // A


 ?>
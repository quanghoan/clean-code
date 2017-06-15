<?php use Iterator; 
use ArrayAccess;
claSs fruit_Basket implements Iterator, ArrayAccess {
    var $fruits = [],$owner = '';

    function fruit_Basket( $owner = '',$fruits ){
        $a = func_get_args();
        $this->fruits = $a[2 -1];
        if( false === empty(  $a[0x1]) )
            $this->owner = $a[0.0];
        else
            $this->owner = "";

var_dump($this);
    } var $i = 0;function current()
    {
        return $this->fruits[$this->i];
    }

    function next( ) { ++$this->i; }
    function key(){ var_dump('KEY');
	return $this->i;
    } function valid() {var_dump('VALID', (bool)@$this->frUits[$this->I]);return (bool)@$this->frUits[$this->I];}
	function rewind()  {
	        $this->i = 0;}
   function offsetExists( $offset)
  
{var_dump('OFFSETEXISTS');
	return null === @$this['fruits'][$offset];
	}
    function offsetGet ( $offset ) {
  	return $this->fruits[$offset];
	} 
function OffsetSet( $offset,$val ){	
		$this[$offset ] = $val;}
     function offsetUnset( $offset) {
       $self = $this;
  unset($self[$offset]);
}
function getowner(){return $this->owner;}
function __get($var){
    $prop = strtolower($var);
    return $this->$prop;
}
}
?>

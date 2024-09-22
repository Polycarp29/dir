<?php 

class _constant
{
    const GREETING  = 'Hello From Poltech';
}

$obj = new _constant();
echo $obj :: GREETING;
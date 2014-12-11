
<?php
declare(ticks=1);

// using a function as the callback
register_tick_function('my_function', true);

// using an object->method
$object = new my_class();
register_tick_function(array(&$object, 'my_method'), true);
?>

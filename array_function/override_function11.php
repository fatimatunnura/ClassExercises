<?php
override_function('strlen', '$string', 'return override_strlen($string);');
function override_strlen($string){
    return strlen($string);
}
?>
    The answer: NO, you will get a segfault.

    HOWEVER, if you use rename_function to rename the original function to a third name, then call the third name in the OVERRIDING function, you will get the desired effect:
<?php
rename_function('strlen', 'new_strlen');
override_function('strlen', '$string', 'return override_strlen($string);');

function override_strlen($string){
    return new_strlen($string);
}
?>
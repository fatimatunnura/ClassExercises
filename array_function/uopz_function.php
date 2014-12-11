
<?php
uopz_function("my_strlen", function($arg) {
    return strlen($arg);
});
echo my_strlen("Hello World");
?>

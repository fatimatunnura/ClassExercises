
<?php
function md5_and_reverse($string)
{
    return strrev(md5($string));
}

if ($dbhandle = sqlite_open('mysqlitedb', 0666, $sqliteerror)) {

    sqlite_create_function($dbhandle, 'md5rev', 'md5_and_reverse', 1);

    $sql  = 'SELECT md5rev(filename) FROM files';
    $rows = sqlite_array_query($dbhandle, $sql);
} else {
    echo 'Error opening sqlite db: ' . $sqliteerror;
    exit;
}
?>

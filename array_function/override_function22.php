
<?php
$httpd = explode(' ', $_SERVER['SERVER_SOFTWARE']);
if(substr($httpd[0], 0, 6)=='Apache' && substr($httpd[0], 7, 1)==2 && $httpd[1]=='(Win32)')
{
    if(isset($_SERVER['REQUEST_URI'])) $_SERVER['REQUEST_URI'] = str_replace('%2F', '/', rawurlencode(utf8_decode(rawurldecode($_SERVER['REQUEST_URI']))));
    if(isset($_SERVER['REDIRECT_URL'])) $_SERVER['REDIRECT_URL'] = str_replace('%2F', '/', rawurlencode(utf8_decode(rawurldecode($_SERVER['REDIRECT_URL']))));
    override_function('urlencode', '$url', 'return str_replace("%2F", "/", rawurlencode(utf8_encode($url)));');
}
?>
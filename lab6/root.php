<?php

echo 'Current script owner: ' . get_current_user()."<br />";


$rd = getenv('DOCUMENT_ROOT');
echo 'Current Directory: '. $rd. "<br />";

echo 'Operating System' . php_uname() . "<br />";
echo PHP_OS . "<br />" ;


if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo 'This is a server using Windows.';
} else {
    echo 'This is a server not using Windows.';
}
?>
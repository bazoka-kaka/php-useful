<?php
// setting the cookie
// key, value, expiry date, path saved
// setcookie('name', 'benzion-yehezkel', time() + 60, '/');

// deleting the cookie
setcookie('name', 'benzion-yehezkel', time() - 60, '/');

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

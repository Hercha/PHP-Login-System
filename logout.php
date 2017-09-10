<?php

$past = time() - 36000;

session_start();
session_destroy();
session_write_close();
setcookie(sesson_name().''.0'/');
session_regenerate_id(true);

?>

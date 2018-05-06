<?php
setcookie('ppmb_unair_token', "", time()-100000, "/", $_SERVER['HTTP_HOST'], 0, 1);
setcookie('ppmb_unair_email', "", time()-100000, "/", $_SERVER['HTTP_HOST'], 0, 1);
unset($_COOKIE["ppmb_unair_token"]);
unset($_COOKIE["ppmb_unair_email"]);
?>

<?php
unset($_COOKIE["ppmb_unair_token"]);
unset($_COOKIE["ppmb_unair_email"]);
setcookie("ppmb_unair_token","",time()-1);
setcookie('ppmb_unair_email',"",time()-1);
?>

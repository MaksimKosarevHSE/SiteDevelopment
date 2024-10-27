<?php
if($_SERVER["REQUEST_METHOD"] != "POST"){die();}
setcookie("token", "", time()-3600, "/", "hsehelpers.ru", false, true);
header("location: ../../../../");
?>
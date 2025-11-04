<?php
include "include/head.php";
include "include/header.php";
include "include/footer.php";

echo $Head + $foot;

// The Difference between Include and require
// th biggest difference is when a file is being included if that file cannot be opened so let'say the path is wrong the page will only be giving us an error message or a warning message and the scipt will continue on but for REQUIRE it will cause  fatal error and the rest of the script wont be shown

// Require once and include once will check whether the file has been added included or rquired and it won't required again and it is the best mostly for function stuff. 
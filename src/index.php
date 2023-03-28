<?php
function errorHandler($errno, $errstr)
{
    // echo (intl_error_name($errno));
    // echo($errno);
    switch ($errno) {
        case E_ERROR:
            echo "E_ERROR";
            break;
        case E_WARNING:
            echo "E_WARNING";
            break;
        case E_NOTICE:
            echo "E_NOTICE";
            break;
        case E_USER_ERROR:
            echo "E_USER_ERROR";
            break;
        case E_USER_WARNING:
            echo "E_USER_WARNING";
            break;
        case E_USER_NOTICE:
            echo "E_USER_NOTICE";
            break;
    }
}
set_error_handler("errorHandler", E_USER_ERROR);
$age = -10;
if($age <= 0){
    trigger_error("errorHandler", E_USER_ERROR);
}
?>
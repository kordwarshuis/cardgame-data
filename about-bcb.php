<?php
    header("Access-Control-Allow-Origin: *");
    header("content-type: text/html");
    echo file_get_contents("about-bcb.htm");
?>
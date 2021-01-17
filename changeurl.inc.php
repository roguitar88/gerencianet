<?php
if($_SERVER['HTTP_HOST'] == "localhost" || $_SERVER['HTTP_HOST'] == "127.0.0.1"){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $urltochange = explode("/", $url);
    $urltochange = "/".$urltochange[1];
}else{
    $urltochange = "http://".$_SERVER['HTTP_HOST'];
}
?>

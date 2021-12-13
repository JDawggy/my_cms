<?php


// this is to auto include any classes that i make in the future and forget to 
// add said class to the init.php file, the page will still load :) 
function classAutoLoader($class)
{
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    if (is_file($the_path)  &&  !class_exists($class)) {
        include $the_path;
    }
}

spl_autoload_register("classAutoLoader");



function redirect($location)
{
    header("Location: {$location}");
}

<?php

// Will show the entire path of the page the this is printed on ex: D:\XAMPP\htdocs\Gallery\admin\includes\Magic_Constants.php
echo __FILE__ . "<br>";


// Will show entire directory path, eding with directory name ex: D:\XAMPP\htdocs\Gallery\admin\includes
echo __DIR__ . "<br>";


// Will show the line which the ehco is on, of the page of code it is written on ex: line 10
echo __LINE__ . "<br>";


// Outputs yes
if (file_exists(__DIR__)) {
    echo "Yes <br>";
}


// Outputs yes
if (is_file(__FILE__)) {
    echo "Yes <br>";
}


// Outputs no
if (is_file(__DIR__)) {
    echo "Yes <br>";
} else {
    echo "no <br>";
}


// Outputs no
if (is_dir(__FILE__)) {
    echo "Yes <br>";
} else {
    echo "no <br>";
}


// Ternary operator -> short hand if else statement

//            statement           ?        : 
//    {         IF           } { THAN  }{ ELSE } 
//   echo file_exists(__FILE__) ? "yes" : "no";

echo file_exists(__FILE__) ? "yes" : "no";

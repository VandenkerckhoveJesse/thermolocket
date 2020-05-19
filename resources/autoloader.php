<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($class_name) {
    $path = $_SERVER["DOCUMENT_ROOT"]."/resources/src";
    $extension = '.class.php';
    $class_directories = getAllDirectories($path);
    $parts = explode('\\', $class_name);
    $file_name = end($parts) . $extension;

    foreach($class_directories as $class_directory) {
        $full_path = $class_directory.'/'.$file_name;
        if(file_exists($full_path)) {
            include_once $full_path;
            return true;
        }
    }
    return false;
}

function getAllDirectories($root) {
    $directories = array($root);

    for($i = 0; sizeof($directories) > $i; $i++) {
        $directories = array_merge($directories, getSubDirectories($directories[$i]));
    }
    return $directories;
}

function getSubDirectories($directory) {
    return array_filter(glob($directory.'/*'), 'is_dir');
}
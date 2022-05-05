<?php
function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            echo $path . "\n";
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            echo $path . "\n";
        }
    }

    return $results;
}

getDirContents('KMB 01-40');
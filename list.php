<?php
function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = "https://alkafiyah.github.io/" . $dir . "/". $value;
        if (!is_dir($path)) {
           echo '<div class="row">
                <a href="'.$path.'" class="list">
                    <img src="'.$path.'" alt="" class="voucher">
                </a>
            </div>';
            // echo $path . "\n";
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            echo $path . "\n";
        }
    }

    return $results;
}

getDirContents('CETAK FOTO');
<?php
    $path="upload/".$_SESSION['user']."/";
    if (!is_dir($path)) {
        mkdir($path,0777,true);
    }
?>
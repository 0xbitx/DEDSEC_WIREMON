<?php
$directory = 'icap';
$images = array_filter(scandir($directory), function($file) use ($directory) {
    return strpos($file, '.png') !== false && is_file("$directory/$file");
});

echo json_encode(['images' => array_values($images)]);
?>

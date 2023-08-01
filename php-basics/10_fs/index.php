<?php
// magic consts
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';

// create dir
mkdir("testdir");

// rename dir
rename("testdir", "renamed");

// delete dir
rmdir("renamed");

// read files and folders in dir
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
$content = file_get_contents(__DIR__ . '/lorem.txt');

file_put_contents(__DIR__ . '/lorem.txt', 'My Text:' . PHP_EOL . $content);

// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file
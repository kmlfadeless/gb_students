<?php

//spl_autoload_register(function ($class) {
//    $file = sprintf("src/%s.php", str_replace("\\", DIRECTORY_SEPARATOR, $class));
//    if (file_exists($file)) {
//        require $file;
//    }
//});

use GeekBrains\Blog\Post;
use GeekBrains\Person\Name;
use GeekBrains\Person\Person;

$post = new Post(
    new Person(
        new Name('Иван', 'Никитин'),
        new DateTimeImmutable()
    ),
    'Всем привет!'
);

$s = clone $post;
$s->text = 'Hi!<br /><br /><br /><br /><br /><br /><br /><br /><br />





Hi';

echo $s;

//$teacher = new \Geekbrains1\University\Teacher1();
//echo $teacher;
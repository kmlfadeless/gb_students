<?php

switch ($argv[1]) {
    case 'user':
        echo "Hi, User";
        break;
    case 'post':
        echo "Hi, post" . PHP_EOL;
        break;
    case 'comment':
        echo "Comment";
        break;
}
<?php

require_once 'class/post.php';
$post = new Post();

// File check - pretty arbitary
define('FILE_CHECK', 'mf7gf3jh');

// Name of directory where markdown posts are stored
define('POSTS_DIR', 'posts_source');

// Admin email address for debugging and notifications
define('ADMIN_EMAIL', 'jacob.bednarz@gmail.com');

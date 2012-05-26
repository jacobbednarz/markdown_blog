<?php

// Include global config
include_once 'config/config.php';

// Display the header files
include_once 'layouts/header.html';
echo '<h1>The blog archive</h1>';

function format_blog_title($title)
{
    return ucfirst(str_replace(array('posts_source/', '.md', '-'), array('', '', ' '), $title));
}

function path_to_post($title)
{
    return str_replace(array(POSTS_DIR, '.md'), array(''), $title);
}

$directory = POSTS_DIR . '/';
if (glob($directory . '*.md') != FALSE)
{
    $file_count = count(glob($directory . '*.md'));
    $files = glob($directory . '*.md', GLOB_NOSORT);
    array_multisort(array_map('filemtime', $files), SORT_NUMERIC, SORT_DESC, $files);
    foreach ($files as $file)
    {
        echo '<p><a href="posts' . path_to_post($file) . '">' . format_blog_title($file) . '</a></p>';
    }
}

include_once 'layouts/footer.html';

?>

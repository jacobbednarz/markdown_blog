<?php

// Include global config
include_once 'config/config.php';

// Display the header files
include_once 'layouts/header.html';
echo '<h1>The blog archive</h1>';

$directory = POSTS_DIR . '/';

// Ensure the directory isn't empty
if (glob($directory . '*.md') != FALSE)
{
    $file_count = count(glob($directory . '*.md'));
    $files = glob($directory . '*.md', GLOB_NOSORT);
    array_multisort(array_map('filemtime', $files), SORT_NUMERIC, SORT_DESC, $files);
    foreach ($files as $file)
    {
        echo '<p><a href="posts' . $post->path_to_post($file) . '">' . $post->format_blog_title($file) . '</a></p>';
    }
}

include_once 'layouts/footer.html';

?>

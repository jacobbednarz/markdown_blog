<?php

// Include the class and simple configuration file
include_once 'markdown.php';
include_once 'config/config.php';

$requested_post = htmlspecialchars(trim(stripslashes($_GET['name'])));
$posts_url = POSTS_DIR . DIRECTORY_SEPARATOR . $requested_post . '.md';

if (file_exists($posts_url) && preg_match('/[^a-z_\-0-9]/i', $posts_url))
{
    // Split the file into slugs and the post
    $file_pieces = $post->split_file(file_get_contents($posts_url));
    $post_data = $file_pieces[1];
    $post_content = $file_pieces[2];

    $post->slugify($post_data);

    // Parse it!
    $output = Markdown($post_content);

    // Make it pretty 
    include_once 'layouts/header.html';
    echo $output;
    include_once 'layouts/footer.html';
}
else
{
    /**
     * This is about as simple as it gets. I would be recommending
     * that you change this to a redirect, throw an error, or do
     * something way cooler than outputting 'Post does not exist'.
     *
     * I may choose to update this with something like a unicorn
     * or a dragon breathing fire but to keep it flexible, I will
     * leave it be for now.
     */
    echo 'Post does not exist';
}

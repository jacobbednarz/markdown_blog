<?php

// Include the class and simple configuration file
include_once 'markdown.php';
include_once 'config/config.php';

$requested_post = htmlspecialchars(trim(stripslashes($_GET['name'])));
$posts_url = POSTS_DIR . DIRECTORY_SEPARATOR . $requested_post . '.md';

if (file_exists($posts_url) && preg_match('/[^a-z_\-0-9]/i', $posts_url))
{
    $output = Markdown(file_get_contents(POSTS_DIR . DIRECTORY_SEPARATOR . $requested_post . '.md'));
    
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

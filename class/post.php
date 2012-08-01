<?php

class Post {

    function __construct() {}

    /**
     * Break the file into smaller, more useful pieces
     *
     * $file - The file to break apart
     */
    function split_file($file) 
    {
        return explode('===', $file, 3);
    }

    /**
     * Clean up the post path to be used in URL's
     *
     * $title - The document title
     */
    function path_to_post($title)
    {
        return str_replace(array(POSTS_DIR, '.md'), array(''), $title);
    }

    /**
     * Format the blog title to remove extensions and hypens
     *
     * $title - The document title
     */
    function format_blog_title($title)
    {
        return ucfirst(str_replace(array('posts_source/', '.md', '-'), array('', '', ' '), $title));
    }
}

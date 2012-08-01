<?php

class Post {

    function __construct() {}

    /**
     * Create an array of slugs to utilise within the document.
     *
     * $input - The input of data to separate.
     */
    function slugify($input)
    {
        $lines = explode("\n", $input);
        
        $a = array(); 
        $cur = array();
        
        foreach($lines as $line)
        {
            if (empty($line) || strpos($line, ':') === false) continue;
            list($key, $value) = explode(': ', $line);
            
            if (!array_key_exists($key, $cur))
            {
                $cur[$key] = $value;
            }
            else
            {
                $a[] = $cur;
                $cur = array();
                $cur[$key] = $value;
            }
        }
        
        $a[] = $cur;
        return $a;
    }

    /**
     * Break the file into smaller, more useful pieces.
     *
     * $file - The file to break apart.
     */
    function split_file($file) 
    {
        return explode('===', $file, 3);
    }

    /**
     * Clean up the post path to be used in URL's.
     *
     * $title - The document title.
     */
    function path_to_post($title)
    {
        return str_replace(array(POSTS_DIR, '.md'), array(''), $title);
    }

    /**
     * Format the blog title to remove extensions and hyphens.
     *
     * $title - The document title.
     */
    function format_blog_title($title)
    {
        return ucfirst(str_replace(array('posts_source/', '.md', '-'), array('', '', ' '), $title));
    }
}

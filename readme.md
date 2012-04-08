## Overview
The PHP + Markdown blogging application is a project that will hopefully allow PHP
developers to experience the simplicity and power of [Markdown](http://daringfireball.net/projects/markdown/) without the hassle of needing to write or configure a complex application.

## Installing
To install and start using this application open the following files in your
favourite editor:

#### config/config.php
The `POSTS_DIR` constant is used for defining where all the .md files are stored
in their raw format. By default, this is a directory called 'posts_source'. If
you want to change it, you will only need to change it here and it will be
altered throughout the application. `define('POSTS_DIR', 'posts_source');`

The `ADMIN_EMAIL` constant is currently unused however for future developments it
will be utilised for any notifications or debugging purposes that require
further action (i.e. 404's, error handling)

#### .htaccess
To keep the application URL's looking purrrty and user friendly, I added in an
Apache rewrite so the URL will be `http://domain.com/posts/name-of-post` which
hands the file to `view_post.php` and goes from there. You can update this if
you would prefer another URL structure.

#### layouts/header.html & layouts/footer.html
Plain and simple storage of static HTML files to allow the customisation of
your blog's theme and functionlity. The layout is only split into two files
however if you are comfortable with PHP, this can be easily changed to as many
or few as you would like.

#### view_post.php
Editting this file isn't super important however if you would like customised
error messages, throwing exceptions, etc. this is the place to do it.

## Adding posts
The only caveat to creating new posts is that the file name will
also be the URL of the post and the URL handler will only accept alphanumeric
characters (a-z 0-9), underscores and hyphens. If this naming convention is not
followed, the post will not be rendered.

## Contributing
The only way to improve something and make it better is to contribute to it.
Fork it, send pull requests, raise issues and bugs - All ideas and contributions
are welcome.

## Credits
- [PHP markdown](https://github.com/wolfie/php-markdown) for the base class of
  the application

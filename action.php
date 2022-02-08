<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Blog;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'all_blog')
    {
        $blog = new Blog();
        $allBlog = $blog->getAllBlog();
        include 'pages/blog.php';
    }
}
elseif (isset($_POST['btn']))
{
    $blog = new Blog($_POST);
    $message = $blog->index();
    include 'pages/home.php';
}

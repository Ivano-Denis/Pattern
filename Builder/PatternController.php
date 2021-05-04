<?php

require_once "Class/BlogPost.php";
require_once "BlogPostBuilder.php";



function getPost(string $title, string $body, $categories,$tags)
{
    $builder = new BlogPostBuilder();

    $post[] = $builder->setTitle($title)
                      ->setBody($body)
                      ->setCategories([
                          $categories
                      ])
                      ->setTags([
                          $tags
                      ])
                      ->getBlogPost();
    return $post;
}

$title = 'Builder';
$body = 'Builder body';
$categories = '';
$tags = 'pattern';

$result = getPost($title, $body, $categories , $tags);
var_dump($result);
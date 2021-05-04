<?php

require_once "Class/BlogPost.php";

interface BlogPostBuilderIntarface
{
    public function create(): BlogPostBuilderIntarface;

    public function setTitle(string $val): BlogPostBuilderIntarface;

    public function setBody(string $val): BlogPostBuilderIntarface;

    public function setCategories(array $val): BlogPostBuilderIntarface;

    public function setTags(array $val): BlogPostBuilderIntarface;

    public function getBlogPost(): BlogPost;
}

class BlogPostBuilder implements BlogPostBuilderIntarface
{
    private $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderIntarface
    {
        $this->blogPost = new BlogPost();

        return $this;
    }

    public function setTitle(string $val): BlogPostBuilderIntarface
    {
        $this->blogPost->title = $val;

        return $this;
    }

    public function setBody(string $val): BlogPostBuilderIntarface
    {
        $this->blogPost->body = $val;

        return $this;
    }

    public function setCategories(array $val): BlogPostBuilderIntarface
    {
        $this->blogPost->categories = $val;

        return $this;
    }

    public function setTags(array $val): BlogPostBuilderIntarface
    {
        $this->blogPost->tags = $val;

        return $this;
    }

    public function getBlogPost(): BlogPost
    {
        $result = $this->blogPost;
        $this->create();

        return $result;
    }
}
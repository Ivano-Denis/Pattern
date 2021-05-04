<?php

class BlogPost
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $body;

    /**
     * @var array
     */
    public $tags = [];

     /**
      * @var array
      */
    public $categories = [];

    public function __constructor()
    {

    }

}
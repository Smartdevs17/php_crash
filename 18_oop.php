<?php

class Post{
    public $title;
    public $desc;
    public $auth;

    public function _construct($title,$desc,$auth){
        $this->title = $title;
        $this->desc = $desc;
        $this->auth = $auth;
    }

    function addPost($title,$desc,$auth){
        $posts = [];
        $newPost = ["title"=> $this->title=$title,"description" => $this->desc=$desc,"author" => $this->auth=$auth];
        return array_push($posts,$newPost);
    }
}

$post1 = new Post();
$post2 = new Post("Programming","Programming is one of the best thing to ever happen to me","Sheges");

// $post1->addPost("football","the Premier league is back babe","smart_dev");

// var_dump($post1);title
// var_dump($post2);

echo $post2->title;


?>
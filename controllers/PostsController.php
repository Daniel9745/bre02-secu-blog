<?php

class PostController{
    private PostManager $pm;
    
    public function __construct() {
        $this->pm = new PostManager();
    }
    public function getPosts(): void{
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $posts = $this->pm->findOne($id);
            $template = "templates/posts.phtml";
            require "templates/layout.phtml";
        }
    }
    public function getPostsCategories(): void{
        $posts = $this->pm->findByCategory();
        $template = "templetes/postCategories.phtml";
        require "templates/layout.phtml";
    }
}
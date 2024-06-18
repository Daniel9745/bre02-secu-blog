<?php

class Router{

    private DefaultController $dc;
    private PostController $pc;
    private CommentController $cc;

    public function __construct(){
        $this->dc = new DefaultController();
        $this->pc = new PostController();
        $this->cc = new CommentController();
    }
    public function handleRequest(?string $route): void{
        if($route !== null && $route === "home"){
            $this->dc->home();
        }
        else if($route !== null && $route === "post"){
            // echo "<h1>je suis une page </h1>";
            $this->pc->getPosts();
        }
        elseif($id !==null && $id === $_GET["id"]){
            
        }
        else if($route !== null && $route === "post-categories"){
            $this->pc->getPostsCategories($post_id);
        }
        elseif($route !== null && $route === "comment"){
            $this->cc->getComment($comment);
        }
        else if($route === null){
            $this->dc->home();
        }
        // else{
        //     $this->dc->notFound();
        // }
    }
}
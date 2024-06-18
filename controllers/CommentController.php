<?php

class commentController{
    private CommentManager $cm;

    public function __construct(){
        $this->cm = new CommentManager();
    }
    public function getcomment(): void{
        $comment = $this->cm->findByPost();
        $template = "templates/comment.phtml";
        require "templates/layout.phtml";
    }
}
<?php


class Comment {

    private $id;
    private $content;
    private $postId;
    private $userId;
    
    public function __construct(){

    }

    public function getId(){
        return $this->id;
    }
    public function setId(?int $id){
        $this->id = $id;
    }
    public function getContent(){
        return $this->content;
    }
    public function setContent(string $content){
        $this->content = $content;
    }
    public function getPostId(){
        return $this->postId;
    }
    public function setPostId(?int $id){
        $this->postId = $postId; 
    }
    public function getUserId(){
        return $this->userId;
    }
    public function setUserId(?int $id){
        $this->userId = $userId;
    }

}
<?php

class Posts{
    private $id;
    private $title;
    private $excerpt;
    private $content;
    private $author;
    private $created_at;
    private $category;
    private $user;

    public function __construct($id, $title, $excerpt, $content, $author, $created_at){

    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getExcerpt(){
        return $this->excerpt;
    }
    public function setExcerpt($excerpt){
        $this->excerpt = $excerpt;
    }
    public function getContent(){
        return $this->content;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function getCreatedAt(){
        return $this->created_at;
    }
    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }
    public function getCategories() {
        return $this->categories;
    }
    public function setCategories(){
        $this->categories = $category;
    }
    public function getUser() {
        return $this->user;
    }
    public function setUser(){
        $this->user = $user;
    }
}
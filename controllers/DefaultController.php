<?php


class DefaultController{

    public function __construct(){

    }

    public function home(): void{
        $template = "templates/home.phtml";
        require "templates/layout.phtml";
    }

    
}
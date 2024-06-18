<?php

class CategoryManager extends AbstractManager{

    public function __construct(){
        parent::__construct();
    }
    public function findAll() : array{

        // $categories = [];

        $query = $this->db->prepare("SELECT * FROM categories");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        // foreach($result as $items){
        //     $category = new Category($items["name"]);
        //     $category->setId($items["id"]);
        //     $categories[] = $category;
        // }
        return $result;
    }
    public function findOne(? int $id) : category{
        $query = $this->db->prepare('SELECT * FROM categories WHERE id = :id');
        $parameters = [
            'id'=> $_GET['id']
        ];
        $query->execute($parameters);
        $user = $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
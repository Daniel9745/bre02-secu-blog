<?php

class PostManager extends AbstractManager{

    public function __construct(){

    }

    public function findLatest() :string{
        $query = $this->db->prepare('SELECT content FROM posts ORDER BY created_at DESC LIMIT 4');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function findOne(int $id) : array{
        
        $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $parameters = [
            'id'=> $_GET['id']
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function findByCategory(int $categoryId): array{
        $query = $this->db->prepare('SELECT * FROM posts WHERE category = :category_Id');
        $parameters = [
            'category_id'=> $_GET['category_id']
        ];
        $query->execute($parameters);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}
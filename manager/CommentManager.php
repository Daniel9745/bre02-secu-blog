<?php
use LDAP\Result;

class CommentManager extends AbstractManager{

    public function __construct(){

    }

    public function findByPost(int $postId) :string{
        $query = $this->db->prepare('SELECT content FROM comments WHERE id = :id');
        $parameters = [
            'post_id'=> $_GET['post_id']
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function create(comment $comment){
        $query = $this->db->prepare('INSERT INTO comments(id, content, postId, userId,) VALUE (null, :content, :postId, :userId)');
        $parameters = [
            'content' => $comment->getContent(),
            'postId' => $comment->getPostId(),
            'userId' => $comment->getUserId()
        ];
        $query->execute($parameters);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
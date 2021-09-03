<?php

namespace App\Tables;

class Posts{

    public static function getAll($db){
        return $db->query("
        SELECT posts.*,categories.name as category
         FROM posts 
         LEFT JOIN categories
         ON posts.category_id = categories.id
         ORDER BY id",__CLASS__);
    }


    public function __get($key)
    {
        $method = 'get'.ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getText(){
        return $this->text;
    }

    public function getImage(){
        return $this->image;
    }

    public function getImg(){
        if (is_file("./images/".$this->image)){
            return $this->image;
        }
        return "default.jpg";
    }

    public function getUrl(){
        return "?p=single&id=".$this->id;
    }

}
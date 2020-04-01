<?php

// app/Model/ArticleModel.php

namespace App\Model;

use App\App;
use App\Weblitzer\Model;


class ArticleModel extends Model
{
    protected static $table = 'articles';


    public static function insert($post)
    {
        App::getDatabase()->prepareInsert("INSERT INTO " . self::getTable() . " (title,content,created_at) VALUES (?,?,NOW()) ",[$post['title'],$post['content']]);

    }

    public static function update($id,$post)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE ". self::getTable() . " 
            SET title = ?,content = ?
            WHERE id = ?",
            array($post['title'],$post['content'],$id)
        );
    }

}

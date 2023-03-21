<?php

namespace app\models;

use Yii;
use yii\base\Model;


class AddPost extends Model
{
    public $writer;
    public $title;
    public $short_post;
    public $post;

    public function rules()
    {
        return [
            // required
            [['writer', 'title', 'short_post' , 'post'], 'required']
        ];
    }

    public function shortPost()
    {
        $get_half = strrpos(substr($this->post, 0, floor(strlen($this->post) / 8)), ' ') + 1;
        $short_post = substr($this->post, 0, $get_half);
        
        return true;

    }

}
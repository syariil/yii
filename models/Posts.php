<?php
    namespace app\models;

    use Yii;
    use yii\db\ActiveRecord;
    class Posts extends ActiveRecord
    {
        public static function tableName()
        {
            return 'posts';
        }
        

        public function shortPost()
        {
            $get_half = strrpos(substr($this->post, 0, floor(strlen($this->post) / 8)), ' ') + 1;
            $short_post = substr($this->post, 0, $get_half);
            
            return true;

        }
    }
?>
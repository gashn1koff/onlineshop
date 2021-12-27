<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return "product";
    }

//    public function getCategory($name)
//    {
//        return $this->hasOne(Category::class, ['id', 'category_id']);
//    }
}
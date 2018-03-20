<?php

namespace app\models;

use yii\db\ActiveRecord;

class Modelcar extends ActiveRecord
{
    public static function tableName()
    {
        //return 'products';
        return 'cars';
    }

    public function getCategories(){
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }
}
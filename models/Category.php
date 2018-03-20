<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }

    public function getModelcars() {
        return $this->hasMany(Modelcar::className(), ['category'=>'id']);
    }

}
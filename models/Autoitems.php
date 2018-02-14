<?php

namespace app\models;

use yii\db\ActiveRecord;

class Autoitems extends ActiveRecord
{
    public static function tableName()
    {
        return 'cars'; // car -название нашей таблицы в data base
    }
}
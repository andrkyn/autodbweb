<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 22.02.18
 * Time: 16:14
 */

namespace app\models;
use yii\db\ActiveRecord;

class TestfrmForm extends ActiveRecord {

    public static function tableName() {
        return 'posts';
    }

    //для валидации данных
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Емейл',
            'text' => 'Текст сообщения',
        ];

    }

    public function rules(){
        return [
            [['name', 'text'], 'required'], //поле name должно быть обязательным и присваиваем ему валидатор required
            ['email', 'trim'], //тут trim или safe
        ];
    }
}

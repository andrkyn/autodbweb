<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 22.02.18
 * Time: 16:14
 */

namespace app\models;

use yii\base\Model;

class TestpgForm extends Model {

    public $name;
    public $email;
    public $text;

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
            [['name', 'email'], 'required'], //поле name должно быть обязательным и присваиваем ему валидатор required
            ['email', 'email'],
            //['name', 'string', 'min'=> 2, 'tooShort' => 'Мало'],
            //['name', 'string', 'max'=> 8, 'tooLong' => 'Много'],
            ['name', 'string', 'length' => [2,8]],
            ['name', 'myRule'],
            ['text', 'trim'], //убирает пробелы в поле, безопасное поле
            //['text', 'safe'], //безопасная загрузка данных в модель
        ];
    }

    public function myRule($attr) {
        if(!in_array($this->$attr, ['hello', 'world'])) {
            $this->addError($attr, 'Wrong!');
        }
    }

}

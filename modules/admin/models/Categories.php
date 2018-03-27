<?php

namespace app\modules\admin\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $name
 * @property string $parent
 * @property string $img
 * @property string $description
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    public function getCars() {
        return $this->hasMany(Cars::className(), ['category'=>'id']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img', 'description'], 'required'],
            [['parent'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['img'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent' => 'Parent',
            'img' => 'Img',
            'description' => 'Description',
        ];
    }

    public static function find()
    {
        return new CategoriesQuery(get_called_class());
    }

    public static function getList()
    {
        return ArrayHelper::map(
            static::find()->select(['id', 'name'])->all(),
            'id',
            'name');
    }
}

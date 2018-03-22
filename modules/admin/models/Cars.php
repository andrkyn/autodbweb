<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property integer $id
 * @property integer $category
 * @property string $name
 * @property integer $parent
 * @property string $price
 * @property string $motor
 * @property integer $color
 * @property string $img
 * @property string $description
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cars';
    }

    public function getCategories() {
        return $this->hasOne(Categories::className(), ['id' =>'category']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'name', 'parent', 'price', 'motor', 'color', 'img', 'description'], 'required'],
            [['category', 'parent', 'color'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['price', 'motor'], 'string', 'max' => 10],
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
            'category' => 'Category',
            'name' => 'Name',
            'parent' => 'Parent',
            'price' => 'Price',
            'motor' => 'Motor',
            'color' => 'Color',
            'img' => 'Img',
            'description' => 'Description',
        ];
    }
}

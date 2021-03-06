<?php

namespace app\modules\admin\models;

use Yii;
use yii\helpers\ArrayHelper;

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
    public $image;
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
            //[['image'], 'file', 'extensions' => 'png, jpg'],
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
            //'categoryName' => 'имя категории',
            'parent' => 'Parent',
            'price' => 'Price',
            'motor' => 'Motor',
            'color' => 'Color',
            'img' => 'Img',
            'description' => 'Description',
            //'file' => 'Photo',
        ];
    }
    // для фильтра
    public static function find()
    {
        return new CarsQuery(get_called_class());
    }

    public static function getList()
    {
        return ArrayHelper::map(
            static::find()->select(['id', 'name'])->all(),
            'id',
            'name');
    }
}

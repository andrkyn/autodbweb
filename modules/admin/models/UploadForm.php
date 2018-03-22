<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile file attribute
     */
    public $image;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }
}
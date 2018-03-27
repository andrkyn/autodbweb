<?php

namespace app\modules\admin\models;

//use Yii;
//use yii\base\Model;
//use yii\data\ActiveDataProvider;
//use app\modules\admin\models\Cars;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Cars;
use yii\db\QueryInterface;

class CarsSearch extends Cars
{
    /* Вычисляемые аттрибуты */
    public $categoryName;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category', 'parent'], 'integer'],
            [['name'], 'safe'],
        ];
    }

    /**
     * Настроим поиск для использования
     * полей fullName и countryName
     */
    public function search($params)
    {
        $query = Cars::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


        //$this->addCondition($query, 'id');

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }


   /* protected function addCondition(QueryInterface $query, $attribute, $partialMatch = false)
    {
        if (($pos = strrpos($attribute, '.')) !== false) {
            $modelAttribute = substr($attribute, $pos + 1);
        } else {
            $modelAttribute = $attribute;
        }

        $value = $this->$modelAttribute;
        if (trim($value) === '') {
            return;
        }

        /*
         * Для корректной работы фильтра со связью со
         * свой же моделью делаем:
         */
        /*$attribute = "person.$attribute";

        if ($partialMatch) {
            $query->andWhere(['like', $attribute, $value]);
        } else {
            $query->andWhere([$attribute => $value]);
        }
    }*/
}
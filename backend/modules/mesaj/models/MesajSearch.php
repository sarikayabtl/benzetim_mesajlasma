<?php

namespace backend\modules\mesaj\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\mesaj\models\Mesaj;

/**
 * MesajSearch represents the model behind the search form about `backend\modules\mesaj\models\Mesaj`.
 */
class MesajSearch extends Mesaj
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'konusma_id', 'gonderen_id'], 'integer'],
            [['icerik', 'tarih'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Mesaj::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'konusma_id' => $this->konusma_id,
            'gonderen_id' => $this->gonderen_id,
            'tarih' => $this->tarih,
        ]);

        $query->andFilterWhere(['like', 'icerik', $this->icerik]);

        return $dataProvider;
    }
}

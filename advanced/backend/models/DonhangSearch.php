<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Donhang;

/**
 * DonhangSearch represents the model behind the search form about `backend\models\Donhang`.
 */
class DonhangSearch extends Donhang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'madonhang', 'id_dongho', 'soluong', 'payment_method', 'staff_create_id', 'status', 'delivered_at', 'created_at', 'updated_at'], 'integer'],
            [['customer_name', 'customer_address', 'customer_phone', 'deliverer_name', 'staff_export_id'], 'safe'],
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
        $query = Donhang::find();

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
            'madonhang' => $this->madonhang,
            'id_dongho' => $this->id_dongho,
            'soluong' => $this->soluong,
            'payment_method' => $this->payment_method,
            'staff_create_id' => $this->staff_create_id,
            'status' => $this->status,
            'delivered_at' => $this->delivered_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'customer_address', $this->customer_address])
            ->andFilterWhere(['like', 'customer_phone', $this->customer_phone])
            ->andFilterWhere(['like', 'deliverer_name', $this->deliverer_name])
            ->andFilterWhere(['like', 'staff_export_id', $this->staff_export_id]);

        return $dataProvider;
    }
}

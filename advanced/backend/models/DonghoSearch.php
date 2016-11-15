<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dongho;

/**
 * DonghoSearch represents the model behind the search form about `backend\models\Dongho`.
 */
class DonghoSearch extends Dongho
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'brand_id', 'id_kieumay', 'id_kieudang', 'status', 'created_at', 'updated_at'], 'integer'],
            [['masp', 'tensp', 'mota', 'xuatxu', 'loaikinh', 'loaiday', 'loaivo', 'duongkinh', 'doday', 'dochiunuoc', 'tinhnangkhac', 'giaban', 'gianhap'], 'safe'],
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
        $query = Dongho::find();

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
            'brand_id' => $this->brand_id,
            'id_kieumay' => $this->id_kieumay,
            'id_kieudang' => $this->id_kieudang,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'masp', $this->masp])
            ->andFilterWhere(['like', 'tensp', $this->tensp])
            ->andFilterWhere(['like', 'mota', $this->mota])
            ->andFilterWhere(['like', 'xuatxu', $this->xuatxu])
            ->andFilterWhere(['like', 'loaikinh', $this->loaikinh])
            ->andFilterWhere(['like', 'loaiday', $this->loaiday])
            ->andFilterWhere(['like', 'loaivo', $this->loaivo])
            ->andFilterWhere(['like', 'duongkinh', $this->duongkinh])
            ->andFilterWhere(['like', 'doday', $this->doday])
            ->andFilterWhere(['like', 'dochiunuoc', $this->dochiunuoc])
            ->andFilterWhere(['like', 'tinhnangkhac', $this->tinhnangkhac])
            ->andFilterWhere(['like', 'giaban', $this->giaban])
            ->andFilterWhere(['like', 'gianhap', $this->gianhap]);

        return $dataProvider;
    }
}

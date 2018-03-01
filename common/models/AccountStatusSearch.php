<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AccountStatus;

/**
 * AccountStatusSearch represents the model behind the search form about `common\models\AccountStatus`.
 */
class AccountStatusSearch extends AccountStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['payment_date', 'start_date', 'ending_date', 'saldo', 'abono', 'total'], 'safe'],
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
        $query = AccountStatus::find();

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
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'payment_date', $this->payment_date])
            ->andFilterWhere(['like', 'start_date', $this->start_date])
            ->andFilterWhere(['like', 'ending_date', $this->ending_date])
            ->andFilterWhere(['like', 'saldo', $this->saldo])
            ->andFilterWhere(['like', 'abono', $this->abono])
            ->andFilterWhere(['like', 'total', $this->total]);

        return $dataProvider;
    }
}

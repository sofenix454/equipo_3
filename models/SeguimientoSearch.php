<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Seguimiento;

/**
 * SeguimientoSearch represents the model behind the search form of `app\models\Seguimiento`.
 */
class SeguimientoSearch extends Seguimiento
{   
    public $alumnoNombre;
    public $divisionNombre;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['seg_id', 'seg_fkdivision', 'seg_fkalumno'], 'integer'],
            [['alumnoNombre','divisionNombre'],'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Seguimiento::find();

        // add conditions that should always apply here
        $query->joinWith(['segFkdivision','segFkalumno.aluFkusuario']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'attributes' => [
                'seg_id',
                'alumnoNombre'=> [
                    'asc'=>['usu_nombre' => SORT_ASC],
                    'desc'=>['usu_nombre' => SORT_DESC],
                    'default'=>SORT_ASC,
                ],

                'divisionNombre' => [
                    'asc'=>['div_nombre' => SORT_ASC],
                    'desc'=>['div_nombre' => SORT_DESC],
                    'default'=>SORT_ASC,
                ]
            ]
        ]);
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'seg_id' => $this->seg_id,
            'seg_fkdivision' => $this->seg_fkdivision,
            'seg_fkalumno' => $this->seg_fkalumno,
        ]);

        $query->andFilterWhere(['like','div_nombre', $this->divisionNombre])
            ->andFilterWhere(['like','usu_nombre', $this->alumnoNombre]);

        return $dataProvider;
    }
}

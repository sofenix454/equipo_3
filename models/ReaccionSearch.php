<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reaccion;

/**
 * ReaccionSearch represents the model behind the search form of `app\models\Reaccion`.
 */
class ReaccionSearch extends Reaccion
{
    public $alumnoNombre;
    public $avisoTitulo;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rea_id', 'rea_fkalumno', 'rea_fkaviso' ], 'integer'],
            [['alumnoNombre','avisoTitulo'],'safe'], 
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
        $query = Reaccion::find();

        // add conditions that should always apply here
        $query->joinWith(['reaFkaviso','reaFkalumno.aluFkusuario']);
            

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'attributes' => [
                'rea_id',
                'alumnoNombre'=> [
                    'asc'=>['usu_nombre' => SORT_ASC],
                    'desc'=>['usu_nombre' => SORT_DESC],
                    'default'=>SORT_ASC,
                ],

                'avisoTitulo' => [
                    'asc'=>['avi_titulo' => SORT_ASC],
                    'desc'=>['avi_titulo' => SORT_DESC],
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
            'rea_id' => $this->rea_id,
            'rea_fkalumno' => $this->rea_fkalumno,
            'rea_fkaviso' => $this->rea_fkaviso,
        ]);

        $query->andFilterWhere(['like','avi_titulo', $this->avisoTitulo])
            ->andFilterWhere(['like','usu_nombre', $this->alumnoNombre]);

        return $dataProvider;
    }
}

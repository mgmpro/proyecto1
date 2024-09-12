<?php

use app\models\Cuestionario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\searchs\CuestionarioSearchs $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Categorías';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuestionario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <h3>Selecciona una Categoría</h3>

    <p>
        <?= Html::a('Crear Categoría', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'categoria',
            [
                'class' => ActionColumn::className(),
                'template' => '{view} {update} {delete} {myButton}',
                'buttons' => [
                    'myButton' => function($url, $model, $key) {     // render your custom button
                        return Html::a(
                            '<b>ACCEDER</b>',
                            [
                                '/cuestionario/acceder',
                                'id' => $model->id
                            ]
                        );
                    }
                ],
                'urlCreator' => function ($action, Cuestionario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

</div>

<?php

use app\models\Recomendacion;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\searchs\RecomendacionSearchs $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Recomendacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recomendacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Recomendacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'texto',
            'fecha',
            'usuario_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Recomendacion $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Recomendacion $model */

$this->title = 'Create Recomendacion';
$this->params['breadcrumbs'][] = ['label' => 'Recomendacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recomendacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

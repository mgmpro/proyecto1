<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\searchs\PreguntaSearchs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pregunta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enunciado') ?>

    <?= $form->field($model, 'alternativa1') ?>

    <?= $form->field($model, 'alternativa2') ?>

    <?= $form->field($model, 'alternativa3') ?>

    <?php // echo $form->field($model, 'alternativa4') ?>

    <?php // echo $form->field($model, 'alternativacorrecta') ?>

    <?php // echo $form->field($model, 'cuestionario_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

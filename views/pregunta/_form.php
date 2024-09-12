<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pregunta $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pregunta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'enunciado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternativa1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternativa2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternativa3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternativa4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternativacorrecta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuestionario_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

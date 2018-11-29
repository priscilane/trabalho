<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Email */
/* @var $form ActiveForm */
?>
<div class="email">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'titulo') ?>
        <?= $form->field($model, 'mensagem') ?>
        <?= $form->field($model, 'user_enviado') ?>
        <?= $form->field($model, 'user_recebido') ?>
        <?= $form->field($model, 'active_enviado') ?>
        <?= $form->field($model, 'active_recebido') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- email -->

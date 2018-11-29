<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Email */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="email-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mensagem')->textarea(['rows' => 6]) ?>

    <!--<= $form->field($model, 'user_enviado')->textInput() ?>-->

    <?= $form->field($model, 'user_enviado')->hiddenInput(['value'=>Yii::$app->user->id])->label(false); ?>



    <?=  $form->field($model, 'user_recebido')->dropdownList([
            100 => "Paulo", 
            101 => 'Jose'
        ],
        ['prompt'=>'Selecione Usuario']
    );?>


    <?= $form->field($model, 'active_enviado')->hiddenInput(['value'=>'1'])->label(false); ?>

    <?= $form->field($model, 'active_recebido')->hiddenInput(['value'=>'1'])->label(false); ?>


    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

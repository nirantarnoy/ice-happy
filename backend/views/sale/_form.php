<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sale-form">
    <div class="card">
        <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'sale_no')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'trans_date')->textInput() ?>

                <?= $form->field($model, 'customer_id')->textInput() ?>

                <?= $form->field($model, 'sale_type_id')->textInput() ?>

                <?= $form->field($model, 'payment_type_id')->textInput() ?>

                <?= $form->field($model, 'discount_per')->textInput() ?>

                <?= $form->field($model, 'discount_amount')->textInput() ?>

                <?= $form->field($model, 'sale_total')->textInput() ?>

                <?= $form->field($model, 'sale_total_text')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'status')->textInput() ?>

             
                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>

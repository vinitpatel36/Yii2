<?php $form = \yii\widgets\ActiveForm::begin(); ?>

<?= $form->field($model, 'username')->textInput() ?>
<?= $form->field($model, 'email')->textInput() ?>
<?= $form->field($model, 'password')->passwordInput() ?>

<div class="form-group">
    <?= \yii\helpers\Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php \yii\widgets\ActiveForm::end(); ?>

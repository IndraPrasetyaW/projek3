<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-container">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="login-form">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username') ?>
        <?= $form->field($model, 'password')->passwordInput()->label('Password') ?>
        <?= $form->field($model, 'rememberMe')->checkbox()->label('Remember Me') ?>

        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

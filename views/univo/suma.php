<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php

$this->title = 'Calculadora UNIVO';
$this->params['breadcrumbs'][] = $this->title;

if (isset($respuesta)) {
    echo Html::tag('div', Html::encode($respuesta), ['class' => 'alert alert-warning']);
}
?>

<div class="row">
    <div class="container">
        <?php $formulario = ActiveForm::begin(); ?>

        <?= $formulario->field($model, 'valor_a')->textInput(['type' => 'number']) ?>
        <?= $formulario->field($model, 'valor_b')->textInput(['type' => 'number']) ?>
        <?= $formulario->field($model, 'operador')->dropDownList(
            [
                '+' => 'Suma',
                '-' => 'Resta',
                '*' => 'Multiplicación',
                '/' => 'División',
            ],
            ['prompt' => 'Selecciona un operador'] // Opción por defecto
        ) ?>


        <div class="form-group">
            <?= Html::submitButton('Aceptar', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
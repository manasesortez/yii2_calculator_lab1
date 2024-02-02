<?php

namespace app\controllers;

use app\models\SumarForm;
use app\models\RestaForm;
use app\models\MultiplicacionForm;
use app\models\DivisionForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\Controller;

class UnivoController extends Controller
{
    public function actionIndex(
)
    {
        $mensaje = 'Yes, it is';
        $h2 = 'UNIVO';
        $dateTime = new \DateTime();

        return $this->render(
            'index',
            [
                'mensaje' => $mensaje,
                'h2' => $h2,
                'dateTime' => $dateTime,
            ]
        );
    }

    public function actionSuma()
    {
        $model = new SumarForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $resultado = $model->valor_a + $model->valor_b;
            $respuesta = ("El resultado es: " . $resultado);

            return $this->render('suma', ['model' => $model, 'respuesta' => $respuesta]);
        }

        return $this->render('suma', ['model' => $model]);
    }

    public function actionResta()
    {
        $model = new RestaForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $resultado = $model->resta_valor_a - $model->resta_valor_b;
            $respuesta = ("El resultado es: " . $resultado);

            return $this->render('resta', ['model' => $model, 'respuesta' => $respuesta]);
        }

        return $this->render('resta', ['model' => $model]);
    }

    public function actionMultiplicacion()
    {
        $model = new MultiplicacionForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $resultado = $model->multiplicacion_valor_a * $model->multiplicacion_valor_b;
            $respuesta = ("El resultado es: " . $resultado);

            return $this->render('multiplicacion', ['model' => $model, 'respuesta' => $respuesta]);
        }

        return $this->render('multiplicacion', ['model' => $model]);
    }

    public function actionDivision()
    {
        $model = new DivisionForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $resultado = $model->division_valor_a / $model->division_valor_b;
            $respuesta = ("El resultado es: " . $resultado);

            return $this->render('division', ['model' => $model, 'respuesta' => $respuesta]);
        }

        return $this->render('division', ['model' => $model]);
    }
}
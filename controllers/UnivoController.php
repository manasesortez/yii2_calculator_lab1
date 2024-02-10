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

 /*    public function actionSuma()
    {
        $model = new SumarForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {


            $resultado = $model->valor_a + $model->valor_b;
            $respuesta = ("El resultado es: " . $resultado);

            return $this->render('suma', ['model' => $model, 'respuesta' => $respuesta]);
        }

        return $this->render('suma', ['model' => $model]);
    } */


    public function actionSuma()
{
    $model = new SumarForm();

    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        switch ($model->operador) {
            case '+':
                $resultado = $model->valor_a + $model->valor_b;
                break;
            case '-':
                $resultado = $model->valor_a - $model->valor_b;
                break;
            case '*':
                $resultado = $model->valor_a * $model->valor_b;
                break;
            case '/':
                if ($model->valor_b != 0) {
                    $resultado = $model->valor_a / $model->valor_b;
                } else {
                    $respuesta = 'No se puede dividir por cero.';
                    return $this->render('suma', ['model' => $model, 'respuesta' => $respuesta]);
                }
                break;
            default:
                $respuesta = 'Operador no válido.';
                return $this->render('suma', ['model' => $model, 'respuesta' => $respuesta]);
        }

        $respuesta = "El resultado es: $resultado";
        return $this->render('suma', ['model' => $model, 'respuesta' => $respuesta]);
    }

    return $this->render('suma', ['model' => $model]);
}


    
}
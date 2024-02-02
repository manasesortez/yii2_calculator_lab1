<?php

namespace app\models;

use Yii;
use yii\base\Model;

class MultiplicacionForm extends Model
{
    public $multiplicacion_valor_a;
    public $multiplicacion_valor_b;

    public function rules(
)
    {
        return [
            [['multiplicacion_valor_a', 'multiplicacion_valor_b'], 'required'],
            [['multiplicacion_valor_a', 'multiplicacion_valor_b'], 'number'],
        ];
    }
}
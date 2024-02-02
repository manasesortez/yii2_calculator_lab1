<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RestaForm extends Model
{
    public $resta_valor_a;
    public $resta_valor_b;

    public function rules(
)
    {
        return [
            [['resta_valor_a', 'resta_valor_b'], 'required'],
            [['resta_valor_a', 'resta_valor_b'], 'number'],
        ];
    }
}
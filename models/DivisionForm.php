<?php

namespace app\models;

use Yii;
use yii\base\Model;

class DivisionForm extends Model
{
    public $division_valor_a;
    public $division_valor_b;

    public function rules()
    {
        return [
            [['division_valor_a', 'division_valor_b'], 'required'],
            [['division_valor_a', 'division_valor_b'], 'number'],
        ];
    }
}
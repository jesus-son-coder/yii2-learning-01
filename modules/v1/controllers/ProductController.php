<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Product controller for the `v1` module
 */
class ProductController extends ActiveController
{
    public $modelClass = "app\models\Product";

    public function behaviors()
    {

        $behaviors = parent::behaviors();

        $behaviors['authenticator'] = [
            'class' => \yii\filters\auth\HttpBearerAuth::class,
            'except' => ['test'],
        ];
        return $behaviors;
    }

    public function actionTest(): array
    {
        return ['message' => 'Hello World!'];
    }

}


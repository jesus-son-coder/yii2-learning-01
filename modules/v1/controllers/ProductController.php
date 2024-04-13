<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Product controller for the `v1` module
 */
class ProductController extends ActiveController
{
    public $modelClass = "app\models\Product";

    public function behaviors(): array
    {
        $behaviors = parent::behaviors();

        $behaviors['compositeAuth'] = [
            'class' => \yii\filters\auth\CompositeAuth::class,
            'authMethods' => [
                \yii\filters\auth\QueryParamAuth::class,
                \yii\filters\auth\HttpBasicAuth::class,

            ]
        ];

        /*
        $behaviors['authenticator'] = [
            // 'class' => \yii\filters\auth\HttpBearerAuth::class,
            // 'class' => \yii\filters\auth\HttpBasicAuth::class,
            // 'class' => \yii\filters\auth\QueryParamAuth::class,
            // 'tokenParam' => 'API_KEY',
        ]; */
        return $behaviors;
    }

}


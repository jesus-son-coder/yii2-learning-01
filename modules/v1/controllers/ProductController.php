<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Product controller for the `v1` module
 */
class ProductController extends ActiveController
{
    public $modelClass = "app\models\Product";
}


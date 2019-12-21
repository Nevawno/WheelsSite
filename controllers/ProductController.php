<?php


namespace app\controllers;

use yii\web\Controller;
use app\models\Wheels;
use Yii;

class ProductController extends Controller {

    public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }

    public function actionView() {
        $id = Yii::$app->request->get("id");
        $product = Wheels::findOne($id);
        if (empty($product)) {
            throw new \yii\web\HttpException(404, 'Такого товара нет');
        }
        return $this->render('view', compact('product'));
    }

}
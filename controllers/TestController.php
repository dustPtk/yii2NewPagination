<?php
/**
 * Created by PhpStorm.
 * User: ptk
 * Date: 19/7/12
 * Time: 下午2:44
 */

namespace app\controllers;

use app\models\OrderModel;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionGetList()
    {
        $orderModel = new OrderModel();
        $dataProvider = $orderModel->getList();
        return $this->render('get-list',[
            'dataProvider' => $dataProvider
        ]);
    }
}